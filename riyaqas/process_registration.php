<?php
// Database configuration
$servername = "localhost";
$db_username = "your_db_username";
$db_password = "your_db_password";
$dbname = "ecommerce_db";

$conn = mysqli_connect('localhost', 'root', '', 'ecommerce_db');

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Insert user data into the database
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        // Registration successful, you can redirect the user to a welcome page
        header("Location: login.php"); // Redirect to a welcome or login page
        exit();
    } else {
        echo "Registration failed. Please try again.";
    }
}
?>
