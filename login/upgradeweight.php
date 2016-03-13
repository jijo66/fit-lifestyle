<!DOCTYPE html>
<html lang="en">
<head>
  <title>Member page</title>
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

<div class="container">
 <form role="form" action="upgradeweightcontroller.php" method="Post">
   <input type="hidden"name="user_id"value="<?php echo $_SESSION['user_id'];?>"/>
    <div class="form-group">
      <label for="Current weight">New weight:</label>
      <input type="text" class="login-input form-control" name="weight" id="weight" placeholder="Enter Your new weight">
    </div>
		<button type="submit" name="submit" class="btn btn-default">Submit your new weight</button>
  </form>
  </div>
 <?php session_start();
 echo $_SESSION['user_name'] . '<br>';
 echo$_SESSION['current-weight'] . '<br>';
 echo$_SESSION['user_id'];
