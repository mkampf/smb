<?php
	
	/**
	* 
	* 
	*/
	abstract class File
	{
		private $id;
		private $server;
		private $path;
		private $name;


		function __construct($id, $name, $server, $path)
		{
			$this->id = $id;
			$this->name = $name;			
			$this->server = $server;
			$this->path = $path;
		}


		public function getId()
		{
			return $this->id;
		}

		public function getName()
		{
			return $this->name;
		}

		public function getServer()
		{
			return $this->server;
		}

		public function getPath()
		{
			return $this->hostAddress;
		}	

	}