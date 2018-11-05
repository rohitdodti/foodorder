<?php
	date_default_timezone_set('Asia/Kolkata');
	$name=$_POST["name"];
	$uname=$_POST["uname"];
    $email=$_POST["email"];
	$passwd=$_POST["passwd"];
	include ('connection.php');
    $connection = new createConnection();
    $connection->connectToDatabase(); 
    $connection->selectDatabase();
    $test2=mysql_query("INSERT INTO `login`(`name`, `uname`, `email`, `password`) VALUES ('$name','$uname','$email','$passwd')");
	if(! $test2 )
		{
		
			die('Could not update data: ' . mysql_error());
			
		}
    echo "<br />";
	$result=mysql_query("select * from login");
				while($row=mysql_fetch_array($result))
				{
					$code=$row["code"];
				}	
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
  <div class="alert alert-success">
  <center><strong>Congratulations!<?php
  echo "$name";?><br></strong> Your details are <br><?php
  echo "Username: "; echo "$uname"; 
  echo "<br>";
  echo "Password: "; echo "$passwd";echo "<br>";
  echo "Unique Code: "; echo "$code"?></br><br><br>
  <a href="login.html" class="btn btn-success page-scroll">Click here to login</a></center>
</div>
</body>
</head>
</html>
	<?php
	//echo "<a href=index.php  ><h1>Click Here Go to login page</h1></a>";
    $connection->closeConnection();



?>
