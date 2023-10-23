<?php
	$connection = mysqli("localhost", "root", "", "chrabe");
	if ($connection->connect_error) {
		die("Error: " . $connection->connect_error);
	}
	if (isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
		$stmt->bind_param("ss", $username, $password);
		if ($stmt->execute()) {
			header("Location: index.php");
			exit();
		}
		else {
        		header("Location: signin.php");
        		exit();
		}
	}
?>
