



<?php

	$header=implode("",file('header.htm'));		
	$topnav_manu=implode("",file('menubar.htm'));
	//$content=implode("",file('.htm'));	
	$footer=implode("",file('footer.htm'));				
	$source=$header.$topnav_manu;
	
	echo $source;		



include("config.php");
include("connect.php");

session_start();


if (($_SESSION['pass'])=="") {
        header('Location: index.php');
}
echo $_SESSION['pass'];


?>
    <form method="post" action="" class="login">
    
    <h1><a>ENTER NEW pASSWORD</a></h1>
    <br/><br/>
    <p>
      <label for="login">Pass</label>
      <input width="787" type="password" name="pass"  value="name@example.com">
    </p>
    
    <input type= "submit" name= "Submit" value= "Submit" />
    </form>
<p><a href="logout.php">Logout</a></p>    
  <?php  
echo $_SESSION['pass'];
if (isset($_POST["pass"])) {
  
$pass=trim($_POST["pass"]);


$id=$_SESSION['id'];



$q="UPDATE registration SET password = '" . $pass . "' WHERE email= '" . $id . "'"; 
			mysql_query($q,$link ) or die($q);	
echo $id;
echo $pass;
$_SESSION['pass']="";
header('Location: index.php');

}

?>


<?php
$source=$footer;
echo $source;
?>
    