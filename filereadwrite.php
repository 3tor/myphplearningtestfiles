<?php
	try {
		$filename = 'C:\xampp\htdocs\phptuts\todo.txt';
		$file = fopen($filename, "a");
		if($file == false){
			echo "Error in opening new file";
			exit();
		}
		fwrite($file, "Fridge\n");
		fclose($file);

		$filename = 'C:\xampp\htdocs\phptuts\todo.txt';
		$file = fopen($filename, "r");
		if($file == false){
			echo "Error in opening file";
			exit();
		}
		$filesize = filesize($filename);
		$filetext = fread($file, $filesize);

		fclose($file);
		echo("File size: $filesize bytes");
		echo("<pre>$filetext</pre>");
	} catch (Exception $e) {
		echo "Error in reading file";
	}
?>