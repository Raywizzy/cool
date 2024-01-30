<?php
// Include the database connection configuration
include("db_config.php");

// Retrieve cart items from the database
$sql = "SELECT * FROM cart";
$result = $conn->query($sql);

$cartItems = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $cartItems[] = $row;
    }
}

// Close the database connection
$conn->close();

// Return the cart items as JSON
header("Content-Type: application/json");
echo json_encode($cartItems);
?>
