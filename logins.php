<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
include ('connection.php');
    $connection = new createConnection();
    $connection->connectToDatabase(); 
    $connection->selectDatabase();
              
                $logid=$_POST['username'];
				$pswd=$_POST["password"];
			
				$result=mysql_query("select * from login where uname='$logid'");
				while($row=mysql_fetch_array($result))
				{
					$password=$row["password"];
					$code=$row["code"];
					$name=$row["name"];
				}
              
               		if( $pswd==$password)
					{	
						if($code>='1' || $code<='100000')
						{
						session_start();
						$_SESSION['sid']=session_id();
						echo "red";
						header( 'Location: http://localhost/hotel/main.php?logid='.$name.'') ;
						echo "vishal";
						}
						
						else 
							echo "You have no permission";
						
					}
				else	
				echo "<center><a href=index.html>Login UnSuccessful</a></center>";
			
	ob_end_flush();
    $connection->closeConnection();
?>