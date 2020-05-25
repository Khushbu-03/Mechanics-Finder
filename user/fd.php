
<html>
<head>
<title>mechanics finder|feedback</title>
</head>
<body>
	<?php
		include 'header.php';
	?>							
					<!-- ####################################################################################################### -->
	<div class="wrapper col4">
		<div id="container" class="clear"> 
       		<div class="span4">
			</div>
        	<div id="homepage" class="clear">
      			<div class="fl_left">
					<div class="container">
                      <?php
require('conn.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{

$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$qos=$_POST['r1'];
	$sugg=$_POST['sugg'];
	$cno=$_POST['cno'];
	$email=$_POST['email'];
	include ("conn.php");
	$qry="insert into feedback(first_name,last_name,qos,suggestion,contact_no,email) values ('$fname','$lname','$qos','$sugg','$cno','$email')";
	mysqli_query($qry,$con);
$status = "Your FeedBack Send Successfully !!!.</br>";
}
?>

                  	 <p style="color:green; text-align:center; font-size:30px;  "><?php echo $status; ?></p>
						<h1 align="center">Feedback Form</h1>
			    		<div  class="form">
						<form id="contactform" method="post" action=""> 
                        <input type="hidden" value="1" name="new" />
    						<p class="contact"><label for="fname">First Name</label></p> 
    						<input name="fname" placeholder="First Name" required tabindex="1" type="text"> 
							<p class="contact"><label for="lname">Last Name</label></p> 
    						<input name="lname" placeholder="Last Name" required tabindex="1" type="text"> 
    						<p class="contact"><label for="address">Please provide your feedback on the quality of our service:</label></p>
							<ul type="none">
								<li><input type="radio" value="excellent" name="r1" />Excellent</li>
    							<li><input type="radio" value="very_good" name="r1" />Very Good</li>
								<li><input type="radio" value="good" name="r1" />Good</li>
								<li><input type="radio" value="average" name="r1" />Average</li>
								<li><input type="radio" value="poor" name="r1" />Poor</li>
							</ul>
               				<p class="contact"><label for="dist">Do you have suggestion on what we can do to provide you with a better service:</label>
							</p>
    						<textarea name="sugg" style="width:400px;"></textarea>
                			<p class="contact"><label for="cno">Contact No.</label></p> 
    						<input type="text" name="cno" required> 
			  				<p class="contact"><label for="email">Email Address</label></p> 
            				<input name="email" placeholder="Email Address" required type="email">
							<center>
            					<input class="buttom" name="sub" tabindex="5" value="submit!" type="submit" onClick=""> 
								&nbsp;
								
							</center> 	 	
						</form> 
						</div>      
					</div>
				</div>
      			<div class="fl_right">
	  				<div class="back">
						<div class="contactus_row" >
						<ul>
							<li>
								<div class="contactus_col rightmanu">
     	 							<img src="images/MAILING-ADRESS-ICON.png" height="50" alt="mailing address">
     	 							<div class="col_title"><h3>MAILING ADDRESS</h3></div>
			  						<p>
            							koyanipriyanka@gmail.com,<br>
										parmarkhyati17@gmail.com       		 						
									</p>
    							</div>
							</li>
							<li>
								<div class="contactus_col rightmanu">
     	  							<img src="images/PHONE-ICON.png" height="50" alt="phone">
        							<div class="col_title"><h3>PHONE</h3></div>
        							<p>
            							priyanka koyani:8866226901<br>
	    								khyati parmar:8866146619<br>
        							</p>
    							</div>
    						</li>
							<li>
								<div class="contactus_col rightmanu">
     	  							<img src="images/OFFICE-HOURS-ICON.png" height="50" alt="office hours">
        							<div class="col_title"><h3>OFFICE HOURS</h3></div>
			 						<p>
            							Monday - Friday<br>
            							9AM - 6PM (GMT+24).
       		 						</p>
    							</div>
							</li>
						</ul>
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