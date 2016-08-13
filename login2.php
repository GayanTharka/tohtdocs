<?php
require "conn.php" ;
$user_name = $_POST["username"];	
$password = $_POST["password"];
$mysql_qry ="SELECT * FROM logindetails WHERE  userName='$user_name' AND  passWord=sha1('$password');";

//$mysql_qry = "select * from logindetails WHERE username= '$user_name';";// AND password ='$password';" ;
$resu = mysqli_query($conn, $mysql_qry);
//var_dump($resu);
if (mysqli_num_rows($resu)>0){ 
	echo "Login successful";
	}
else {
	echo "Login Failed"; 
}
$conn->close();
?> 