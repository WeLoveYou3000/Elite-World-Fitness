<?php

include 'feedbackinfo.php';

$id = $_GET['id'];

$query = " DELETE FROM `review` WHERE id = $id ";

mysqli_query($con, $query);

header('location:reviewdisplay.php');

?>