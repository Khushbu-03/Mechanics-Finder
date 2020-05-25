<html>
<head>
<title>mechanics</title>
</head>
<body>
	<?php
		include 'header.php';
	?>	
					<!-- ####################################################################################################### -->
	<div class="wrapper col4">
		<div id="container" class="clear">
						<h1 align="center">Mechanic</h1>
						<?php
							include 'conn.php';
							$q="select * from mechanic";
							$r=mysqli_query($q);
							while($c=mysqli_fetch_assoc($r))
							{
						?>
						<form>
						<table style="width:100px; height:50px; margin-left:380px;" >
							<tr>
								<td rowspan="5"><img src="<?php echo $c['img'];?>" style="height:100px; width:50px;" /></td>
								<td>Mechanic name:<?php echo $c['mechanic_name'];?></td>
							</tr>
							<tr>
								<td>Contact No.:<?php echo $c['contact_no'];?></td>
							</tr>
							<tr>
								<td>District:<?php echo $c['district'];?></td>
							</tr>
							<tr>
								<td>Service:<?php echo $c['service'];?></td>
							</tr>
							<tr>
								<td>Time hour:<?php echo $c['time_hour'];?></td>
							</tr>
							<tr>
								<td colspan="2">Address:<br /><?php echo $c['address'];?> </td>
							</tr>
						</table>
						</form>
						<?php
							}
						?>
		</div>
	</div>
	<?php
		include 'footer.php';
	?>
</body>
</html>
			