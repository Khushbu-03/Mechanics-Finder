
<html>
<head>
<title>mechanics finder|contact us</title>
</head>
<body>
	<?php
		include 'header.php';
	?>			
					<!-- ####################################################################################################### -->
		
	<div class="wrapper col4">
		<div id="container" class="clear"> 
			<div class="span4"></div>
				<div id="homepage" class="clear">
					<div class="fl_left">
						<iframe src=				"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14661.897799542028!2d72.6565083!3d23.26220415!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sgu!2sin!4v1455327262041" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> 
					</div>
				</div>
				<div class="fl_right" style="margin-top:-375px;">
					<div class="container">
                    <?php
require('conn.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{

$name =$_REQUEST['name'];
$email = $_REQUEST['email'];
$msg = $_REQUEST['msg'];

$ins_query="insert into contact_us(`name`,email,message)values('$name','$email','$msg')";
mysqli_query($ins_query) or die(mysqli_error());
$status = "Detail Send Successfully !!!.</br>";
}
?>

                  	 <p style="color:green; text-align:center; font-size:30px;  "><?php echo $status; ?></p>
						<h1 align="center">Contact us</h1>
						<div  class="form">
							<form id="contactform" method="post" action="">  
                      
<input type="hidden" name="new" value="1" />								<p class="contact"><label for="cname">Name</label></p> 
								<input name="name" placeholder="name " required tabindex="1" type="text"> 
								<p class="contact"><label for="email">Email</label></p> 
								<input name="email" placeholder="email" required tabindex="1" type="email"> 
								<p class="contact"><label for="address">Message</label></p> 
								<textarea name="msg" tabindex="1" style="width:400px;"></textarea>
								<input class="buttom" name="send" tabindex="5" value="Send Message" type="submit" onClick="#">
								<!--<input class="buttom" name="msg" tabindex="5" value="Send Message" type="button" onClick="#">-->
							</form> 
						</div> 
					</div>
				</div>
				<div class="back">
					<div class="contactus_row" >
						<div class="abc">
							<img src="images/MAILING-ADRESS-ICON.png" height="100" alt="mailing address">
							<div class="col_title"><h2>MAILING ADDRESS</h2></div>
							<p>
								koyanipriyanka@gmail.com,<br>
								parmarkhyati17@gmail.com     
							</p>
						</div>
						<div class="contactus_col abc">
							<img src="images/PHONE-ICON.png" height="100" alt="phone">
							<div class="col_title"><h2>PHONE</h2></div>
							<p>
								priyanka koyani:8866226901<br>
								khyati parmar:8866146619<br>
							</p>
						</div>
						<div class="contactus_col abc">
							<img src="images/OFFICE-HOURS-ICON.png" height="100" alt="office hours">
							<div class="col_title"><h2>OFFICE HOURS</h2></div>
							<p>
								Monday - Friday<br>
								9AM - 6PM (GMT+24).
							</p>
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