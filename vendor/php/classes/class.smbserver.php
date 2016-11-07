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

/*
		public function setId($id)
		{
			$this->id = $id;
		}

		public function setLocation($location)
		{
			$this->location = $location;
		}

		public function setIpAddress($ipAddress)
		{
			$this->ipAddress = $ipAddress;
		}

		public function sethostAddress($hostAddress)
		{
			$this->hostAddress = $hostAddress;
		}						
*/


	}