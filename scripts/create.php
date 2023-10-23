<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$connection::mysqli($server, $user, $pass);
	if ($connection->connect_error) {
		echo "Error: " . $connection->connect_error;
	}
	if ($mysqli->ping()) {
		echo "Our connection is ok!";
	}
	else {
		echo "Error: %s\n" . $mysqli->error;
	}
	echo "AAAAAA";
?>
