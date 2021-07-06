<?php
include('database.php');
include('function.php');
include('server.php');
if (isset($_SESSION['username'])) {
	echo '<script>alert("Warning!! Please do not refresh the page. You will be redirected after 10 seconds. Kindly save the bill")</script>';
    $uname= $_SESSION['username'];
    $idquery="select * from `user` where `username`='$uname'";
    $result = mysqli_query($con, $idquery);
    $val=mysqli_fetch_array($result);
    $uid= $val['userid'];
    //echo $val['address'];
    //echo $val['phno'];
    $order="select * from `orderplaced` where `userid`='$uid' and status=0";
    $result2 = mysqli_query($con, $order);
    $orders=mysqli_fetch_array($result2);

}
?>
<html>
<script type="text/javascript">
    document.oncontextmenu = disableRightClick;

    function disableRightClick(event)
    {
        event = event || window.event;

        if (event.preventDefault)
        {
            event.preventDefault();
        }
        else
        {
            event.returnValue = false
        }
    }
</script>
<script>
$("bill.php").submit(function(e) {
    e.preventDefault();
});
</script>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="style1.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<script src="script.js"></script>
	</head>
	<body>
		<header>
			<h1>Invoice</h1>
			<address>
				<p><?php echo $uname?></p>
				<p><?php echo $val['address']?></p>
				<p><?php echo $val['phno']?></p>
			</address>
			<span><img alt="" src="http://www.jonathantneal.com/examples/invoice/logo.png"><input type="file" accept="image/*"></span>
		</header>
		<article>
			<h1>Recipient</h1>
			<address >
				<p>SHREE JEWELS</p>
			</address>
			<table class="meta">
				<tr>
					<th><span >Invoice #</span></th>
					<td><span ><?php echo $orders['id']?></span></td>
				</tr>
				<tr>
					<th><span >Date</span></th>
					<td><span ><?php echo $orders['orderdate']?></span></td>
				</tr>
				<tr>
					<th><span>Amount Due</span></th>
					<td><span id="prefix" >Rs.</span><span><?php echo $orders['totamt']?></span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Item</span></th>
						<th><span >Quantity</span></th>
						<th><span >Price</span></th>
					</tr>
				</thead>
				<tbody>
                <?php
				$sql = "select * FROM orderitems i,orderplaced o 
						where o.id=i.orderid
						and i.userid='$uid'
						and o.status=0";
                $re = $con->query($sql);
                while($rows=$re->fetch_assoc()) 
				{ 
					$a=$rows['orderid'];
					$b=$rows['designname'];
					$pricequery="select * from orderitems where orderid='$a' and designname ='$b' and userid='$uid'";
	  				$res = mysqli_query($con, $pricequery);
	  				$val2=mysqli_fetch_array($res);
                   ?>
					<tr>
						<td><span ><?php echo $rows['designname'];?></span></td>
						<td><span ><?php echo $rows['qty'];?></span></td>
						<td><span >Rs. </span><span><?php echo $val2['price']?></span></td>
					</tr>
                    <?php
				}
				$update = mysqli_query($con,"UPDATE orderplaced set `status`=1  WHERE `userid`=$uid;");
				header( "refresh:10;url=dummyadd.php" );
                    ?>
				</tbody>
			</table>
	</body>
</html>