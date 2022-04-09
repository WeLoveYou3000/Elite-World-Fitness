<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <style type="text/css">
        body{
            background-image: url(Images/about.jpg);
        }
    </style>
</head>
<body>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bmistyle.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,300;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<?php include'menu.php';?>
    <section class="wrapper">
<?php 
    $errh = $errw = $errg = "";
    $height = $weight = "";
    $bmipass = "";
    
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty($_POST['height'])) {
            $errh = "<span style='color:#ed4337; font-size:17px; display:block'>Height is requried</span>";
        } else {
            $height = validate($_POST['height']);
        }
    
        if (empty($_POST['weight'])) {
            $errw = "<span style='color:#ed4337; font-size:17px; display:block'>Weight is requried</span>";
        } else {
            $weight = validate($_POST['weight']);
        }

        if (empty($_POST['height'] && $_POST['weight'])) {
            echo "";
        } else {
            $bmi = ($weight / ($height * $height));
            $bmipass = $bmi;
        }
    }
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<h2><i>Check Your BMI</h2>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
   <br/> <div class="section1">
        <span><b>Enter Your Height : </span>
        <input type="text" name="height" autocomplete="off" placeholder="meter"><?php echo $errh; ?>
    </div>
    
    <br/><div class="section2">
        <span><b>Enter Your weight : </span>
        <input type="text" name="weight" autocomplete="off" placeholder="kilogram"><?php echo $errw; ?>
    </div>    
    <br/><div class="submit">
        <input type="submit" name="submit" value="Check BMI"><br/>
        <br/><input type="reset" value="Clear"><br/>
    </div>
    
</form><br/>

<?php
    error_reporting(0);
        echo "<span class='pass'>Your BMI is : ". number_format($bmipass , 2) ."</span>";
    if (isset($_POST['submit'])){
        if ($bmipass >= 13.6 && $bmipass <= 18.5) {
            echo "<span style='color:#000000; display:block; margin-top:5px ;margin-right:50px'> Low body weight. You need to gain weight by eating moderately.</span>";?><?php
        } elseif ($bmipass > 18.5 && $bmipass < 24.9) {
            echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> The standard of good health.</span>";?>
            <?php
        } elseif ($bmipass > 25 && $bmipass < 29.9) {
            echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> Excess body weight. Exercise needs to reduce excess weight.</span>";?>
          <?php
        } elseif ($bmipass > 30 && $bmipass < 34.9) {
            echo "<span style='color:#000000; display:block; margin-top:5px;margin-right:50px'>The first stage of obesity. It is necessary to choose food and exercise.</span>";?>
           <?php
        } elseif ($bmipass > 35 && $bmipass < 39.9) {
            echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> The second stage of obesity. Moderate diet and exercise are required.</span>";?>
            <?php
        } elseif ($bmipass >= 40) {
            echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> Excess fat.<b style='color:#ed4337'> Fear of death</b>. Need a doctor advice.</span>";?>
            <?php
        }
    } else {
        echo "";
    }
?>


</section>

</body>
</html>