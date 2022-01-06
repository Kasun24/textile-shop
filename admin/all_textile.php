<?php 
session_start();
require('includes/config.php');

	$q="select * from textile";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
	?>

<!DOCTYPE html>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<style>
			table{padding:5px;border:10px solid gray}
			td,th{padding:15px}
			
		</style>
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<?php
			include("includes/menu.inc.php");
		?>
	</div>
</div>
<div id="logo-wrap">
<img src="images/textile.jpg" width="840" height="350">
</img>
</div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title"></h1>
			<div class="entry">
				
					<table border='1' WIDTH='100%'>
						<tr>
						<td colspan="7"><a href="addtextile.php">Add New textile</a></td>
						</tr>
						<tr>
<td WIDTH='10%' style="color:darkgreen"><b><u>ITEM.NO</u></b></td>
<TD style="color:darkgreen" WIDTH='50%'><b><u>NAME</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>BRAND</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>SIZE</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>PRICE</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>QTY</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>IMAGE</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>DELETE</u></b></TD>				
							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['t_nm'].'
										<td>'.$row['t_brand'].'
										<td>'.$row['t_size'].'
										<td>'.$row['t_price'].'
										<td>'.$row['t_qty'];
				echo "<td><img src='../$row[t_img]' width='50'/>";
										
										
									echo 	'<td><a href="process_del_textile.php?t_id='.$row['t_id'].'"><img src="images/drop.png" ></a>
												
									
									</tr>';
									$count++;
							}
						?>

					</TABLE>
				
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
			<?php
				include("includes/footer.inc.php");
			?>
</div>
<!-- end footer -->
</body>
</html>
