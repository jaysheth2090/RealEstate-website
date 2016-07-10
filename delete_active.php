<?php


	$header=implode("",file('header.htm'));		
	$topnav_manu=implode("",file('menubar.htm'));
	//$content=implode("",file('.htm'));	
	$footer=implode("",file('footer.htm'));				
	$source=$header.$topnav_manu;
	
	echo $source;		


$name=$_POST["val"];

//print_r($name);
if (file_exists("connect.php")) {
include("connect.php");
}
else {
echo "Unable to Connect To the Database,Website not available ";
 return;
} 
mysql_select_db("qwerty", $setup_link);

if(empty($name))
{
	
}
else
{
	$count=count($name);
	for($i=0;$i<$count;$i++)
	{
		$sql =" DELETE from registration WHERE fname='" . $name[$i] . "'";
		$result=mysql_query($sql, $setup_link) or die ('Unable to run query:'.mysql_error());
		if($result)
		{
			header('delete.php');
		}
	}
}

header('delete.php');





?>
<?php
$source=$footer;
echo $source;
?>

