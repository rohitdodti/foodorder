<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
include ('connection.php');
    $connection = new createConnection();
    $connection->connectToDatabase(); 
    $connection->selectDatabase();
              
                $logid=$_POST['username'];
				$pswd=$_POST["password"];
				$name="admin";
				$result=mysql_query("select * from admin where uname='$logid'");
				while($row=mysql_fetch_array($result))
				{
					$password=$row["password"];
					$code=$row["code"];
					
				}
                  if( $pswd==$password)
					{	
						if($code='1')
						{
						session_start();
						$_SESSION['sid']=session_id();
						header( 'Location: http://localhost/hotel/adminpage.html?logid='.$name.'') ;
						}
						
						else 
							echo "You have no permission";
						
					}
				else	
				echo "<center><a href=index.html>Login UnSuccessful</a></center>";
			
	ob_end_flush();
    $connection->closeConnection();
?>