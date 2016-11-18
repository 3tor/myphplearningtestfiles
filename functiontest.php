<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	function ValidateUser($username, $password)
	{
		static $user_info = array("zsmith" =>"password", "rtam" =>"password", "q" =>"continuum", "kofi" =>"pass");
		if($password == $user_info[$username]){
			return true;
		}
		else {
			return false;
		}
	}
	$result = ValidateUser("kofi", "pass");
	if($result == true){
		echo "Welcome";
	}
	else {
		echo "Please try again";
	}
?>
</body>
</html>