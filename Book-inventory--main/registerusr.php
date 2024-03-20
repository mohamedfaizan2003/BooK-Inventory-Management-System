<?php 
	$connection = mysqli_connect("localhost","root",""); 
	$db = mysqli_select_db($connection,"lms"); 
	$query = "insert into users values = (name ='$_POST[name]',email ='$_POST[email]',password ='$_POST[password]',mobile ='$_POST[mobile]',address ='$_POST[address]')"; 
	$query_run = mysqli_query($connection,$query); 
?> 
<script type="text/javascript"> 
	alert("Registration successfull...You may Login now !!"); 
	window.location.href = "index.php"; 
</script>