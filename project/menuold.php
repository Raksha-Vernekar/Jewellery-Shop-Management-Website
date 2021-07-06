<?php

include('database.php');
include('function.php');
include('server.php');
if(isset($_POST["add_to_cart"]))  
 {
  $dishname=$_POST['hidden_name'];
  $dishpric=$_POST['hidden_price'];
  $dishqty=$_POST['quantity'];
  $idquery="select * from `menu` where `designname`='$dishname'";
  $result34 = mysqli_query($con, $idquery);
  $val=mysqli_fetch_array($result34);
  $itemqty= $val['qty'];
  $dishid=$val['designid'];
  if($itemqty-$dishqty>=0 && $dishqty>0){?>
  <form action="dummyadd.php" id="myForm" method="POST" class="form-container" style="display:block;">
  
  <p><?php echo $dishname?> will be added to your cart</p>
  <button type="submit" class="btn" id="ok" name="ok">OK</input>
  <input type="hidden" id="dishhidden" name="hid_name" value="<?php echo $dishname; ?>"/> 
  <input type="hidden" id="dishhidden" name="hid_id" value="<?php echo $dishid; ?>"/> 
  <input type="hidden" id="dishhidden" name="hid_price" value="<?php echo $dishpric; ?>"/> 
  <input type="hidden" id="dishhidden" name="hid_qty" value="<?php echo $dishqty; ?>"/> 
  <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form><?php }
  else if($dishqty<=0){
    echo '<script>alert("Quantity must be greater than 0!")</script>';
  }
  else{
    echo '<script>alert("Sorry, very few items left. Kindly reduce your quantity!")</script>';
  }?>
  <script>
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
      }
      </script>
<?php
 }

 
 
?>

<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="myweb.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Shree Jewels</title>
    <style>
    	.img-container {
		display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
      }
      .limit{
    width:50px;
}
    .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
}
.card-image {
 
  width: 300px;
  height: 300px;
  display: flex;
  justify-content: center;
  flex-direction: row;
}
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display:none;
  position: fixed;
  bottom:80;
  left: 700px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  display: none;
  padding: 10px;
  background-color: #f1f1f1;
  position: fixed;
  bottom:250;
  left: 700px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 30%;
  margin-bottom:10px;
  margin-left:80px;
  opacity: 0.8;
 
    
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
  </head>
  <body>
  <body>
  <center><h1> SHREE JEWELS </h1></center>

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
        <a class="navbar-brand" href="Homepage.php">Shree Jewels</a>
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
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="false"></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      

  <?php  
  $query = "SELECT * FROM menu where avail_status=0 group by category"; 
  $result = mysqli_query($con, $query);  
    while($row = mysqli_fetch_array($result))  
    { 
      $cat=$row['category'];
    ?> 
    <h1 class ="logo1"><?php echo $row['category']?></h1>
    <div class="container" >
    <?php  
    $query1 = "SELECT * FROM menu where avail_status=0 and category='$cat'"; 
    $result2 = mysqli_query($con, $query1);  
    $count=0;
    while($rows = mysqli_fetch_array($result2))  
    { 
      if($count>2){ $count=0;?>
      </div>
      <div class="container">
        <div class="col mb-4">
          <div class="card h-100">
          <form method="post" action="menu.php?action=add&id=<?php echo $rows["designid"]; ?>">  
          <img src="<?php echo 'data:image/jpeg;base64,'.base64_encode($rows['img'] );?>" height="250" width="250" class="card-img-top" />
          <div class="card-body">
          <h5 class="card-title"><?php echo $rows['designname']?></h5>
          <p class="card-text"><?php echo $rows['descrip']?></p>
          <input type="hidden" name="hidden_name" value="<?php echo $rows['designname'];?>" />  
          <input type="hidden" name="hidden_price" value="<?php echo $rows['price']; ?>" />
          <input type="hidden" name="hidden_id" value="<?php echo $rows["designid"]; ?>" />  
          <div class= abc >Rs. <?php echo $rows['price']?></div>
          <input type="text" name="quantity" value="1" size="3"/>
          <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
          </form>
          </div>
          </div>
    </div>
    
      <?php  
      }
      else{?>
        <div class="col mb-4">
          <div class="card h-100">
          <form method="post" action="">  
          <img src="<?php echo 'data:image/jpeg;base64,'.base64_encode($rows['img'] );?>"height="250" width="250"  class="card-img-top" />
          <div class="card-body">
          <h5 class="card-title"><?php echo $rows['designname']?></h5>
          <p class="card-text"><?php echo $rows['descrip']?></p>
          <div class= abc >Rs. <?php echo $rows['price']?></div>
          <input type="hidden" id="hidden_name" name="hidden_name" value="<?php echo $rows['designname']; ?>" />  
          <input type="hidden" name="hidden_id" value="<?php echo $row["designid"]; ?>" />
          <input type="hidden" name="hidden_price" value="<?php echo $rows['price']; ?>" />  
          <input type="text" name="quantity" value="1" size="3"/>
          <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />                    
          
          </form>
          
     
          </div>
          </div>
    </div>
    <?php
  }?>
  
<?php
    $count=$count+1;
     }
    
    ?>
  </div>
<?php
    }
    ?>