<?php
require "conn.php";
$EmpName=$_POST["username"];
$query2="SELECT * FROM leaveentry WHERE  empId ='$EmpName' ORDER BY recordId DESC LIMIT 15;";
$results=mysqli_query($conn, $query2);
while($record=mysqli_fetch_array($results)){
$json_output[]=$record;
}
print(json_encode($json_output));	
$conn->close();
?>
