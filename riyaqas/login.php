<?php
session_start(); // Start the session to access session variables

// Include the messages function
include('messages.php');

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    // Redirect the user to the index page or their profile
    header("Location: index.php");
    exit();
}

// Database configuration
$servername = "localhost";
$db_username = "your_db_username";
$db_password = "your_db_password";
$dbname = "ecommerce_db";

$conn = mysqli_connect('localhost', 'root', '', 'ecommerce_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
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
        $_SESSION['user_id'] = $user_id;
        $_SESSION['username'] = $db_username;
        showMessage("Login successful!", 'success');
        // Redirect the user to the index page or their profile
        header("Location: index.php");
        exit();
    } else {
        showMessage("Invalid username or password. Please try again.", 'error');
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link rel=icon href="assets/img/favicon.png" sizes="20x20" type="image/png">
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
  <style>
    /* Add CSS to your stylesheet or a separate CSS file */
.alert {
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    font-weight: bold;
}

.alert-success {
    background-color: #4CAF50; /* Green background for success messages */
    color: white;
}

.alert-error {
    background-color: #FF5733; /* Red background for error messages */
    color: white;
}

  </style>
</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
            <img src="assets/img/logo.png" alt="logo" width="50%" height="100%" >
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title">LOGIN</h1>
            <form action="process_login.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username">
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
              </div>
              <input name="login" id="login" class="btn btn-block login-btn" type="submit" value="Login">
            </form>
            <?php
            // Display success or error messages
            if (isset($_SESSION['message'])) {
                showMessage($_SESSION['message']['text'], $_SESSION['message']['type']);
                unset($_SESSION['message']);
            }
        ?>
            <!-- <a href="#!" class="forgot-password-link">Forgot password?</a> -->
            <a href="registration.php" class="forgot-password-link">Don't have an account?</a>
            <!-- <p class="login-wrapper-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p> -->
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="assets/img/blog/0_19jdJLPevka9KYB611.jpg" alt="login image" class="login-img">
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
