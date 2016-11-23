<?php 
	function ValidateUser($username,$password)
	{
		if ($GLOBALS['DEBUG']) {
			echo "ValidateUser() - username" . $username . "password" . $password. "<br>";
		}
		$filename = 'C:\xampp\htdocs\phptuts\usercreds.txt';
		if ($file = fopen($filename, "r")) {
			$creds = fread($file, filesize($filename));
			$data = explode(",", $creds);
			 if ($GLOBALS['DEBUG']) {
			 	print_r($data);
			}
			if ($data[0]== $username && $data[1]== $password) {
				header("Location: http://127.0.0.1:8080/phptuts/loginsuccess.php");
			}
			else {
				echo "<br><h1>Invalid Login attempt. Please try again!</h1><br>";
			}
		}
		else {
			echo "Error opening file usercreds.txt <br>";
		}
	}
?>