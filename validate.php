<?php
  
include_once('connection.php');
   
function test_input($data) {
      
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
   
if ($_SERVER["REQUEST_METHOD"]== "POST") {
      
    $adminname = test_input($_POST["adminname"]);
    $password = test_input($_POST["password"]);

    $stmt = $conn->prepare("SELECT * FROM adminlogin WHERE adminname = '$adminname' AND password = '$password'");
    $stmt->execute();
    $users = $stmt->mysqli_fetch_assoc();
    var_dump(mysqli_nums_rows($users));
}