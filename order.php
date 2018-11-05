<?php
	date_default_timezone_set('Asia/Kolkata');
	$code=$_POST["code"];
	$iname=$_POST["iname"];
	$name=$_POST["name"];
    $date=$_POST["date"];
	$price=$_POST["price"];
	$address=$_POST["address"];
	include ('connection.php');
    $connection = new createConnection();
    $connection->connectToDatabase(); 
    $connection->selectDatabase();
    $test2=mysql_query("INSERT INTO `order`(`code`, `iname`, `name`, `date`, `price`, `address`) VALUES ('$code','$iname','$name','$date','$price','$address')");
	if(! $test2 )
		{
		
			die('Could not update data: ' . mysql_error());
			
		}
    echo "<br />";
	
	?>
	<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	
  </head>
  <body>
  <div class="alert alert-warning">
  <center><strong>Hello<?php
  ?><br>Your order is booked</strong> <br><?php
  echo "Your Order is";  
  echo  "$iname"; echo "<br>";
  echo "You will get the delivery at the specified address within 40 mins"; echo "<br>";
  echo "And keep Rs $price ready"?></br><br><br>
  <a href="main.php" class="btn btn-success page-scroll">Click here for more order</a></center>
</div>
</body>
</head>
</html>
	<?php
	//echo "<a href=index.php  ><h1>Click Here Go to login page</h1></a>";
    $connection->closeConnection();



?>
