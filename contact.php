<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact With Us</title>
	<style type="text/css">
		body{
			 background-image: url("gym.jpg");
			 background-size: cover;
		}
	</style>

</head>
<body style="color:white">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,300;1,300&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<?php include'menu.php';?> 

<section>
  <div class="py-5">
    <h2 class="text-center text-white"><b>Contact Us</b></h2>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
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
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
</section><br>
   
<div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=574&amp;height=400&amp;hl=en&amp;q=BKC&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fnfgo.com/">Friday Night Funkin Mods</a></div><style>.mapouter{position:relative;text-align:right;width:574px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:574px;height:400px;}.gmap_iframe {width:574px!important;height:400px!important;}</style></div><br>

<footer class="footer-section" style="background-color:  #333333">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-option">
                        <span class="text-white p-3">Phone</span>
                        <p class="text-white">7738159247 - (0251) 2734608</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-option">
                        <span class="text-white">Address</span>
                        <p class="text-white">Fours Square BKC,Bandra(E)</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-option">
                        <span class="text-white">Email</span>
                        <p class="text-white">eliteworldfitness@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="copyright-text text-white">
                <ul>
                    <li><a href="#">Term&Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
                <p>&copy;<p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a></p></p>

</body>
</html>