<?php

include 'userinfo.php';

if(isset($_POST['done'])){

  $user = $_POST['user'];
 $email = $_POST['email'];
 $mobile = $_POST['mobile'];
 $membership = $_POST['membership'];
 $duration = $_POST['duration'];
 $date = $_POST['date'];

 
 $query = "insert into userinfodata (user,email,mobile,membership,duration,date) 
    values('$user','$email','$mobile','$membership','$duration','$date')";

 $query = mysqli_query($con,$query);
}
?>

<!DOCTYPE html>
<html>
<head>
 <title> Insert Page</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style type="text/css">
    body{
          background-image: url("gym1.jpg");
    }
  </style>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">╰☆☆ 𝓔𝓛𝓘𝓣𝓔 𝓦𝓞𝓡𝓛𝓓 𝓕𝓘𝓣𝓝𝓔𝓢𝓢 ☆☆╮</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="display.php">Hi Gaurav Hegde <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../ad/admindash.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Operations
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="insert.php">INSERT </a>
          <a class="dropdown-item" href="display.php">DELETE </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="update.php">UPDATE</a> 
        </div>
      </li>
              <form  action="display.php">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Member List</button>
      </form>&nbsp&nbsp
       <form  action="reviewdisplay.php">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Reviews</button>
      </form>&nbsp&nbsp
      <form  action="adminpanel.php">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Queries</button>
    </form>&nbsp&nbsp
    <form  action="../Gymwebsite/login.php" method="get">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">LOGOUT</button>
    </form>&nbsp&nbsp
  </div>
</nav>


 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Operation </h1>
 </div><br>
 <div class="form-group">
     <label>Username</label>
    <input type="text" name="user" autocomplete="off" class="form-control" required>
      </div><br/>
      <div class="form-group">
        <label>Email Id</label>
        <input type="email" name="email" autocomplete="off" class="form-control" required>
      </div><br/>
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control" required>
      </div><br/>
      <div class="form-group">
        <label>Membership</label>
        <input type="text" name="membership" autocomplete="off" class="form-control" required>
      </div><br/>
      <div class="form-group">
        <label>Duration</label>
        <input type="text" name="duration" autocomplete="off" class="form-control" required>
      </div><br/>
        <div class="form-group">
        <label>Date</label>
        <input type="date" name="date" autocomplete="off" class="form-control" required>
      </div><br/>


 <button class="btn btn-success" type="submit" name="done"><a href="display.php"></a> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>