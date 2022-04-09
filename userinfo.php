<?php

$con = mysqli_connect('localhost','root');


mysqli_select_db($con,'gymuserdata');

 $user = $_POST['user'];
 $email = $_POST['email'];
 $mobile = $_POST['mobile'];
 $membership = $_POST['membership'];
 $duration = $_POST['duration'];
 $date = $_POST['date'];

 $query = "insert into userinfodata (user,email,mobile,membership,duration,date) 
    values('$user','$email','$mobile','$membership','$duration','$date')";

 mysqli_query($con , $query);

header('location:index.php');

 ?>