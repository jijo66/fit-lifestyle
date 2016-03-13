<?php

 $con = mysql_connect('localhost', 'root','')
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
   $database = mysql_select_db("login",$con)
  or die("Could not select login");
  session_start();
  $upgrade=$_POST['weight'];
  if(isset($_POST['submit'])){
	 if (is_numeric($_SESSION['user_id']))
 {
 // get form data, making sure it is valid
 $id = $_SESSION['user_id'];

 // save the data to the database
 mysql_query("UPDATE users SET currentweight='$upgrade' WHERE user_id='$id'")
 or die(mysql_error());

 // once saved, redirect back to the view page
 echo 'Current weight successfully changed!please Log in again to see the your new current weight.Redirecting...';
 header("refresh:4; index.php");
 }
 }
 else
 {
 // if the 'id' isn't valid, display an error
 echo 'Error!';
 }
?>
