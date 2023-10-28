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
	if (isset($_GET['username']) && isset($_GET['password'])) { 
		$username = $_GET['username'];
		$password = $_GET['password'];
		// Use a prepared statement to prevent SQL injection
        $query = $connection->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $query->bind_param("ss", $username, $password);
        $query->execute();

        $result = $query->get_result();
        if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION["name"] = $row['name'];
                $_SESSION["surname"] = $row['surname'];
                $_SESSION["username"] = $row['username'];
                $_SESSION["password"] = $row['password'];
                $_SESSION["email"] = $row['email'];
                $_SESSION["birthdate"] = $row['birthdate'];
                $_SESSION["sex"] = $row['sex'];
                $_SESSION["interests"] = $row['interests'];
                header("Location: ../index.php");
                exit();
		}
		else {
       			header("Location: ../signin.php");
       			exit();
		}
	}
	else {
		header("Location: ../index.php/#");
		exit();
	}
	$connection->close();
?>
