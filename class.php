<?php 
require_once('helperclassfxn.php');
/**
* User class
*/
class User
{
	//attributes
	private $username;
	private $preferredEmail;
	private $secondaryEmail;
	private $userID;
	private $status;

	public function __construct($newUser, $Email_1, $Email_2 = null)
	{
		$this->username = $newUser;
		$this->preferredEmail = $Email_1;
		$this->secondaryEmail = $Email_2;
		$this->status = 1;
		$this->userID = GetNextUserID();
	}

	//destructor destroys the object and releases resources here if necessary
	public function __destruct()
	{
		echo "$this->username object is being destroyed<br>";
	}
	//returns the $username
	public function GetUserName()
	{
		return $this->username;
	}
	//returns the $preferredEmail
	public function GetPrefEmail()
	{
		return $this->preferredEmail;
	}
	//returns the $secondaryEmail
	public function GetSecondEmail()
	{
		return $this->secondaryEmail;
	}
	//returns the $userID
	public function GetUserId()
	{
		return $this->userID;
	}
	//returns the $status
	public function GetStatus()
	{
		return $this->status;
	}
	public function SetUserStatus($input)
	{
		if($input > 1 || $input < 0)
		{
			return false;
		}
		$this->status = $input;
		return true;
	}
}
?>