<?php
	include('conn.php');
	
	$car_plate=$_POST['car_plate'];
	$driver=$_POST['driver'];
	$company=$_POST['company'];
	$car_type=$_POST['car_type'];

	$fileinfo=PATHINFO($_FILES["image"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $newFilename);
	$location ="upload/" . $newFilename;
	
	mysqli_query($conn,"insert into car (car_plate, driver, company, car_type, car_image) values ('$car_plate','$driver', '$company', '$car_type', '$location')");
	header('location:add_car.php');


?>