<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$car_plate=$_POST['car_plate'];
	$driver=$_POST['driver'];
	$company=$_POST['company'];
	$car_type=$_POST['car_type'];
	
	mysqli_query($conn,"update car set car_plate='$car_plate', driver='$driver', company='$company', car_type='$car_type' where car_id='$id'");
	header('location:add_car.php');

?>