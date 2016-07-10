<?php


session_start();


if (isset($_SESSION['username'])) {
        header('Location: add_validate.php');
}


	$header=implode("",file('header.htm'));		
	$topnav_manu=implode("",file('menubar.htm'));
	$content=implode("",file('ads.htm'));	
	$footer=implode("",file('footer.htm'));				
	$source=$header.$topnav_manu;
	
	echo $source;		
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>

<body>
   <form method="post" action="loginproc_admin.php" class="login">
    
    <h1><a href="index.html">Admin Login</a></h1>
    <br/><br/>
    <p>
      <label for="login">Username</label>
      <input type="text" name="username"  placeholder="Enter the Username">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" value="4815162342">
    </p>

    <p class="login-submit">
      <button type="submit" class="login-button">Login<br/></button>
    </p>

    
  </form>

</body>
</html>
<?php

$source=$footer;
	
	echo $source;		




?>
