<?php
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$pws=$_POST['password'];
	$cpws=$_POST['repassword'];
	$bod=$_POST['birthday'];
	$age=$_POST['age'];
	$gen=$_POST['gender'];
	$cno=$_POST['cno'];
	$add=$_POST['address'];
	include ("conn.php");
	$qry="insert into register(first_name,last_name,email,password,confirm_password,age,birth_date,gender,contact_no,address) values ('$fname','$lname','$email','$pws','$cpws','$age','$bod','$gen','$cno','$add')";
	mysqli_query($qry,$con);
	header ("location:login.php");
?>	
