<?php 
	require_once("ValidatorClass.php");
	$DEBUG = 1;
	$validator = new Validator();
	if(!empty($_POST['username']))
	{
		$username = trim($_POST['username']);
		if($GLOBALS['DEBUG'])
		{
			echo "loginValidation - username:" . $username . "<br>";
		}
		$username = $validator->validate($username,alpha);
		if(!$username)
		{
			echo "There was an error with the input:" . $validator->GetError() . "<br>";
			return;
		}
		echo "Clean Username:" . $username . "<br>";
	}
	if (!empty($_POST['email'])) {
		$email = trim($_POST['email']);
		$email = $validator->validate($email,email);
		if(!$email)
		{
			echo "There was an error with the input:". $validator->GetError(). "<br>";
			return;
		}
		echo "Clean email:" . $email . "<br>";
	}
	if(!empty($_POST['url']))
	{
		$url = trim($_POST['url']);
		$url = $validator->validate($url,url);
		if(!$url)
		{
			echo "There was an error with the input:" . $validator->GetError() . "<br>";
			return;
		}
		echo "Clean url: ". $url . "<br>";
	}
	if(!empty($_POST['phone']))
	{
		$phone = trim($_POST['phone']);
		$phone = $validator->validate($phone,phone);
		if(!$phone)
		{
			echo "There was an error with the input:" . $validator->GetError() . "<br>";
			return;
		}
		echo "Clean phone" . $phone . "<br>";
	}
 ?>