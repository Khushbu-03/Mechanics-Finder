<?php

	
	$con=mysqli_connect("localhost","root","");

	if(!$con){
		error_log("Failed to connect to MySQL: " . mysqli_connect_error($con));
		die('Internal server connection error');
	}
	if(!mysqli_select_db ($con,"mf")){
		error_log("Database selection failed: " . mysqli_connect_error($con));
		die('Internal server database error');
	}
?>