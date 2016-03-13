<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <link href="style1.css"style="text/css" rel="stylesheet" />
  </head>
  <div class="container">
  <?php
$height = $_REQUEST['height'];
$weight=$_REQUEST['weight'];
$bmi=round($weight/($height*$height));
echo 'Your bmi is: '. $bmi .'.';
if ($bmi <=18)
echo '<div class="alert alert-danger">
 you are <strong>underweight</strong>. check out the <a href="homefl/nutrition.html">nutrition page</a> to see how you
can gain weight.
</div>
<img src="pics/underweight.jpg" class="img-rounded img-responsive" alt="healthy">';
else if($bmi <=24){
echo '<div class="alert alert-success">
You have a <strong>healthy </strong>bmi range!Keep it up
</div>
 <img src="pics/healthy.jpg" class="img-rounded img-responsive" alt="healthy"> ';}
else if($bmi<=29){
echo '<div class="alert alert-warning">
you are <strong>overweight</strong>. But fear not! 
Check out the <a href="homefl/nutrition.html">nutrition</a>and<a href="homefl/workouts.html"> workout pages</a> to see how you can loose weight
</div>
<img src="pics/overweight2.jpg" class="img-rounded img-responsive" alt="healthy">';}
else if($bmi>=30){
echo '<div class="alert alert-danger">
  You are <strong>obese</strong>! With hardwork, dedication and consistency, you can reduce your weight to healthy levels. Check out the <a href="homefl/nutrition.html">nutrition</a> and <a href="homefl/workouts.hmlt">workout</a> pages to see how you can loose weight
</div>
<img src="pics/obese2.jpg" class="img-rounded img-responsive" alt="healthy">';}
?>
</div>
</html>