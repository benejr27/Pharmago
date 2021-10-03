
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Settings</title>

  <link rel="stylesheet" href="admin.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/admin.css">


</head>
<body>

 <nav id="mainNavbar" class="navbar navbar-dark navbar-expand-md py-0 fixed-top">
    <a href="home.php" class="navbar-brand">PharmaGo</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks"
      area-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navLinks">
    <ul class="navbar-nav">


    </ul>
  </nav>
<form method="POST" action="index.php">
<div class="wrapper">
    <div class="sidebar">
        <ul>
          <br>
            <li><a href="pharmacy.php"><i class="fas fa-pills"></i>Current Orders</a></li>
            <li><a href="delivered.php"><i class="fas fa-truck"></i>Delivered</a></li>
            <li><a href="cancelled.php"><i class="fas fa-times-circle"></i>Cancelled</a></li>
            <li><a href="addstocks.php"><i class="fas fa-cart-plus"></i>Add Stocks</a></li>
            <li><a href="#"><i class="fas fa-file-export "></i>Export</a></li>
            <li><a href="settings.php"><i class="fas fa-cogs "></i>Settings</a></li>
           
            <li ><button class="button" method="POST" name="logout1"><i class="fas fa-sign-out-alt"></i>Logout</button></li>
        </ul> 

    </div>
    <div class="main_content">
      <div class="top">

        <div class="profile-pic-div">
  <img src="img/lg.png" id="photo" >
  <input type="file" id="file">
  <label for="file" id="uploadBtn">Choose Photo</label>

    
      

      </div></div> <h1 id="Pharmacy_name">Pharmacy Name</h1>

       <!-- CHANGE DETAILS -->
        <form class="update"method="POST" action="Update" >
          <div id="Update">
            <h2>Update</h2>
           <div class="grid-container">
  
  <div class="grid-item"> <label>Username:</label></div>
  <div class="grid-item"><input type="text" placeholder="New Username" required="required"></div>
   <div class="grid-item"></div>
  <div class="grid-item"> <label>Password:</label></div>
  <div class="grid-item"><input type="password" placeholder="New Password" required="required"></div>
   <div class="grid-item"></div>
  <div class="grid-item"><label>Email:</label></div>
  <div class="grid-item"><input type="email" placeholder="New E-Mail" required="required"></div>
   <div class="grid-item"></div>
  <div class="grid-item"><label>Telephone Number:</label></div>
  <div class="grid-item"> <input type="text" placeholder="New Telephone Number" required="required"></div>
   <div class="grid-item"></div>

</div>
<input type="submit" style="padding: 3px;margin: 3px;" required="required">

          </div>

          
        </form>
    </div>
    
</div>

<script src="js/profile_img.js"></script>
</body>
</html>