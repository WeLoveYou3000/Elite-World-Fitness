<?php

include 'userinfo.php';

$id = $_GET['id'];

$query = " DELETE FROM `userinfodata` WHERE id = $id ";

mysqli_query($con, $query);

header('location:display.php');

?>

