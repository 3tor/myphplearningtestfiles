<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$DEBUG = 1;

		function GetSpaceShip($NameofShow = "Firefly")
		{
			if ($GLOBALS['DEBUG']) {
				echo "GetSpaceShip() called with arg: $NameofShow<br>";
			}
			static $spaceships = array("StarTrek" => "Enterprise","Firefly"=>"Serenity", "LostInSpace"=>"Jupiter 2");
			return $spaceships[$NameofShow];
		}

		echo "Kirk was the captain of the starship" . GetSpaceShip("StarTrek") . "<br>";
	?>
</body>
</html>