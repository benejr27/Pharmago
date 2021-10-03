<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slideshow.css">
    

  <title>About PharmaGo</title>
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


    <section class="container-fluid px-0">
      
<div class="row align-items-center content">
        <div id="abo"class="col-md-12 ">
          
          <img  class="img-fluid" src="img/logo1.jpg" alt="logo1.jpg">
          <p>A Cross-Platform Medicine Tracker and Delivery Application </p>

          <!-- Slideshow container -->
<h1>How it works?</h1>
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides ">
    <div class="numbertext">Step 1 / 5</div>
    <img src="img/slideshow/img1.png" style="width:30%;height: 50%;border: 2px solid black;">
    
  </div>


  <div class="mySlides ">
    <div class="numbertext">Step 2 / 5</div>
    <img src="img/slideshow/img2.png" style="width:30%;height: 50%;border: 2px solid black;">
    
  </div>

  <div class="mySlides ">
    <div class="numbertext">Step 3 / 5</div>
    <img src="img/slideshow/img3.png" style="width:30%;height: 50%; border: 2px solid black;">
    
  </div>

  <div class="mySlides ">
    <div class="numbertext">Step 4 / 5</div>
    <img src="img/slideshow/img4.png" style="width:30%;height: 50%;border: 2px solid black;">
    
  </div>
  <div class="mySlides ">
    <div class="numbertext">Step 5 / 5</div>
    <img src="img/slideshow/img5.png" style="width:30%;height: 50%;border: 2px solid black;">
    
  </div>
  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
</div>
          
          
        </div>
        
         
      


<br><br><br><br>
<footer><hr>Contact Us: <br>PharmaGoService@gmail.com<br> +639-506-998-950 </footer>


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
<script src="js/slideshow.js"></script>

  </body>
</html>