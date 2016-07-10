<?php


	$header=implode("",file('header.htm'));		
	$topnav_manu=implode("",file('menubar.htm'));
	//$content=implode("",file('.htm'));	
	$footer=implode("",file('footer.htm'));				
	$source=$header.$topnav_manu;
	
	echo $source;		



session_start();


if (!isset($_SESSION['username'])) {
        header('Location: index.php');
}

$uname=$_SESSION['username'];




if (file_exists("connect.php")) {
include("connect.php");
}
else {
echo "Unable to Connect To the Database,Website not available ";
return;
} 

mysql_select_db("qwerty", $setup_link);


$name = $_POST['name'];
$address = $_POST['address'];
$feet = $_POST['feet'];
$beds = $_POST['beds'];
$city = $_POST['city'];
$state = $_POST['state'];




mysql_query("INSERT INTO homes (Name, Address,beds,City,State)
VALUES ('$name', '$address','$beds','$city','$state')");



/*
mysql_query("INSERT INTO homes (Name, Address,beds,Sq.feet,City,State)
VALUES ('$name', '$address','$feet','$beds','$city','$state')");
*/

mysql_close($setup_link);



?>




<html>
<p><a href="logout.php">Logout</a></p>
</html>



<?php
$source=$footer;
echo $source;
?>
