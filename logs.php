<?php
$con 	=  mysqli_connect("localhost","root","aaaaa","test");
$quer ="SELECT * FROM logs ORDER BY idlogs DESC";
$result1 = mysqli_query($con,$quer);
while ($extract = mysqli_fetch_array($result1))  {
 	  echo $extract['username']. ": ".$extract['msg']."<br />"; 	
	}	
?>