<!DOCTYPE html>
<html>
<head>
	<title>Advanced PHP</title>
</head>
<body>
	<?php
		session_start();
		if (!isset($_SESSION['visits']))
		{
			$_SESSION['visits'] = 1;
		}
		else
		{
			$_SESSION['visits']++;
		}
		echo 'The value of $_SESSION is:' . $_SESSION['visits'] . "<br>";
	?>
</body>
</html>