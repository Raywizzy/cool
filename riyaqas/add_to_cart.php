<?php
// Start a session and connect to the database
session_start(); // Start the session to access session variables

// Database configuration
$servername = "localhost";
$db_username = "your_db_username";
$db_password = "your_db_password";
$dbname = "ecommerce_db";

$conn = mysqli_connect('localhost', 'root', '', 'ecommerce_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if a POST request was made (for adding a product from a form)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the product details from the POST request
    $packageTitle = $_POST['title'];
    $packagePrice = $_POST['price'];
    $packageCurrency = $_POST['currency'];

    // Check if the user is logged in or has a session
    if (isset($_SESSION['user_id'])) {
        // If a user is logged in, you can associate the product with their user ID
        $userId = $_SESSION['user_id'];
        
        // Perform database operations to insert the product into the cart_items table
        $sql = "INSERT INTO cart_items (user_id, product_title, product_price, product_currency) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isss", $userId, $packageTitle, $packagePrice, $packageCurrency);
        
        if ($stmt->execute()) {
            echo 'Product added to cart: ' . $packageTitle;
        } else {
            echo 'Error adding the product to the cart.';
        }
        
        $stmt->close();
    } else {
        echo 'You need to be logged in to add products to your cart.';
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Check if a GET request includes the necessary product details
    if (isset($_GET['packageTitle']) && isset($_GET['packagePrice']) && isset($_GET['packageCurrency'])) {
        // Retrieve the product details from the GET request
        $packageTitle = $_GET['packageTitle'];
        $packagePrice = $_GET['packagePrice'];
        $packageCurrency = $_GET['packageCurrency'];

        // Add the product to the user's cart in the database
        // Perform database operations (e.g., insert into the user's cart table)

        echo 'Product added to cart: ' . $packageTitle;
    } else {
        echo 'Invalid request. Missing product details.';
    }
} else {
    echo 'Invalid request.';
}

mysqli_close($conn); // Close the database connection
?>

