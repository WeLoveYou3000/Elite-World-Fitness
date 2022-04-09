<?php

include 'feedbackinfo.php';

$id = $_GET['id'];

$query = " DELETE FROM `feedbackdata` WHERE id = $id ";

mysqli_query($con, $query);

header('location:adminpanel.php');

?>