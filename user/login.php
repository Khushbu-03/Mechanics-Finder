<?php
	require('conn.php');
	$status="";
		session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
		$username = stripslashes($username);
		$username = mysqli_real_escape_string($con, $username);
		$password = stripslashes($password);
		$password = mysqli_real_escape_string($con, $password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `register` WHERE username='$username' and password='$password'";
		$result = mysqli_query($con, $query) or die(mysqli_connect_error($con));
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index1.php"); // Redirect user to index.php
            }else{
				$status="Sorry !!!,Username and Password Incorrect";
				}
    }?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Mechanics Finder|Homepage</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
</head>
<body id="top">
	
					<!-- ####################################################################################################### -->
	<div class="wrapper col2">
  		<div id="header" class="clear">
   			<div class="fl_left">
				<h1 ><font size="15px"><font color="#FFFFFF">Mechanics Finder</font></font></h1>
          	</div>
    		<div id="topnav">
      			<ul>
                <li class="last"><a href="rest.php" style="text-align:right; color: #F96">Register Now</a></li>
					<li><a href="fd.php">Feedback</a></li>
        			<li><a href="cs.php">Contact us</a></li>
					
        			<li><a href="re.php">Repair</a>
						<ul>
                        <li><a href="viewmechanic.php">Find Mechanic </a></li>
            				<li><a href="bike.php">Bike</a></li>
            				<li><a href="car.php">Car</a></li>
            				<li><a href="truck.php">Truck</a></li>
							<li><a href="bus.php">Bus</a></li>
							<li><a href="auto.php">Auto</a></li>
          				</ul>
					</li>
					<li class="active"><a href="index.php">Homepage</a></li>
				</ul>
			</div>
		</div>
	</div>
					<!-- ####################################################################################################### -->
	<div class="wrapper col4">
		<div id="container" class="clear"> 
       		<div class="span4">
			</div>
        	<div id="homepage" class="clear">
      			<div class="fl_left">
					<div class="container">
                       <p style="color:red; text-align:center; font-size:20px;  "><?php echo $status; ?></p>
                      
						<h1 align="center">Log in </h1>
			    		<div  class="form">
							<form id="contactform" method="post" action="">  
    							<p class="contact"><label for="email">User Name</label></p> 
    							<input name="username" placeholder="Enter Username" required="" type="text"> 
                				<p class="contact"><label for="password">Password</label></p> 
    							<input type="password" placeholder="Enter password" name="password" required=""> 
								<input class="buttom" name="submit"  value="Sign in" type="submit"> 
								
							</form>
							<p>Not registered yet? <a href='rest.php'>Register Here</a></p> 
						</div>      
					</div>
				</div>
      			<div class="fl_right">
	  				<h3 class="p0">Our Services</h3>
					<ul class="list-1">
                     	<li><font color="#CC3366">Complete Computer Diagnostics</font></li>
                     	<li><font color="#CC3366">Complete Safety Analysis</font></li>
                     	<li><font color="#CC3366">Drivability Problems</font></li>
                     	<li><font color="#CC3366">Oil Changes</font></li>
                	 	<li><font color="#CC3366">Emission Repair Facility</font></li>
                     	<li><font color="#CC3366">Air Conditioning Service</font></li>
                     	<li><font color="#CC3366">Electrical Systems</font></li>
                     	<li><font color="#CC3366">Fleet Maintenance</font></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
					<!-- ####################################################################################################### -->
	<?php
		include 'footer.php';
	?>
</body>
</html>
