<?php
	$vname=$_POST['vname'];
	$model=$_POST['model'];
	$add=$_POST['start'];
	$dist=$_POST['dist'];
	$cno=$_POST['cno'];
	$email=$_POST['email'];
	include ("conn.php");
	$qry="insert into emergency_search_mechanic(vehicle_name,model_no,address,district,contact_no,email) values ('$vname','$model','$add','$dist','$cno','$email')";
	mysqli_query($qry,$con);
	include("ems.php");
?>	