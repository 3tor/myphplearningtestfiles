<!DOCTYPE html>
<html>
<head>
	<title>Movie</title>
</head>
<body>
<h3>Please enter your favorite movie details here</h3>
	<form id="movie" action="processmovie.php" method="post" accept-charset="UTF-8">
		<label for="title">Title:</label>
		<input type="text" name="title" id="title"><br><br>
		<label for="year">Year:</label>
		<input type="text" name="year" id="year"><br><br>
		<label for="director">Director:</label>
		<input type="text" name="director" id="director"><br><br>
		<label for="rating">MPAA Rating:</label>
		<input type="text" name="rating" id="rating"><br><br>
		<input type="submit" name="submit" value="Submit">
		<?php 
			// require_once('processmovie.php');
		?>
	</form>
</body>
</html>