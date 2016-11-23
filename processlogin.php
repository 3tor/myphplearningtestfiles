<?php
	require_once('validateUser.php'); 
	$DEBUG = 0;
	if (!empty($_POST['username']) && !empty($_POST['password'])) {
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if ($GLOBALS['DEBUG']) {
			echo "Process Login: username" . $username . "password" . $password. "<br>";

		}
		ValidateUser($username,$password); //call the function
	}
	else if (empty($_POST['username']) || empty($_POST['password'])) {
		echo "Please provide username or password";
	}
	
?>