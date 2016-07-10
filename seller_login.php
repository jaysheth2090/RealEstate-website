<?php



	$header=implode("",file('header.htm'));		
	$topnav_manu=implode("",file('menubar.htm'));
	//$content=implode("",file('.htm'));	
	$footer=implode("",file('footer.htm'));				
	$source=$header.$topnav_manu;
	
	echo $source;		

session_start();


if (isset($_SESSION['username'])) {
        header('Location: securedpage.php');
}

?>
<html>



<body>

<h3>User Login</h3>

<table border="0">
<form method="POST" action="loginproc.php">
<tr><td>Username</td><td>:</td><td><input type="text" name="username" size="20"></td></tr>
<tr><td>Password</td><td>:</td><td><input type="password" name="password" size="20"></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Login"></td></tr>
</form>
</table>

</body>

</html>




<html>
<p><a href="mailone.php">Forgot Password</a></p>

</html>


<?php
$source=$footer;
echo $source;
?>
