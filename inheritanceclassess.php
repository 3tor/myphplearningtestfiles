<?php 
	/**
	* Parent or base class
	*/
	class Person
	{
		private $name;
		private $nationalID;
		
		//by default a function is public if no access specifier has been declared
		function __construct($personsName,$ID)
		{
			$this->name = strtolower($personsName);
			$this->nationalID = $ID;
		}
		public function GetName()
		{
			return $this->name;
		}
		protected function SetName($newName)
		{
			$this->name = strtoupper($newName);
		}
		final private function SetNationalID($ID)
		{
			//national ID is set during construction and cannot be changed
		}
		public function GetNationalID()
		{
			return $this->nationalID;
		}
	}


	/**
	* Child or descendant or subclass
	*/
	class Employee extends Person
	{
		private $employeeID;
		private $department;

		function __construct($employeeName,$nationalID,$dept)
		{
			parent::__construct($employeeName,$nationalID);
			$this->employeeID = $this->GenerateEmployeeID();
			$this->department = $dept;
		}
		public function SetName($newName)
		{
			parent::SetName($newName);
		}
		final private function SetEmployeeID($eID)
		{
			//employeeID is set at construction and cannot be reset
		}
		public function GetEmployeeID()
		{
			return $this->employeeID;
		}
		public function SetDepartment($dept)
		{
			 $this->department = $dept;
		}
		public function GetDepartment()
		{
			return $this->department;
		}
		final private function GenerateEmployeeID()
		{
			static $IDGen = 1;
			return $IDGen++;
		}
	}
 ?>