<?php session_start();

	if(!(isset($_SESSION['status'])&& $_SESSION['unm']=="admin"))
	{
		header("location:../index.php");
	}
	require('includes/config.php');

	$q="select * from orders";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
?>

<!DOCTYPE html>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
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
<img src="images/admin.png" width="840" height="350">
</img>							
</div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title">Welcome to Admin .....</h1>
			<div class="entry">
				You have new Orders
				<br>
				<table border='1' WIDTH='100%'>
						<tr>
								<td WIDTH='6%' style="color:darkgreen"><b><u>ID.NO</u></b>
								<TD style="color:darkgreen" WIDTH='20%'><b><u>PRODUCT</u></b>
								<TD style="color:darkgreen" WIDTH='6%'><b><u>QTY</u></b>
								<TD style="color:darkgreen" WIDTH='6%'><b><u>ITEM SIZE</u></b>
								<TD style="color:darkgreen" WIDTH='8%'><b><u>PRICE</u></b>
								<TD style="color:darkgreen" WIDTH='20%'><b><u>USER NAME</u></b>
								<TD style="color:darkgreen" WIDTH='50%'><b><u>USER ADDRESS</u></b>
								<TD style="color:darkgreen" WIDTH='20%'><b><u>USER CITY</u></b>
								<TD style="color:darkgreen" WIDTH='20%'><b><u>USER PROVINCE</u></b>
								<TD style="color:darkgreen" WIDTH='50%'><b><u>USER PHONE NO</u></b>
								<TD style="color:darkgreen" WIDTH='25%'><b><u>DELETE</u></b>
							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['ord_product'].'
										<td>'.$row['ord_qty'].'
										<td>'.$row['ord_size'].'
										<td>'.$row['ord_price'].'
										<td>'.$row['ord_unm'].'
										<td>'.$row['ord_addr'].'
										<td>'.$row['ord_city'].'
										<td>'.$row['ord_prov'].'
										<td>'.$row['ord_phone'].'
										<td><a href="process_del_orders.php?sid='.$row['con_id'].'"><img src="images/drop.png" ></a>
												
									
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
