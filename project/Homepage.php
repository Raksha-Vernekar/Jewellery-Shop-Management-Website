<?php
session_start(); 





?>


<!doctype html>
<html lang="en">
  <head><center>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Shree Jewellers</title>
  </head>
  <body>
      <center><h1>JEWELLERY ALWAYS FITS!</h1></center>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="C:\Users\Raksha\Desktop\snxmgt\Homepage.html#">Shree Jewellers</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="menu.php">Catalogue <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="help.php">Help</a>
            </li>
            <li class="nav-item dropdown">

              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <?php echo $_SESSION['username']?>

              </a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">

              <a class="dropdown-item" href="dummyadd.php">View Cart</a>

                <a class="dropdown-item" href="userlgout.php">Logout</a>

                

              </div>

            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="false">Jewellery Is Our Favorite Art</a>
            </li>
          </ul>
          
        </div>
      </nav>
      
      <a><img src="https://www.indiacom.com/bp/shree-jewellers-eximp-pvt-ltd_in_hyderabad/img/banner.jpg" width=100%>
      <a><img src="https://shreejee.biz/images/inner_banner.jpg" width=100%>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .fa {
      padding: 10px;
      font-size: 10px;
      width: 20px;
      text-align: center;
      text-decoration: none;
      margin: 5px 2px;
    }
    
    .fa:hover {
        opacity: 0.7;
    }
    
    .fa-facebook {
      background: #3B5998;
      color: white;
    }
    
    .fa-twitter {
      background: #55ACEE;
      color: white;
    }
    
    
    .fa-linkedin {
      background: #007bb5;
      color: white;
    }
    
    .fa-youtube {
      background: #bb0000;
      color: white;
    }
    
    .fa-instagram {
      background: #125688;
      color: white;
    }
    
    </style>
    </head>
    <body>

      
    
    <h2>Contact us on our social media handles</h2>
    
    <!-- Add font awesome icons -->
    <a href="https://www.facebook.com/raksha.vernekar.73/" class="fa fa-facebook"></a>
    <a href="https://twitter.com/VernekarRaksha" class="fa fa-twitter"></a>
    <a href="https://www.linkedin.com/in/raksha-vernekar-736852185/" class="fa fa-linkedin"></a>
    <a href="https://www.instagram.com/rakshavernekar/" class="fa fa-instagram"></a>
        <style>
        .container {
            position: relative;
            text-align: center;
            color: rgb(248, 246, 246);
          }
          .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
          }
        </style>
        </center>
  </body>
</html>