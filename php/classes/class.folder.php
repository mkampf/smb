<?php
	
	/**
	* 
	* @param $content Array 	result of scandir
	* @param $level int 		level in directory hierarchy (0 = base folder)
	*/
	class Folder extends File
	{
		private $content;
		private $level;


		function __construct($content, $level)
		{
			parent::__construct();
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