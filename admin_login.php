<?php


<?php

	



	$header=implode("",file('header.htm'));		
	$topnav_manu=implode("",file('menubar.htm'));
	//$content=implode("",file('.htm'));	
	$footer=implode("",file('footer.htm'));				
	$source=$header.$topnav_manu;
	
	echo $source;		
?>
session_start();


if (isset($_SESSION['username'])) {
        header('Location: add_validate.php');
}

?>


<html>
<body>
Welcome Administrator <form name="admin" action="loginproc_admin.php" method="post">
Username: <input type="text" name="username"><br/>
Password: <input type="password" name="password">
<br/><input type="submit" value="Submit">
</form>
</body>
</html>


<html>
<p><a href="mail.php">Forgot Password</a></p>

</html>



<?php
$source=$footer;
echo $source;
?>
