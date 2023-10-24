<?php
	$server = "127.0.0.1";
	$user = "root";
	$pass = "";
	$db = "chrabe";
	$connection = new mysqli($server, $user, $pass, $db);
	if ($connection->connect_error) {
		echo "Error: " . $connection->connect_error;
	}
	else {
		echo "Connection done!";
	}
	$connection->close();
?>
