<?php
	$connection = mysqli("localhost", "root", "", "chrabe");
	if ($connection->connect_error) {
		die("Error: " . $connection->connect_error);
	}
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // You should use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        // Successful insertion
        header("Location: index.php");
        exit();
    } else {
        // Insertion failed, redirect back to signin.php
        header("Location: signin.php");
        exit();
    }
?>
