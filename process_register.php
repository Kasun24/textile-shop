<?php
	require('includes/config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['fnm']) || empty($_POST['unm']) || empty($_POST['pwd']) || empty($_POST['cpwd']) || empty($_POST['mail'])||empty($_POST['district']))
		{
			$msg.="<li>Please full fill all requirement";
		}
		
		if($_POST['pwd']!=$_POST['cpwd'])
		{
			$msg.="<li>Please Enter your Password Again.....";
		}

		if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))
		{
			$msg.="<li>Please Enter Your Valid Email Address...";
		}

		if (!preg_match('/^[0-9]{10}+$/',$_POST['contact']))
		{
			$msg.="<li>Please Enter Your Valid Mobile Number...";
		}
		
		if(strlen($_POST['pwd'])>10)
		{
			$msg.="<li>Please Enter Your Password in limited Format....";
		}
		
		if(is_numeric($_POST['fnm']))
		{
			$msg.="<li>Name must be in String Format...";
		}
		
		if($msg!="")
		{
			header("location:register.php?error=".$msg);
		}
		else
		{
			$fnm=$_POST['fnm'];
			$unm=$_POST['unm'];
			$pwd=$_POST['pwd'];
			$email=$_POST['mail'];
			$contact=$_POST['contact'];
			$district=$_POST['district'];
			
			
			
			$query="insert into user(u_fnm,u_unm,u_pwd,u_email,u_contact,u_city)
			values('$fnm','$unm','$pwd','$email','$contact','$district')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			header("location:register.php?ok=1");
		}
	}
	else
	{
		header("location:index.php");
	}
?>