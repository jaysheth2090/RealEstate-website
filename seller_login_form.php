<?php


session_start();


if (isset($_SESSION['username'])) {
        header('Location: add_validate.php');
}

	$header=implode("",file('header.htm'));		
	$topnav_manu=implode("",file('menubar.htm'));
	//$content=implode("",file('.htm'));	
	$footer=implode("",file('footer.htm'));				
	$source=$header.$topnav_manu;
	
	echo $source;		


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    
   <form method="post" action="loginproc.php" class="login">
    
    <h1><a href="index.html">Seller Login</a></h1>
    <br/><br/>
    <p>
      <label for="login">Email:</label>
      <input type="text" name="username"  value="name@example.com">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" value="4815162342">
    </p>

    <p class="login-submit">
      <button type="submit" class="login-button">Login<br/></button>
    </p>

    <p class="forgot-password"><a href="f_pass.php">Forgot your password?</a></p>
  </form>

</body>
</html>

<?php

$source=$footer;
	
	echo $source;		

?>