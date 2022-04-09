<?php

$con = mysqli_connect('localhost','root');


mysqli_select_db($con,'gymuserdata');


 $name = $_POST['name'];
 $email = $_POST['email'];
 $age = $_POST['age'];
 $mobile = $_POST['mobile'];
 $message = $_POST['message'];

 $query = "insert into feedbackdata (name,email,age,mobile,message) 
    values('$name','$email','$age','$mobile','$message')";

mysqli_query($con , $query);

header('location:index.php');

 ?>