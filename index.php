<?php 

include 'config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$experience = $_POST['experience']; //Get Experience
	$comments = $_POST['comments']; // Get Comment from form
	

	$sql = "INSERT INTO review (name, email, experience, comments)
			VALUES ('$name', '$email','$experience', '$comments')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Review Page</title>
</head>
<body>
	    <form  action="../Gymwebsite/index.php" method="get">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">HOME</button>
    </form>&nbsp&nbsp


	<div class="wrapper">
		<form action="" method="POST" class="form">
			<input type="radio" name="experience" value="bad"/> Bad &nbsp
                <input type="radio" name="experience" value="average"/> Average &nbsp
                <input type="radio" name="experience" value="good"/> Good
			<div class="row">
				<div class="input-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="Enter your Name" required>
				</div>
				<div class="input-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="Enter your Email" required>
				</div>
			</div>
			<div class="input-group textarea">
				<label for="comment">Comment</label>
				<textarea id="comment" name="comments" placeholder="Enter your Comment" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post Comment</button>
			</div>
		</form>
		<div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM review";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row['name']; ?></h4>
				<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
				<h5><?php echo $row['experience']; ?></h5>
				<p><?php echo $row['comments']; ?></p>
			</div>
			<?php

				}
			}
			
			?>
		</div>
	</div>
</body>
</html>