<!DOCTYPE html>
<html>
<head>
<title>PHP insertion</title>
<link href="insert.css" rel="stylesheet">
</head>
<body>
<div class="maindiv">
<!--HTML Form -->
<div class="form_div">
<div class="title">
<h2>Insert Data In Database Using PHP.</h2>
</div>
<form action="insert.php" method="post">
<!-- Method can be set as POST for hiding values in URL-->
<h2>Form</h2>
<label>Name:</label>
<input class="input" name="name" type="text" value="">
<label>Email:</label>
<input class="input" name="email" type="text" value="">
<label>Contact:</label>
<input class="input" name="contact" type="text" value="">
<label>Question:</label>
<textarea cols="25" name="address" rows="5"></textarea><br>
<input class="submit" name="submit" type="submit" value="Insert">
</form>
</div>
<?php
$connection = mysql_connect("localhost", "root", "bullie666"); // Establishing Connection with Server
$db = mysql_select_db("fitlifestyle", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$question = $_POST['question'];
if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into contact(contact_name, contact_email, contact_phonenumber, contact_question) values ('$name', '$email', '$phonenumber', '$question')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>
</div>
</body>
</html>