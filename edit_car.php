<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$car_plate=$_POST['car_plate'];
	$driver=$_POST['driver'];
	$company=$_POST['company'];
	$car_type=$_POST['car_type'];

	$fileinfo=PATHINFO($_FILES["image"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $newFilename);
	$location ="upload/" . $newFilename;
	
	mysqli_query($conn,"update car set car_plate='$car_plate', driver='$driver', company='$company', car_type='$car_type', car_image='$location' where car_id='$id'");
	header('location:add_car.php');

?>