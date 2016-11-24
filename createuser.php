<html>
<head>
	<title>Creating a user object using classes</title>
</head>
<body>
	<?php 
		require_once('class.php');
		//create a new user
		$adminUser = new User('admin','admin@user.com');
		//review the attributes
		echo "User ID:" .$adminUser->GetUserID();  echo "<br>";
		echo "Username:" .$adminUser->GetUserName(); echo "<br>";
		echo "Preferred email:" .$adminUser->GetPrefEmail(); echo "<br>";
		echo "Secondary email:" .$adminUser->GetSecondEmail();
		echo "User Status" .$adminUser->GetStatus() ."<br>";
		echo "<br>";
		$normalUser = new User('nuser','nuser@gmail.com','nuser-alt@yahoo.com');
		print_r($normalUser);
		echo "<br><br>";
		var_dump($normalUser);
		echo "<br><br>";
	?>
</body>
</html>