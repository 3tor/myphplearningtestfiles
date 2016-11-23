<html>
<head>
	<title>Forms and Superglobals</title>
</head>
<body>
	<form id="login" action="processlogin.php" method="post" accept-charset="UTF-8">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username" maxlength="50">
		<label for="password">Password:</label>
		<input type="password" name="password" id="password">
		<input type="submit" name="submit" value="Submit">
		<?php 
			// require_once('processlogin.php');
		?>
	</form>
</body>
</html>