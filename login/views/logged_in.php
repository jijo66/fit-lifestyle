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
<div class="container">
<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<h3>Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in.
Try to close this browser tab and open it again. Still logged in! ;)</h3>
<h2>Welcome to the member area!</h2>
<form id="form1" name="form1" method="post" action="">
  <table class="tbl_form" width="461" height="401">
    <tr>      </tr>
    <tr>
      <td colspan="3" class="cptn">
	  <?php

	  echo ' Hi,  &nbsp;&nbsp;'.$_SESSION['user_name'] .' the following are your details:';

	  ?>      </td>
      </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
      </tr>
    <tr>
      <td class="field" width="200">Name</td>
      <td class="field" width="5">:</td>
      <td class="data">&nbsp;&nbsp;        <?php
	   echo ''.$_SESSION['user_name'] ;

	  ?></td>
    </tr>
    <tr>
      <td class="field">Email</td>
      <td class="field">:</td>
      <td class="data">&nbsp;&nbsp;        <?php
	   echo ''.$_SESSION['user_email'] ;

	  ?></td>
    </tr>
    <tr>
      <td class="field">Gender</td>
      <td class="field">:</td>
      <td class="data">&nbsp;&nbsp;        <?php
	   echo ''.$_SESSION['gender'] ;

	  ?></td>
    </tr>
    <tr>
      <td class="field">Current weight</td>
      <td class="field">:</td>
      <td class="data">&nbsp;&nbsp;        <?php
	   echo ''.$_SESSION['current-weight'] ;

	  ?></td>
    </tr>
    <tr>
      <td class="field">Target Weight</td>
      <td class="field">:</td>
      <td class="data">&nbsp;&nbsp;        <?php
	   echo ''.$_SESSION['target-weight'] ;

	  ?></td>
    </tr>

  </table>
  </form>
  <P> Have changed your weight recently? Click <a href="upgradeweight.php">here </a>to add your new weight and keep track of your
  progress</p>
  <div class="alert alert-success">
  <strong>Keep up!</strong> Focus on reaching your target weight
</div>
<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
<a href="index.php?logout" class="btn btn-info" role="button">Logout</a>
