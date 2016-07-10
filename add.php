<?php
include("config.php");
include("connect.php");


	$header=implode("",file('header.htm'));		
	$topnav_manu=implode("",file('menubar.htm'));
	//$content=implode("",file('.htm'));	
	$footer=implode("",file('footer.htm'));				
	$source=$header.$topnav_manu;
	
	echo $source;		


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<center><br /><br />
<b> Enter your details</b>
<form method="post" Action='reques_sent1.php'>
<br />
First Name:<input type=" text" name="n1text" /><br /><br />
Last Name:<input type="text" name="n2text" /><br /><br />
Address: <input type="n3text" Rows=1,Columns=1000 /><br /><br />
Contact no:<input type="text" name="n4text" /><br /><br />
Password:<input type="text" name="n4text" /><br /><br />
City:   <input type="text" name="n5text" /><br /><br />
State: <input type="text" name="n6text" /><br /><br />
Email Id:<input type="text" name="email" /><br /><br />
<input type="SUBMIT" name="SUBMIT" value="SUBMIT" /><br />
</centre>
</form>	


</body>
</html>
<?php
$source=$footer;
echo $source;
?>
