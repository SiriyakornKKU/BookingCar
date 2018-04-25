<?php
 
	//MySQLi Procedural
	$conn = mysqli_connect("localhost","root","","carbooking");
	
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	mysqli_set_charset($conn,"utf8");

?>