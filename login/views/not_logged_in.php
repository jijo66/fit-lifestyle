<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fit lifestyle Login form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style type="text/css">
    body{background-color:#e2edff;;}
    </style>
</head>
<body>
<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<!-- login form box -->
<div class="container">
  <h3>Welcome to the members area!</h3>
  <p>This section is dedicated to helping you keep track of your weight loss progress.</p>
  <p>Please login to see and manage your details or if your new click below to register as one of our members</p>
<form role="form" method="post" action="index.php" name="loginform">
 <div class="form-group">
    <label for="login_input_username">Username</label>
    <input id="login_input_username" class="login_input form-control" type="text" name="user_name" required />
</div>
 <div class="form-group">
    <label for="login_input_password">Password</label>
    <input id="login_input_password" class="login_input form-control" type="password" name="user_password" autocomplete="off" required />
</div>

	 <button type="submit" name="login" Value="Log in" class="btn btn-default">Log in</button>

</form>

<a href="register.php">Register new account</a>
</div>
