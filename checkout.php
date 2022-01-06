<?php
 session_start();
 extract($_POST);
 extract($_SESSION);

require('includes/config.php'); 	


	//echo $uid;
	if(isset($submit))
	{	
	$query="insert into orders(ord_unm,ord_addr,ord_city,ord_prov,ord_phone) values('$name','$address','$city','$state','$phone')";
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	header("location:payment_details.php");
	}


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
				<div id="logo">
						<?php
							include("includes/logo.inc.php");
						?>
				</div>
				</div>
				
			<!-- end header -->
			<!------------------------------->
			<font style="font-size:30px;margin-left:420px">Shipping Details</font>	
			<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <div class="clr"></div>
				
            </div><!--/ freshdesignweb top bar -->    
		
      <div  class="form">
    		<form id="contactform" method="post"> 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="email">Address</label></p> 
    			<textarea id="address" name="address" placeholder="Address" required="" cols="55" row="10"type="email"> </textarea>
                
                <p class="contact"><label for="city">City</label></p> 
    			<input type="text" id="city" name="city" required="" placeholder="Your City"> 

                <p class="contact"><label for="state">Province</label></p> 
    			<input type="text" id="state" name="state" required="" placeholder="Your Province"> 

           		<p class="contact"><label for="phone">Mobile phone</label></p> 
           		<input id="phone" name="phone" placeholder="Your phone number" required="" type="text"> <br>

            <input class="buttom" name="submit" id="submit" tabindex="5" value="Confirm & Proceed" type="submit"> 	 
   </form> 
</div>      
</div>
</body>