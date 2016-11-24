<?php 
	require_once('movieclass.php'); 

	if (!empty($_POST['title']) && !empty($_POST['year']) && !empty($_POST['director']) && !empty($_POST['rating'])) {
		$title = trim($_POST['title']);
		$year = trim($_POST['year']);
		$director = trim($_POST['director']);
		$rating = trim($_POST['rating']);
		
		$movieObject = new Movie($title,$year,$director,$rating);

		echo "Your movie has title of ".$movieObject->GetTitle() ." directed by ".$movieObject->GetDirector() ." produced in the year ".$movieObject->GetYear() ." and has a rating of " .$movieObject->GetRating();
	}
	else if (empty($_POST['title']) || empty($_POST['year']) || empty($_POST['rating']) || empty($_POST['director'])) {
		echo "Please provide all details";
	}
 ?>