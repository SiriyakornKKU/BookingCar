<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$title=$_POST['title'];
	$start=$_POST['start'];
	$status=$_POST['status'];
	
	mysqli_query($conn,"update events set title='$title', color ='#008000', start='$start', status='$status' where id='$id'");

	header('location:calendar.php');

?>