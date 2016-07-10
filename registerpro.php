<?php


	$header=implode("",file('header.htm'));		
	$topnav_manu=implode("",file('menubar.htm'));
	//$content=implode("",file('.htm'));	
	$footer=implode("",file('footer.htm'));				
	$source=$header.$topnav_manu;
	
	echo $source;		


include("config.php");
?>

<?php session_start();
	
		
					
			$fn=$_POST['fname'];
			$ln=$_POST['lname'];
			$email=$_POST['email'];
			$pwd=$_POST['pass'];
			$phone=$_POST['ph_number'];
			$add=$_POST['address'];
			$city=$_POST['city'];
			$state=$_POST['state'];
			$zip=$_POST['zip'];  
			
		
			
			$q="insert into registration
				(fname,lname,email,password,ph_no,address,city,state,zipcode)
				values('$fn','$ln','$email','$pwd','$phone','$add','$city','$state','$zip')";
			
			mysql_query($q,$link ) or die($q);	
			
			header("location:index.php");
	
?>

<?php
$source=$footer;
echo $source;
?>
