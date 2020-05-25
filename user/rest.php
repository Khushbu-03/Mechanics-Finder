<?php
include ("conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Mechanics Finder|Registration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
	<script type="text/javascript" src="layout/scripts/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="layout/scripts/jquery.cycle.all.js"></script>
	<script type="text/javascript"></script>
										<!-- End Homepage Only Scripts -->
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
                	<li class="last"><a href="login.php" style="text-align:right;color: #F96">Login</a></li>
					<li ><a href="fd.php">Feedback</a></li>
        			<li><a href="cs.php">Contact us</a></li>
        			<li><a href="re.php">Repair</a>
						<ul>
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
                     <?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$username=$_POST['username'];
	$password=$_POST['password'];
$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$addr=$_POST['addr'];
	
	$qry="insert into register(username,password,first_name,last_name,mobile,email,dob,gender,addr) values ('$username','$password','$fname','$lname','$mobile','$email','$dob','$gender','$addr')";
	mysqli_query($con, $qry);
$status = "Your Account Created Successfully !!!.</br></br><a href='login.php'  style='color:green; background-color:rgb(243, 251, 243);text-decoration:underline'>Click Here To Login Now</a>";
}
?>

                  	 <p style="color:green; text-align:center; font-size:25px;  "><?php echo $status; ?></p>
						<h1 align="center">Registration</h1>
			    		<div  class="form">
						<form id="contactform" action="" method="post"> 
                        <input type="hidden" value="1" name="new" />
                        <p class="contact"><label for="password">User Name</label></p> 
    						<input type="text" name="username" required="" placeholder="Enter Username"> 
                        <p class="contact"><label for="password">Create a password</label></p> 
    						<input type="password" name="password" required=""  placeholder="Enter Password"> 
    						<p class="contact"><label for="name"> First Name</label></p> 
    						<input name="fname" placeholder="First name" required=""  type="text"> 
							<p class="contact"><label for="name"> Last Name</label></p> 
    						<input name="lname" placeholder="Last name" required="" type="text">
                            <p class="contact"><label for="phone">Mobile No.</label></p> 
            				<input name="mobile" placeholder="phone number" required="" type="text" maxlength="10"> <br> 
    						<p class="contact"><label for="email">Email</label></p> 
                            
    						<input name="email" placeholder="example@domain.com" required="" type="email"> 
               				
                			
							<fieldset>
                 			
                				<p class="contact"><label for="email">Date of Birth</label></p> 
                            
    						<input name="dob" placeholder="DD/MM/YEAR" required="" type="text"> 
              				</fieldset>
			  				
  							<select class="select-style gender" name="gender">
            					<option>i am..</option>
            					<option >Male</option>
            					<option >Female</option>
								<option >Other</option>
							</select><br><br>
							
							<p class="contact"><label for="address">Address</label></p> 
    						<input name="addr" placeholder="Address" required="" type="text" accept="text/html">
							<center>
            					<input class="buttom" name="submit" value="Sign up!" type="submit" onClick="login.html"> 
								&nbsp;
								
							</center> 	 	
						</form> 
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
					</ul><br /><br />
					<h3 class="p0">Our Facility</h3>
					<ul class="list-1" style="text-decoration:none">
                     	<li><a href="hour12.html" style="background-color:#FFFFFF"><font color="color:#B86365">12 hours available</font></a></li>
						<li><a href="hour24.html"style="background-color:#FFFFFF"><font color="color:#B86365">24 hours available</font></a></li>
						<li><a href="ems.html"style="background-color:#FFFFFF"><font color="color:#B86365">Emergency Search Mechanics</font></a></li>
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
	
