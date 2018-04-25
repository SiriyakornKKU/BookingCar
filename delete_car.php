<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from car where car_id='$id'");
	header('location:add_car.php');

?>