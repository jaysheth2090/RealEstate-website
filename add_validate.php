<?php
	$header=implode("",file('header.htm'));		
	$topnav_manu=implode("",file('menubar.htm'));
	//$content=implode("",file('.htm'));	
	$footer=implode("",file('footer.htm'));				
	$source=$header.$topnav_manu;
	echo $source;		
?>
<?php
    
session_start();




if (!isset($_SESSION['username'])) {
        header('Location: index.php');
}





if (file_exists('config.inc')) {
include('config.inc');
}
else {
echo "Unable to Connect To the Database,Website not available ";
 return;
} 


$username = $_SESSION['username'];


echo $username;

//$login = mysql_query(“select * from admin where (uname = ‘$username‘) and (pass = ‘$password‘)”,$setup_link);


//$sql="SELECT * FROM qwerty WHERE uanme='jay' and pass='jay'";
//$result=mysql_query($sql);


$tbl_name="admin";
$sql=mysql_query("SELECT * FROM $tbl_name WHERE uname= '$username' ");
//$result=mysql_query($sql, $setup_link) or die ('Unable to run query:'.mysql_error());



$count=mysql_num_rows($sql);
if($count==1){
echo "Success";
//header('Location: validate1.php');
}
else {
echo "Wrong Username or Password";
}




?>


<html>
<p><a href="logout.php">Logout</a></p>
</html>



<?php
$source=$footer;
echo $source;
?>