<?php
require "conn.php";
$empId 		  = $_POST["empId"];
$numofdays    = $_POST["numberofDays"];
$leaveperiod  = $_POST["leavePeriod"];
$leavetype 	  = $_POST["leaveType"];
$startingDate = $_POST["leaveDate"];
$fullDay ="0";
$halfDay ="0";
$status       = "Pending";
$date		  = getdate(date("U"));
$day = $date['year']."-".$date['mon']."-".$date['mday'];



if ($leaveperiod ==="fullDay"){
	$fullDay ="1";
}
else if ($leaveperiod === "halfDay"){
	$halfDay ="1";
}


$mysql_qry =  "INSERT INTO leaveentry (empId, fullDay, halfDay, leaveType, startingDate, status,entryDate,numOfFullDays) VALUES ('$empId','$fullDay','$halfDay','$leavetype', '$startingDate','$status','$day','$numofdays');";
		
if ($conn->query($mysql_qry) === TRUE){
	echo "Leave Applied..!!!"; 
}
else
	echo   "Error: " .$conn->error;

$conn->close();  
?> 
  