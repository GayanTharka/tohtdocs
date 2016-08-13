<?php

?>

<html>
<head>
<title> Chat Box</title>
<link rel= "stylesheet" type="text/css" href="bootstrap.css" />
<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<script>
function submitChat(){
 	if (form1.uname.value=='' || form1.msg.value==''){ 
		alert('ALL FIELDS ARE MANDATORY..!!');
		return;
	}
	form1.uname.readOnly=true;
	form1.uname.style.border='none';
	var uname = form1.uname.value;
	var msg   = form1.msg.value;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState ==4&& xmlhttp.status == 200){
			document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open('GET','insert.php?uname='+uname+'&msg='+msg,true);
	xmlhttp.send();   	
} 
        $(document).ready(function(e){
        $.ajaxSetup({cache:false});
        setInterval(function(){$('#chatlogs').load('logs.php')}, 2000);
        });
	
</script>

</head> 
<body>
<form name= "form1" class="form">
	<div class= "form-control">
	Enter Your Chat Name :  <input type= "text" name="uname"/> <br />	<br>	
		Your Message     : 

	<textarea name= "msg" style="width:200px; heght:40px;" class=""></textarea> <br />
	<a href="#" onclick ="submitChat()"class="badge" style="width:100px;height:30px"> Send </a><br /> <br />
<br>
<div id ="chatlogs" class="">
LOADING CHATLOGS PLEASE WAIT...
</div>
 </div>
 </form>
</body>
</html>