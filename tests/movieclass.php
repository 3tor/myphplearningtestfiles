<?php 
	/**
	* Movie class
	*/
	class Movie
	{
		private $mtitle;
		private $myear;
		private $mdirector;
		private $mrating;

		function __construct($title,$year,$director,$rating)
		{
			$this->mtitle = $title;
			$this->myear = $year;
			$this->mdirector = $director;
			$this->mrating = $rating;
		}
		public function GetTitle()
		{
			return $this->mtitle;
		}
		public function GetRating()
		{
			return $this->mrating;
		}
		public function GetDirector()
		{
			return $this->mdirector;
		}
		public function GetYear()
		{
			return $this->myear;
		}
	}
 ?>