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
    $password = $_POST['password'];

    // Retrieve user data from the database based on the username
    $sql = "SELECT user_id, username, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($user_id, $db_username, $db_password);

    if ($stmt->fetch() && password_verify($password, $db_password)) {
        // Login successful, create a session for the user
        session_start();
        $_SESSION['user_id'] = $user_id;
        $_SESSION['username'] = $db_username;
        header("Location: index.php"); // Redirect to a protected page
        exit();
    } else {
        echo "Invalid username or password. Please try again.";
    }
}
?>
