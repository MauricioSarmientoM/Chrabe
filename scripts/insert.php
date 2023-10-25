<?php
	session_start();
	$server = "127.0.0.1";
	$user = "root";
	$pass = "";
	$db = "chrabe";
	$connection = new mysqli($server, $user, $pass, $db);
	if ($connection->connect_error) {
		die("Error: " . $connection->connect_error);
	}
	if (isset($_GET['name']) && isset($_GET['surname']) && isset($_GET['username']) && isset($_GET['password']) && isset($_GET['email']) && isset($_GET['birthday']) && isset($_GET['sex']) && isset($_GET['interest'])) { 
		$name = $_GET['name'];
		$surname = $_GET['surname'];
		$username = $_GET['username'];
		$password = $_GET['password'];
		$email = $_GET['email'];
		$birthdate = $_GET['birthday'];
		$sex = $_GET['sex'];
		$interests = $_GET['interest'];

		$query = $connection->prepare("INSERT INTO users (name, surname, username, password, email, birthdate, sex, interests) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
		if (!$query) {
			die("Preparation failed: " . $connection->error);
		}
		$query->bind_param("ssssssss", $name, $surname, $username, $password, $email, $birthdate, $sex, $interest);
		if (!$query) {
			die("Binding parameters failed: " . $query->error);
		}
		if ($query->execute()) {
			$_SESSION["name"] = $name;
			$_SESSION["surname"] = $surname;
			$_SESSION["username"] = $username;
			$_SESSION["password"] = $password;
			$_SESSION["email"] = $email;
			$_SESSION["birthdate"] = $birthdate;
			$_SESSION["sex"] = $sex;
			$_SESSION["interests"] = $interests;
			header("Location: ../index.php");
			exit();
		}
		else {
       			header("Location: ../signin.php");
       			exit();
		}
	}
	$connection->close();
?>
