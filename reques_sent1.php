<?php

	$header=implode("",file('header.htm'));		
	$topnav_manu=implode("",file('menubar.htm'));
	//$content=implode("",file('.htm'));	
	$footer=implode("",file('footer.htm'));				
	$source=$header.$topnav_manu;
	
	echo $source;		


if (file_exists("connect.php")) {
include("connect.php");
}
else {
echo "Unable to Connect To the Database,Website not available ";
 return;
} 

mysql_select_db("qwerty", $setup_link);


$fname = $_POST['n1text'];
$lname = $_POST['n2text'];

$pass = $_POST['n4text'];
$e_pass= md5($pass);

echo $e_pass;

mysql_query("INSERT INTO reg (Name, Address,pass,validated)
VALUES ('$fname', 'lname','$e_pass','no')");

mysql_close($setup_link);
//header('Location: reques_sent.php');



?>

<?php
$source=$footer;
echo $source;
?>

sucess