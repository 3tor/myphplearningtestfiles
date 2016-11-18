<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form id="login" action="loginValidation.php" method="post" accept-charset="UTF-8">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username" maxlength="50"> <br>
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" maxlength="50"> <br>
		<label for="website">Personal Website:</label>
		<input type="text" name="website" id="website" maxlength="50"> <br>
		<label for="phone">Phone:</label>
		<input name="phone" id="phone" maxlength="50"> <br> <br>
		<input type="submit" name="Submit" value="Submit">
	</form>
	<?php 
		require_once("loginValidation.php");
	 ?>
</body>
</html>