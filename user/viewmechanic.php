<?php
require('auth.php');
require('conn.php');


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
                   
						<h1 style="text-align:center; font-size:30px;">Find Mechanic Near By You</h1>
			    		<div  class="form"  style="width:850px;">
						<form id="contactform" action="" method="post"> 
<input type="hidden" name="new" value="1">
                        <p class="contact"><label for="cname">Vehicle Type</label></p> 
    						<p><select name="type" style="width:400px; height:30px;"  >
                            <option >
                           Select Your Vehicle
                            </option>
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
                		
							<center>
            					<input class="buttom" name="find" id="find" tabindex="5" value="View Detail" type="submit" onClick=""> 
                               
								
							</center>
                            
						</form> 
                      
						</div>      
					</div>
				</div>
      			  <?php
if(isset($_POST['new']) && $_POST['new']==1)
{
	$count=1;		
	$city=$_POST['city'];
	$type=$_POST['type'];
		
		
	?>
  

    <table border="1px solid black" width="800px;" style="overflow:auto">
    
    <tr style="background:rgb(102, 76, 36) none repeat scroll 0% 0%">
    
    <th align="center">Sr.No</th>
<th align="center">Mechanic Photo</th>
<th align="center">Mechanic Name</th>
<th align="center">Mobile No</th>
<th align="center">Telephone</th>
<th align="center">Email Id</th>
<th align="center">Mechanic Address</th>


</tr>
 <?php
	
		$result = mysqli_query($con, "SELECT * FROM `mechanic` WHERE type='$type' and city='$city'");
		while($row=mysqli_fetch_array($result))
		{
        		
	?>
<tr>
    <td colspan="10" align="center" style="color:white; background:#000;  font-size:18px; height:20px;"><span>Mechanic </span>&nbsp;<span style=" font-size:25px;color:white;"><?php echo $count;?></span> &nbsp;,<span style="color:rgb(58, 191, 201)">Name:<?php echo $row["mechanic_name"]; ?> </span>&nbsp;,<span style="color:#F60">Call Now:<?php echo $row["mobile"]; ?></span> </td>
    </tr>

<tr>

<td align="center"><?php echo $count; ?></td>
<td align="center"><img src="../admin/<?php echo $row['img'];?>" style="height:50px; width:80px;;" /></td><td style="font-size:14px; font-weight:bold; color:#006; text-align:center"><?php echo $row["mechanic_name"]; ?></td>
<td style="font-size:14px; font-weight:bold; color:#006; text-align:center"><?php echo $row["mobile"]; ?></td>
<td style="font-size:14px; font-weight:bold; color:#006; text-align:center"><?php echo $row["contact_no"]; ?></td>
<td align="center"  style="color:black"><?php echo $row["email"]; ?></td>
<td align="center" style="color:black"><?php echo $row["addr"]; ?></td>

</tr>

 
        
<?php $count++;  } ?>  
<tr>
    <td colspan="10" align="center" style="color:white; background:#000;  font-size:30px;">Total&nbsp;<span style=" font-size:40px;color:white;"><?php echo $count-1;?></span> &nbsp;Mechanic Near By You</td>
    </tr>
<?php }?>
</table> 
      
			<div class="back">
			
     	  			
	  		
			</div>
		</div>
	</div>
					<!-- ####################################################################################################### -->
	<?php
		include 'footer.php';
	?>
</body>
</html>

	