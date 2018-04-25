<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$fname=$_POST['fname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$tel=$_POST['tel'];
	$type=$_POST['type'];
	
	mysqli_query($conn,"update user set fname='$fname', username='$username', password='$password', tel='$tel', type='$type' where userid='$id'");
	header('location:add_user.php');

?>