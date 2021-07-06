<?php
session_start();
include('database.php');
include('function.php');
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: admin_login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: admin_login.php");
}


// Checking for connections 
if ($con->connect_error) { 
	die('Connect Error (' . 
	$con->connect_errno . ') '. 
	$con->connect_error); 
} 

// SQL query to select data from database 
$sql = "select * FROM user "; 
$result = $con->query($sql); 
$con->close(); 
?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 
	<title>Customers</title> 
	<style> 
       
      .img-container {
		display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
      }
    
  
        h1 { 
            text-align: center; 
            color: Red; 
            font-size: xx-large; 
            font-family: 'Gill Sans', 'Gill Sans MT',  
            ' Calibri', 'Trebuchet MS', 'sans-serif'; 
		} 
		.form-group{
			margin:0 auto;
			width:210px;
		}
		.form input{
			display: inline-block;
			text-align:left;
			float:right;
			height: 20px;
  flex: 0 0 200px;
  margin-left: 10px;
		}
		.form label {
  display: flex;
  flex-direction: row;
  justify-content: flex-end;
  text-align: right;
  width: 400px;
  line-height: 26px;
  margin-bottom: 10px;
}
.button {
  display: inline-block;
  padding: 15px 30px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  margin: 0;
  position:relative;
  
  
}

		
		
  </style>
  </head>
  <body>
  <div class="img-container">
<!--<img src=Capture.PNG alt="Paris">-->
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="admin_home.php">Shree Jewels</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="admin_menu.php">Catalogue <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_orders.php">Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_customer.php">Customers</a>
            </li>
            <li class="nav-item dropdown">

              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                Admin
              </a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                <a class="dropdown-item" href="adminlgout.php">Logout</a>

                

              </div>

            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="false"></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
	<section> 
		<h1>CUSTOMER DETAILS</h1> 
		<!-- TABLE CONSTRUCTION--> 
		<table class="table table-bordered table-dark" id="tableMain" style="table-layout: fixed; width: 100%">
  <thead>
    <tr>
    
                
				<th>CUSTOMER ID</th> 
				<th>CUSTOMER NAME</th> 
				<th>EMAIL</th>
        <th>PHONE NUMBER</th>
        <th>ADDRESS</th>
				
    </tr>
  </thead>
  <tbody>
  </tr> 
			<!-- PHP CODE TO FETCH DATA FROM ROWS--> 
			<?php // LOOP TILL END OF DATA 
				while($rows=$result->fetch_assoc()) 
				{ 
			?> 
			<tr> 
				<!--FETCHING DATA FROM EACH 
					ROW OF EVERY COLUMN--> 
		
				<form method="post" action="">
				<td><div style="word-wrap: break-word;"><?php echo $rows['userid'];?></div></td> 
				<td><div style="word-wrap: break-word;"><?php echo $rows['username'];?></div></td> 
				<td><div style="word-wrap: break-word;"><?php echo $rows['email'];?></div></td> 
        <td><div style="word-wrap: break-word;"><?php echo $rows['phno'];?></div></td> 
				<td><div style="word-wrap: break-word;"><?php echo $rows['address'];?></div></td> 
        </form>
			</tr> 



			<?php 
				
                }
?>
  </body>

</html> 
