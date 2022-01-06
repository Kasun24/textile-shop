<?php session_start();
require('includes/config.php');
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
<img src="images/textile.jpg" width="840" height="350">
</img>
</div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post" style="margin-left:100px">
			<h1 class="title" >Add Textiles</h1>
			<div class="entry" >
				<form action='process_addtextile.php' method='POST' enctype="multipart/form-data">
				
						<br><b>Textile Name:</b><br>
						<input type='text' name='name' size='40'>
						<br><br>
						
						<b>Sub Category:</b><br>
						<select  name="cat">
								<?php
									
										
			
											$query="select * from category ";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option disabled>".$row['cat_nm'];
												
												$q2 = "select * from subcat where parent_id = ".$row['cat_id'];
												
												$res2 = mysqli_query($conn,$q2) or die("Can't Execute Query..");
												while($row2 = mysqli_fetch_assoc($res2))
												{	
												
										echo '<option value="'.$row2['subcat_id'].'"> ---> '.$row2['subcat_nm'];
												
													
												}
												
											}
											mysqli_close($link);
								?>
						</select>
						<br><br>
						
						<b>Description:</b><br>
						<textarea cols="40" rows="6" name='description' ></textarea>
						<br><br>
						
						<b>Brand:</b><br>
						<input type='text' name='brand' size='40'>
						<br><br>
						
						<b>Material:</b><br>
						<input type='text' name='material' size='40'>
						<br><br>
						
						<b>Size:</b><br>
						<input type='text' name='size' size='40'>
						<br><br>
						
						<b>Price:</b><br>
						<input type='text' name='price' size='40'>
						<br><br>

						<b>QTY:</b><br>
						<input type='text' name='qty' size='40'>
						<br><br>
						
						<b>Image:</b><br>
						<input type='file' name='img' size='35'>
						<br><br>
						
						
						<input  type='submit'  value='   OK   '  >
				</form>
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
