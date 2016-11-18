<html>
<head>
	<title></title>
</head>
<body>
<?php 
	$username = "sconnor";
	$password = "fatethatwemake";
	$users_info = array("zsmith" =>"password", "rtam" =>"password", "q" =>"continuum", "sconnor" =>"fatethatwemake");
	foreach ($users_info as $key => $value) {
		# code...
		// echo $value . "<br>";
		if($username == $key && $password == $value){
			echo "Welcome <br>";
		}
		else {
			echo "Try again <br>";
		}
	}
?>
</body>
</html>