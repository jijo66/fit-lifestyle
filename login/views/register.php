<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fit lifestyle registration form</title>
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
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>

<!-- register form -->
<div class="container">
 <h2>Fitlifestyle Registration Page</h2>
  <h3> We're glad you want to join our community! Register so you can get to track and see your fitness goals</h3>
<form role="form" method="post" action="register.php" name="registerform">

    <!-- the user name input field uses a HTML5 pattern check -->
	<div class="form-group">
    <label for="login_input_username">Username (only letters and numbers, 2 to 64 characters)</label>
    <input id="login_input_username" class="login_input form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
</div>
<div class="form-group">
    <!-- the email input field uses a HTML5 email type check -->
    <label for="login_input_email">User's email</label>
    <input id="login_input_email" class="login_input form-control" type="email" name="user_email" required />
</div>
<div class="form-group>
    <label for= "login_input_password_new">Password(min. 6 characters)</label>
    <input id="login_input_password_new" class="login_input form-control" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
</div>
<div class="form-group">
    <label for="login_input_password_repeat">Repeat password</label>
    <input id="login_input_password_repeat" class="login_input form-control" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
  </div>
    <div class="form-group">
      <label for="Gender">Gender:</label>
      <input type="text" class="login_input form-control" name="gender" id="gender" placeholder="Enter your gender">
    </div>
	 <div class="form-group">
      <label for="Current weight">Current weight:</label>
      <input type="text" class="login_input form-control" name="current-weight" id="current-weight" placeholder="Enter your current weight">
    </div>
	 <div class="form-group">
      <label for="Target weight">Target weight:</label>
      <input type="text" class="login_input form-control" name="target-weight" id="target-weight" placeholder="Enter your target weight">
    </div>
    <input type="submit"  name="register" value="Register" />
</form>

<!-- backlink -->
<a href="index.php">Back to Login Page</a>
