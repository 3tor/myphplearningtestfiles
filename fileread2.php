<html>
<head>
	<title></title>
</head>
<body>
	<?php
		//this code reads contents of the todo2.txt file and puts them in an associative array delimited by commas
		//items on placed in the array per line
		$filename = 'C:\xampp\htdocs\phptuts\todo2.txt';
		$file = fopen($filename, "r");
		if ($file == false) {
		 	echo "Error in opening file";
		 	exit();
		 } 
		 $i = 0;
		 while (!feof($file)) {
		 	$contents[$i++] = fgetcsv($file);
		 }
		 print_r($contents);
	 ?>
</body>
</html>