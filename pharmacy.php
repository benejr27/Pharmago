
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Current Orders</title>

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
        <input class="input_id" type="text" name="id_user">
        <ul style="list-style-type: none;float: right;">
         <a href="settings.php"><i class="fas fa-search "></i>SEARCH</a>
        </ul>
      </div>   
        <div class="info">
          <table class="table">
            <thead>
              <tr>
                  <th>Order Number</th>
                  <th>Items</th>
                  <th>Qty</th>
                  <th>Address</th>
                  <th>Driver</th>
                  <th>Total Amount</th>
                   <th>Date</th>
                   <th><button id="btn1" name="edit1">EDIT</button><button id="btn" name="delete1">DELETE</button></th>
              
              </tr>
            </thead>
         
          </table>
      
    
       </div>
    </div>
</div>


</body>
</html>