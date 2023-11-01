<?php
	$server = "127.0.0.1";
	$user = "root";
	$pass = "";
	$db = "chrabe";
	$connection = new mysqli($server, $user, $pass, $db);
	if ($connection->connect_error) {
		die("Error: " . $connection->connect_error);
	}
	if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['birthday']) && isset($_POST['sex']) && isset($_POST['interest'])) { 
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$birthdate = $_POST['birthday'];
		$sex = $_POST['sex'];
		$interests = $_POST['interest'];

		$query = $connection->prepare("INSERT INTO users (name, surname, username, password, email, birthdate, sex, interests) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
		if (!$query) {
			die("Preparation failed: " . $connection->error);
		}
		$query->bind_param("ssssssss", $name, $surname, $username, $password, $email, $birthdate, $sex, $interest);
		if (!$query) {
			die("Binding parameters failed: " . $query->error);
		}
		if ($query->execute()) {
			header("Location: ../gestor.php");
			exit();
		}
		else {
       			header("Location: ../gestor.php");
       			exit();
		}
	}
	$connection->close();
?>
