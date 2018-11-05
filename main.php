<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel</title>
	<meta name="description" content="Sticky Table Headers Revisited: Creating functional and flexible sticky table headers" />
		<meta name="keywords" content="Sticky Table Headers Revisited" />
		<meta name="author" content="Codrops" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
  </head>

<body>

 <!--START HEADER -->
    <nav class="navbar navbar-default navbar-static-top navbar-inverse "  style = "  border-raidus :0px ; margin-bottom:0px">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">HOTEL</a>
        </div>
    
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="index.html">Logout</a>
                    </li>
				</ul>
		</div>
          
       
     
</nav>
    <!--End of Header-->
	<div class="component">
					
					<div class="component">
				<table>
					<thead>
						<tr>
							<th>Code</th>
							<th>Item Name</th>
							<th>Price</th>
							<th>Type</th>
							
						</tr>
					</thead>
					<tbody>
						<?php

?>
<?php
date_default_timezone_set('Asia/Kolkata');
include ('connection.php');
    		$connection = new createConnection();
    		$connection->connectToDatabase(); 
    		$connection->selectDatabase();		
		
				
				
				$tlresult2=mysql_query("SELECT * from menuindian ");
				
				
				while($row=mysql_fetch_array($tlresult2))
				{
					$code=$row["code"];
				 	$itemname=$row["iname"];
				 	$price=$row["price"];
					$type=$row["type"];
				 	

					echo "<tr><td>".$code."</td><td>".$itemname."</td><td>".$price."</td>
							<td>".$type."</td>";
				}
				echo "</table><br>";
				
?>
					</tbody>
				</table>
			<div class="container">
					<form name="condidatefrm" method="post" action="order.php" onsubmit="return validateForm()" id="loginform" class="form-horizontal" role="form">
                            <center> <h3>Order an Item (Indian Dishes)</h3>       
                            <div style="margin-bottom: 25px" class="input-group">
                                        <!--<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>-->
                                        <input id="code" type="text" class="form-control" name="code" value="" placeholder="Code">                                        
                            </div>
							<div style="margin-bottom: 25px" class="input-group">
										<input id="iname" type="text" class="form-control" name="iname" value="" placeholder="Item Name">
							</div>
							<div style="margin-bottom: 25px" class="input-group">
										<input id="name" type="text" class="form-control" name="name" value="" placeholder="Name">
							</div>
							<div style="margin-bottom: 25px" class="input-group">
										<input id="date" type="text" class="form-control" name="date" value="" placeholder="YY-MM-DD">
							</div>
							<div style="margin-bottom: 25px" class="input-group">
										<input id="price" type="text" class="form-control" name="price" value="" placeholder="Cost">
							</div>
							<div style="margin-bottom: 25px" class="input-group">
										<input id="address" type="text" class="form-control" name="address" value="" placeholder="Address">
							</div>
							<div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button type="submit" class="btn btn-success">Order</button>

                                    </div></center>
									</div>
							</div>
		</div><!-- /container -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
		<script src="js/jquery.stickyheader.js"></script>
	</body>
</html>