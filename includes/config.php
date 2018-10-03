<?php 
	ob_start();
	session_start();
	
	$timezone = date_default_timezone_set("America/New_York");

	$con = mysqli_connect("localhost", "root", "", "slotify"); // connects to SQL database @localhost using root user, no password, using slotify database table

	if(mysqli_connect_errno()){
		echo "Failed to connect: " . mysqli_connect_errno();
	}


 ?>