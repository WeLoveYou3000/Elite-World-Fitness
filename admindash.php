<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <title>Admin Page</title>
    <meta charset="UTF-8">
  
    <link rel="stylesheet" href="admindash.css">
    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

   </head>
<body>
     <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">Elite World Fitness</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
       <a href="../Admin/display.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">Update</span>
       </a>
     </li>
     <li>
       <a href="../Admin/insert.php">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Insert</span>
       </a>
     </li>
     <li>
       <a href="../Admin/display.php">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Member List</span>
       </a>
     </li>
     <li>
       <a href="../Admin/adminpanel.php">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Queries & Feedback</span>
       </a>
       
     </li>
     <li>
       <a href="../Admin/delete.php">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Delete</span>
       </a>
     
     </li>
     <li>
       <a href="../Admin/reviewdisplay.php">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Reviews</span>
       </a>
     </li>
     <li>
       <a href="../Gymwebsite/logout.php">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Logout</span>
       </a>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="../Gymwebsite/img/undraw_profile.svg" alt="profileImg">
           <div class="name_job">
             <div class="name">Gaurav Hegde </div>
           </div>
         </div>
         
     </li>
    </ul>
  </div>
 
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  </script>
  
  <section class="home">
    
  </section>
</body>
</html>
