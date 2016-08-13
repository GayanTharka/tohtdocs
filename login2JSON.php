<?php
require "conn.php" ;
$username =$_POST["username"];	
$password =$_POST["password"];
$mysql_qry ="SELECT * FROM logindetails WHERE  userName='$username' AND  passWord=sha1('$password');";
$resu = mysqli_query($conn, $mysql_qry);

$contact = array();
$itera=mysqli_num_rows($resu);
    while ($row = $resu->fetch_assoc()) {    
	$contact['username']= $row["userName"];
	$contact['password']= $row["passWord"];
	$contact['empId']=$row["empId"];
	$contact['accesslevel']= $row["accessLevel"];
	$itera--;
}	
	echo json_encode($contact);
$conn->close();
?> 