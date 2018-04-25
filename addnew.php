<?php
	include('conn.php');
	
	$fname=$_POST['fname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$tel=$_POST['tel'];
	$type=$_POST['type'];
	
	mysqli_query($conn,"insert into user (fname, username, password, tel, type) values ('$fname','$username', '$password', '$tel', '$type')");
	header('location:add_user.php');


?>