<?php
$uname	= $_REQUEST['uname'];
$msg 	= $_REQUEST['msg'];
$con 	=  mysqli_connect("localhost","root","aaaaa","test");
$mysql_qry="INSERT INTO logs (username , msg) VALUES ('$uname', '$msg');";
$con->query($mysql_qry);
$quer ="SELECT * FROM logs ORDER BY idlogs DESC";
$result1 = mysqli_query($con,$quer);
while ($extract = mysqli_fetch_array($result1))  {
 	  echo $extract['username']. ": ".$extract['msg']."<br />"; 	
	}
	return $extract;
?>