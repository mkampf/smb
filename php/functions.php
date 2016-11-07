<?php



/**
 * Scans base directory
 *
 *@param string $path    path to displayed directory
 *@return Array $subF
 */

function scanBaseDir($path)
{
	$subDirs = array();
	$DirItems = scandir($path);

	foreach ($DirItems as $item) {
		if (is_dir($path."/".$item)){
            if ($item!="." && $item!=".."){       	
                array_push($subDirs, $item);
            }
		}
	}
	return $subDirs;
}


/**
 * prints navigation of base directory
 *
 *@param Array $subDirs    array of subdirectories
 */

function printBaseDir($subDirs)
{
	$i = 0;

	foreach ($subDirs as $item) {
		if($i===0){
		  echo('<li role="presentation" class="active"><a data-toggle="tab" href="#'.$item.'">'.$item.'</a></li>');
		}else{
		  echo('<li role="presentation"><a data-toggle="tab" href="#'.$item.'">'.$item.'</a></li>');	
		}
		$i++;
    }
}

/**
 * prints navigation of base directory
 *
 *@param Array $subDirs    array of subdirectories
 */

function printSubDirContent($baseDir, $subDirs)
{
	$i = 0;

	foreach ($subDirs as $subDir) {
		$subDirPath = $baseDir."/".$subDir;
		$subDirContent = scandir($subDirPath);
		if($i===0){
			echo '<div id="'.$subDir.'" class="tab-pane fade in active">';
		}else{
			echo '<div id="'.$subDir.'" class="tab-pane fade">';
		}
		$i++;
		foreach ($subDirContent as $item) {

			if(!is_dir($subDirPath."/".$item)){
				echo ('<p><a href="#" class="iso-link">'.$item.'</a></p>');
			}else if($item != "." && $item != ".."){
				echo ('<p><a href="#" class="subdir"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> &nbsp;'.$item.'</a></p>');
			}
			
		}
		echo "</div>";
    }	
}






function serversToList($arr)
{
	return json_encode($arr);
}


function serversFromList($file)
{
	$json = file_get_contents($file);
	return json_decode($json);
}



/**
 * Reads serverlist.json & prints SMB server locations to the nav-pills ul
 */

function printServerList($file)
{	
	$i=0;
    $serverArray = json_decode(file_get_contents($file));
  
    foreach ($serverArray as $server) {
    	if(is_array($server)){

    		$id = $server[0];
    		$shortcode = preg_replace('/[0-9]+/', '', $id);
    		$location = $server[1];
    		$hostaddress = $server[3];

    		if($i === 0){
	    		echo ('<li role="presentation" class="active">
	    				<a href="#'.$hostaddress.'" data-toggle="tab" id="'.$id.'">'.$shortcode.' '.$location.'</a>
	    			   </li>');
	    	}else{
	    		echo ('<li role="presentation">
	    				<a href="#'.$hostaddress.'" data-toggle="tab" id="'.$id.'">'.$shortcode.' '.$location.'</a>
	    			   </li>');	    		
	    	}
	    	$i++;
    	}      
    }  
}
