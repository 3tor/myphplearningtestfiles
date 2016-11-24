<!DOCTYPE html>
<html>
<head>
	<title>Inheritance</title>
</head>
<body>
   <?php 
   		include("inheritanceclassess.php");

   		$Mcgee = new Person("Javale Mcgee", 3455);
   		var_dump($Mcgee);
   		echo "<br>";
   		$roy = new Employee("Roy Hibbert", 9090, "Sports");
   		print_r($roy);
   		echo "<br>";
   		$inara = new Employee("Inara Serra",4904,"Recreation");
   		var_dump($inara);
   		echo "<br><br>";
    ?>
</body>
</html>