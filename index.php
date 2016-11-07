<!DOCTYPE html>
<html lang="en">
<?php 
    include('php/functions.php');
    include('php/classes/class.SmbServer.php');

    $baseDir = "./ISOs";

?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Velia.net SMB-Server</title>

    <!-- JQuery UI CSS -->
    <link href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" >

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">    


</head>

<body>


    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Velia.net SMB-Server</h1>
                <p class="lead">ISO files to mount via IPMI</p>
             </div>
        </div>
        <!-- /.row -->
                       
        <div class="row">
            <div class="col-lg-12 text-left location-select">
                <ul class="nav nav-pills">

<!-- Show SMB servers from list -->
                    <?php 
                        printServerList("serverlist.json");
                    ?>

                </ul> 
            </div>
        </div>
        <!-- /.row -->

        <div class="row divider-row">
            <div class="col-lg-12 text-center"></div>
        </div>
        <!-- /.row -->

    

        <div class="row">
            <div class="col-xs-4 text-left base-Dir-select">
                <ul class="nav nav-tabs nav-stacked">

<!-- Scan base directory -->                
                <?php

                   $subDirs = scanBaseDir($baseDir);
                   printBaseDir($subDirs);
                ?>                          
                </ul>
            </div>
            <div class="col-md-8 text-left tab-content">
<!-- Scan base directory -->   
              <?php 
                printSubDirContent($baseDir,$subDirs);
              ?>

            </div>  
                 
        </div>
        <!-- /.row -->


        <div id="iso-dialog" title="Path to ISO">
            <table>
                <tbody>
                    <tr>
                        <td><label for="sharehost">Share host</label></td>
                        <td><input type="text" name="sharehost" value="85.195.124.157" readonly /></td>
                    </tr>
                    <tr>
                        <td><label for="path">Path to image</label></td>
                        <td><input type="text" name="path" value="\ISO\drivers\broadwell2012r2.iso" readonly /></td>
                    </tr>
                </tbody>
            </table>     
        </div>
        <!-- /.iso-dialog -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 3.1.1 -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- jQuery UI Version 1.13.1 -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Latest compiled and minified Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  

    <!-- Script to open the dialog -->
    <script src="js/iso-dialog.js"></script>    

</body>

</html>