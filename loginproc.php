<?php
session_start();


	$header=implode("",file('header.htm'));		
	$topnav_manu=implode("",file('menubar.htm'));
	//$content=implode("",file('.htm'));	
	$footer=implode("",file('footer.htm'));				
	$source=$header.$topnav_manu;
	
	echo $source;	




include('config.inc');
$one="yes";
echo $_POST['username'];
echo $_POST['password'];
$login = mysql_query("SELECT * FROM registration WHERE (email = '" . mysql_real_escape_string($_POST['username']) . "') and  (password = '" . mysql_real_escape_string(($_POST['password'])) . "') and (validated = '" .$one. "')");
$a=0;

while($info = mysql_fetch_array( $login )) 
 { 
    $a++;
    echo $a;
 }
if ($a == 1) {
        $_SESSION['username'] = $_POST['username'];
        
        header('Location:securedpage.php');
        
        
}
else {
        header('Location: index.php');
}

$source=$footer;
echo $source;		


?>
