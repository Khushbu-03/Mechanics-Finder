<?php
	include 'auth.php';
?>
<?php
require('conn.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$trn_date = date("Y-m-d H:i:s");
$cname =$_REQUEST['cname'];
$name =$_REQUEST['name'];
$type = $_REQUEST['type'];
$modelno = $_REQUEST['modelno'];
$addr = $_REQUEST['addr'];
$city = $_REQUEST['city'];
$mobile = $_REQUEST['mobile'];
$email = $_REQUEST['email'];
$ins_query="insert into repair_order(`trn_date`,cname,`name`,`type`,`modelno`,addr,city,mobile,email)values('$trn_date','$cname','$name','$type','$modelno','$addr','$city','$mobile','$email')";
mysqli_query($con, $ins_query) or die(mysqli_connect_error($con));
$status = "Detail Send Successfully !!!.</br></br><a href='viewmechanic.php' style='color:green; background-color:rgb(243, 251, 243);text-decoration:underline' > View Your Mechanic Detail Now</a>";
}
?>
<?php
$count=1;
	$sel_query="Select * from users where username='".$_SESSION['username']."'";
$result = mysqli_query($con, $sel_query);
$rows = mysqli_fetch_assoc($result);
?>
<html>
<head>
<title>mechanics finder|bike</title>
</head>
<body>
	<?php
		include 'headern.php';
	?>	
					<!-- ####################################################################################################### -->
	<div class="wrapper col4">
		<div id="container" class="clear"> 
       		<div class="span4">
			</div>
        	<div id="homepage" class="clear">
      			<div class="fl_left">
					<div class="container">
                    <p style="color:green; text-align:center; font-size:30px; margin-left:-150px; width:800px; "><?php echo $status; ?></p>
						<h1 align="center">Bike</h1>
			    		<div  class="form">
						<form id="contactform" action="" method="post"> 
<input type="hidden" name="new" value="1">
<input type="hidden" name="cname" value="<?php echo $rows
['fname']; ?>">
                        <p class="contact"><label for="cname">Vehicle Type</label></p> 
    						<p><select name="type" style="width:400px; height:30px;"  >
                            <option >
                            Bike
                            </option>
                            <option>
                            Car
                            </option>
                            <option>
                            Truck
                            </option>
                            <option>
                            Bus
                            </option>
                            <option>
                            Auto
                            </option>
                            </select></p>
                        
                        
                        
                        
    						<p class="contact"><label for="cname">Bike Name</label></p> 
    						<input id="bname" name="name" placeholder="Bike Name" required  type="text"> 
							<p class="contact"><label for="model">Model no:</label></p> 
    						<input id="modelno" name="modelno" placeholder="Model No."   type="text">
                            <p>       
			 <label for="address" style="color:black;">Address</label> <br><br><textarea id="start" name="addr" required style="color:blue; width:400px;"  ></textarea>
</p> 
    						<p class="contact"><?php include('locationfile.html');?></p> 
               				<p class="contact">
               				  <label for="dist">District & City</label></p> 
    						<p><select name="city" style="width:400px; height:30px;"  >
                            <option>Select Your City</option>
                            <optgroup label="Ahmedabad">
                            <option>Ahmedabad</option>
                            <option>Bavla</option>
                            <option>Daskroi</option>
                            <option> Detroj-Rampura</option>
                            <option>Dhandhuka</option>
                            <option>Dholera</option>

                            <option>Dholka</option>

                            <option>Mandal</option>

                            <option>Sanand</option>

                            <option>Viramgam</option>


                            </optgroup>
                          
                           
                            </select></p>
                			<p class="contact"><label for="mno">Mobile No.</label></p> 
    						<input type="text" id="mno" name="mobile" required maxlength="10" value="<?php echo isset($rows['mobile'])?>"> 
			  				<p class="contact"><label for="email">Email Address</label></p> 
            				<input id="email" name="email" placeholder="Email Address" required type="email" value="<?php echo isset($rows['email'])?>">
                           
							<center>
            					<input class="buttom" name="find" id="find" value="Find! & Send Your Detail" type="submit" onClick=""> 
                               
								&nbsp;<br><br>
								OR
							</center>
                            <br>
                            <br> 
                              <p  style='color:#fbf7f7;  width:800px; margin-left:-35px;'><a href="viewmechanic.php"  style='color:#fbf7f7; background-color:#4b8df9; font-size:20px; border:1px dotted black; border-radius:10px;' class="button">Click Here To View Your Nearest Mechanic Detail Now</a></p>	 	
						</form> 
						</div>      
					</div>
				</div>
      			<div class="fl_right">
					<h1 align="center"></h1>
	  				<img src="images/bigbike.jpg" height="500" width="500"/>
				</div>
			</div>
			<div class="back">
				<div class="contactus_row" >
    				<div class="abc">
     	 				<div class="col_title"><h2><a href="car.php"><img src="images/car1.jpg" height="100" width="150" /></a></h2></div>
					</div>
					<div class="contactus_col abc">
     	  				<div class="col_title"><h2><a href="truck.php"><img src="images/truck1.jpg" height="100" width="150" /></a></h2></div>
					</div>
					<div class="contactus_col abc">
     	  				<div class="col_title"><h2><a href="bus.php"><img src="images/bus1.jpg" height="100" width="150" /></a></h2></div>
    				</div>
					<div class="contactus_col abc">
     	  				<div class="col_title"><h2><a href="auto.php"><img src="images/auto.jpg" height="100" width="150" /></a></h2></div>
    				</div>
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

	