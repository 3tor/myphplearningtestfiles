<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$name = "cnn.com";
		//network function returns the IP address for a host name
		$ipAddr = gethostbyname($name);
		echo "This is the IP address of $name: $ipAddr";
		echo "<br>";

		//network function returns the host name for an IP address
		$name = gethostbyaddr($ipAddr);
		echo "This is the host address of $ipAddr: $name <br>";
		echo "<br>";

		//network function returns the DNS record for a host name
		$dnsRec = dns_get_record($name);
		print_r($dnsRec);
		echo "$dnsRec";

		echo "<br> <br>";

		//string function to replace / with ,
		$bmonth = '1';
		$bdate = '1';
		$byear = '1995';

		//calendar function to lookup day of week for a date
		$bday = JulianToJD($bmonth, $bdate, $byear);
		echo "Your birthday $bdate/$bmonth/$byear fell on a ".JDDayOfWeek($bday,1);
	?>
</body>
</html>