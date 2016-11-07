<?php
	
namespace VeliaSMB;

	/**
	* 
	* 
	*/
	class SmbServer
	{
		private $id;
		private $location;
		private $ipAddress;
		private $hostAddress;
		private $rootFolder;


		function __construct($id, $location, $ipAddress, $hostAddress, $rootFolder)
		{
			$this->id = $id;
			$this->location = $location;
			$this->ipAddress = $ipAddress;
			$this->hostAddress = $hostAddress;
			$this->rootFolder = $rootFolder;
		}


		public function getId()
		{
			return $this->id;
		}

		public function getLocation()
		{
			return $this->location;
		}

		public function getIpAddress()
		{
			return $this->ipAddress;
		}

		public function getHostAddress()
		{
			return $this->hostAddress;
		}	
		public function getRootFolder()
		{
			return $this->rootFolder;
		}	


		public function crawl()
		{
			$folders = array();
			$folderItems = scandir($this->getRootFolder());

			foreach ($folderItems as $item) {
				if (is_dir($this->getRootFolder()."/".$item)){
		            if ($item!="." && $item!=".."){ 


		            	$content = new Folder($id, $name, $server, $path, $content, 0);      	
		                array_push($folders, $item);
		            }
				}
			}
			return $folders;
		}			



	}