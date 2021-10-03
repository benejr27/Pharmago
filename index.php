<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    

  <title>PharmaGo Pharmacy-Registration</title>
</head>
<body>
  <nav id="mainNavbar" class="navbar navbar-dark navbar-expand-md py-0 fixed-top">
    <a href="index.php" class="navbar-brand">PharmaGo</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks"
      area-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navLinks">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="index.php" class="nav-link">HOME</a>
      </li>

      <li class="nav-item">
        <a href="about.php" class="nav-link">ABOUT</a>
      </li>

      
    </ul>
  </nav>
  
    </div>

    <!-- <section class="container-fluid px-0">
      <div class="row align-items-center"></div>
     <div class="text-white text-center" id="okaypo">
          <h1>Welcome to PharmaGo</h1>
  <P>-BSIT 3-E-</P>

    <button id="patay" class="btn" >Read More</button>
  </div> -->

    <section class="container-fluid px-0">
      
<div class="row align-items-center content">
        <div class="col-md-6 order-1 ">
          
          <img id="logo" class="img-fluid" src="img/logo.jpg" alt="">
          <h3 id="p1">A Cross-Platform Medicine Tracker and Delivery Application </h3>
          
        </div>
        
          <div id="login_form" class="col-md-6 text-center order-2 ">
          <div class="row justify-content-center">
            <div class="col-lg-8  mb-8 mb-md-10">
             <img class=" d-md-inline" src="img/user.png" alt="user icon">
              <h2>Login</h2>

              <form method="POST" id="login" action="pharmacy.php">
                    <div class="login-container">
                       <div class="login-item"> <label>Username:</label></div>
                        <div class="login-item"> <input type="text" placeholder="Username/Email" name="user"></div>
                         <div class="login-item"><label>Password: </label></div>
                          <div class="login-item"><input type="password" placeholder="Password" name="pass"></div>
                          <div class="login-item"style="text-align: right;"><input type="checkbox" name="remember">Remember Me </div>
                          <div class="login-item"><a href="#">Forgot Password?</a></div>
                          <div class="login-item"style="font-size:15px;"><label>New to PharmaGo ?</label></div>
                          <div class="login-item"style="text-align: right"><a href="#" id="button" class="button" >Create an Account</a></div>
                          <div class="login-item"></div>  
              </div><br>
                <input class="btn btn-outline-success"type="submit" name="login" value="LOG IN">
              </form>
        </div>
      </div>
    </div>
  </div>
      


<br><br><br><br>
    <footer><hr>Contact Us: <br>PharmaGoService@gmail.com<br> +639-506-998-950 </footer>

<div class="bg-modal">
  <div class="modal-contents">

    <div class="close">+</div>
   <h1 id="REG1">Register</h1>
    <form method="POST" id="register">

      <div class="grid-container">
  <div class="grid-item"><label>Username:</label></div>
  <div class="grid-item"><input type="text" placeholder="Username" required="required"></div>
   <div class="grid-item"></div>
  <div class="grid-item"> <label>Password:</label></div>
  <div class="grid-item"><input type="password" placeholder="Password" required="required"></div>
   <div class="grid-item"></div>
  <div class="grid-item"><label>Email:</label></div>
  <div class="grid-item"><input type="email" placeholder="E-Mail" required="required"></div>
   <div class="grid-item"></div>
  <div class="grid-item"><label>Pharmacy Name:</label></div>
  <div class="grid-item"> <input type="text" placeholder="Pharmacy Name" required="required"></div>
   <div class="grid-item"></div>
  <div class="grid-item"><label>Branch Address:</label></div>
  <div class="grid-item"><input type="text" placeholder="Branch Address" required="required"></div>
   <div class="grid-item"></div>
  <div class="grid-item"> <h6>Upload Your BIR/Business Permit</h6></div>
  <div class="grid-item">
   <div class="img-file-div1">
  <input type="file"  name="fileToUpload" id="fileToUpload"  required="required" hidden="hidden" >
    <label id="UPLOAD"for="fileToUpload">Choose File</label>
    <input type="checkbox" class="chkbx" disabled="disabled" name=""></div></div>
   <div class="grid-item"> 
  </div>
   <div class="grid-item"> <h6>Upload Profile Picture</h6></div>
  <div class="grid-item">
   <div class="img-file-div2">
    <input type="file"  name="fileToUpload1" id="fileToUpload1"required="required" hidden="hidden" >
   <label id="UPLOAD1" for="fileToUpload1" value="">Choose File</label>
   <input type="checkbox" class="chkbx1" disabled="disabled" name=""></div></div>
   <div class="grid-item">
  
  </div>

  
</div>
      
<br>
      <input id="btn-reg"type="button" name="register" value="REGISTER">

    </form>

  </div>
</div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="bootstrap.js"> 
    <script>   
      $(function (){
        $(document).scroll(function(){
          var $nav = $("#mainNavbar");
          $nav.toggleClass("scrolled", $(this).scrollTop() >
            $nav.height());
        });
      });
    </script>
   <script src="js/bootstrap.js"></script>
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="bootstrap.js"></script>-->

<!-- registration -->

<script src="js/index.js"></script>
<script src="js/profile_img.js"></script>
<script src="js/regImg.js"></script>
<script type="text/javascript">
  // Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyDIKPE7tdXzT18IB71A6hSVnTr-psajV40",
  authDomain: "pharmago-database.firebaseapp.com",
  databaseURL: "https://pharmago-database-default-rtdb.asia-southeast1.firebasedatabase.app",
  projectId: "pharmago-database",
  storageBucket: "pharmago-database.appspot.com",
  messagingSenderId: "548006799395",
  appId: "1:548006799395:web:030b275d4d3cecd12a6996"
};
const app = initializeApp(firebaseConfig);
</script>
</html>