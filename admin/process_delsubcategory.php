<?php
require('includes/config.php');
	if(empty($_POST['subcat_nm']))
		{
			echo "No Selected Category";
			
		}
		else
		{
	
			$cid=$_POST['subcat_nm'];
			
			$q="delete from subcat where subcat_id = $cid";
			
	mysqli_query($conn,$q) or die("Can't Execute DELETE SUB CATEGORY....");	
			
			$q = "delete from subcat where t_subcat = ".$cid;
			//mysql_query($q,$link);
			
			header("location:subcategory.php");
		}
?>
	
	