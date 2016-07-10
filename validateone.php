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





$val=$_POST["val"];
print $val; 
$sql =" UPDATE reg
SET validated='yes'
WHERE Name='" . $val . "'";
$result=mysql_query($sql, $setup_link) or die ('Unable to run query:'.mysql_error());
print "ready";
    

/*$sql =" UPDATE reg
SET validated='yes'
WHERE '" . $name . "'";
$result=mysql_query($sql, $setup_link) or die ('Unable to run query:'.mysql_error());
print "ready";
}
*/



?>

<html>
<p><a href="logout.php">Logout</a></p>
<p><a href="validate.php">Back to Validation Page</a></p>
</html>


<?php
$source=$footer;
echo $source;		
?>


