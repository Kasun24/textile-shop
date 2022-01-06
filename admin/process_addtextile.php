<?php
require('includes/config.php');

	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['name']) || empty($_POST['description']) || empty($_POST['brand'])|| empty($_POST['material']) || empty($_POST['size']) || empty($_POST['price']) || empty($_POST['qty']))
		{
			$msg[]="Please full fill all requirement";
		}
		if(!(is_numeric($_POST['price'])))
		{
			$msg[]="Price must be in Numeric  Format...";
		}
		
		if(empty($_FILES['img']['name']))
		$msg[] = "Please provide a file";
	
		if($_FILES['img']['error']>0)
		$msg[] = "Error uploading file";
		
				
		if(!(strtoupper(substr($_FILES['img']['name'],-4))==".JPG" || strtoupper(substr($_FILES['img']['name'],-5))==".JPEG"|| strtoupper(substr($_FILES['img']['name'],-4))==".GIF"))
			$msg[] = "wrong file  type";
			
		if(file_exists("../upload_image/".$_FILES['img']['name']))
			$msg[] = "File already uploaded. Please do not updated with same name";
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			move_uploaded_file($_FILES['img']['tmp_name'],"../upload_image/".$_FILES['img']['name']);
			$t_img = "upload_image/".$_FILES['img']['name'];	
				
		
			$t_nm=$_POST['name'];
			$t_subcat=$_POST['cat'];
			$t_desc=$_POST['description'];
			$t_material=$_POST['material'];
			$t_brand=$_POST['brand'];			
			$t_size=$_POST['size'];
			$t_price=$_POST['price'];
			$t_qty=$_POST['qty'];
			
			
			$query="insert into textile(t_nm,t_subcat,t_desc,t_material,t_brand,t_size,t_price,t_qty,t_img)
			values('$t_nm','$t_subcat','$t_desc','$t_material','$t_brand','$t_size',$t_price,$t_qty,'$t_img')";
			
			mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
			header("location:addtextile.php");
		
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	