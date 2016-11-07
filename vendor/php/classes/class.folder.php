<?php

namespace VeliaSMB;
	
	/**
	* 
	* @param $content Array 	result of scandir
	* @param $level int 		level in directory hierarchy (0 = base folder)
	*/


	class Folder extends File
	{
		private $content;
		private $level;


		function __construct($id, $name, $server, $path, $content, $level)
		{
			parent::__construct($id, $name, $server, $path);
			$this->content = $content;
			$this->level = $level;
		}


		public function getContent()
		{
			return $this->content;
		}

		public function getLevel()
		{
			return $this->level;
		}

	}

