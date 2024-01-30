<?php
session_start(); // Start the session to access session variables

// Include the messages function
include('messages.php');

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Insert user data into the database (you can add database connection code here)

    if ($stmt->execute()) {
        // Registration successful, you can redirect the user to a welcome page
        showMessage("Registration successful!", 'success');
        // Redirect the user to the login page or their profile
        header("Location: login.php");
        exit();
    } else {
        showMessage("Registration failed. Please try again.", 'error');
    }
}
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
            <h1 class="login-title">Registration</h1>
            <form action="process_registration.php" method="POST">

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com">
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
              </div>
              <input name="register" id="register" class="btn btn-block login-btn" type="submit" value="Register">


            </form>
            <?php
                        // Display success or error messages
                        if (isset($_SESSION['message'])) {
                            showMessage($_SESSION['message']['text'], $_SESSION['message']['type']);
                            unset($_SESSION['message']);
                        }
                    ?>
            <!-- <a href="#!" class="forgot-password-link">Forgot password?</a> -->
            <a href="login.php" class="forgot-password-link"> Have an account?</a>            <!-- <p class="login-wrapper-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p> -->
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
