<!DOCTYPE html>
<html lang="en">
<head>
  <title>BMI calculator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style type="text/css">
    body{background-color:#e2edff;}
    p{color:navy;}
    </style>
</head>
<body>
<div class="container">
  <h2>Body Mass Index calculator</h2>
  <h3>What is BMI?</h3>
  <p>Body Mass Index (BMI) is a statistical measure of an individual's scaled weight according to his/her height.
     It is a simple index of weight-for-height and is widely used by medical, health and fitness professionals to classify underweight, overweight and obesity in adults.</p>
     <p>Use the following calculator to determine you bmi and adjust your exercise and nutrition accodingly towards attaining a healthy fit lifestyle</p>
  <form role="form" action="bmi.php" method="Post">
    <div class="form-group">
      <label for="height">Height:</label>
      <input type="text" class="form-control" name="height" id="height" placeholder="Enter Your Height in metres">
    </div>
    <div class="form-group">
      <label for="weight">Weight:</label>
      <input type="text" class="form-control" name="weight" id="weight" placeholder="Enter your weight in Kilograms">
    </div>
  <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
