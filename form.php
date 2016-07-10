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

if(isset($_POST['city']))
{$city=$_POST['city'];
$prize=$_POST['prize'];
$name=$_POST['name'];
$add=$_POST['Add'];
echo $name;

$tbl_name="homes";
//$sql="SELECT * FROM $tbl_name WHERE City like'%" . $city . "%' ";
$sql="SELECT * FROM $tbl_name WHERE (Address like '%" . $add . "%' or City like '%" . $city . "%' or Prize = '" . $prize . "' or Name like '%" . $name . "%')";
$result=mysql_query($sql, $setup_link) or die ('Unable to run query:'.mysql_error());
/*
while($row = mysql_fetch_array($result))
{$row = mysql_fetch_array($result) or die(mysql_error());
echo $row['Name'];
}*/

if($city!= null)
{
Print "<table border cellpadding=3>"; 
 while($info = mysql_fetch_array( $result )) 
 { 
 Print "<tr>"; 
 Print "<th>Title:</th> <td>".$info['Name'] . "</td> "; 
 Print "<th>Id:</th> <td>".$info['Address'] . " </td>"; 
 Print "<th>Title:</th> <td>".$info['beds'] . "</td> "; 
 Print "<th>Id:</th> <td>".$info['feet'] . " </td>
 
 
 
 </tr>"; 


 } 
 Print "</table>"; 
 }



}

?>





<html>
<body>
Searching <form name="search"  method="post">
City <input type="text" name="city"><br/>
Name <input type="text" name="name"><br/>
Address <input type="text" name="Add"><br/>
Prize: <select name="prize" ><option value="100000">less than 100000</option>
<option value="200000">less than 200000</option>
<option value="300000">less than 300000</option></select>
<br/><input type="submit" value="Submit">
</form>
</body>
</html>



<html>
<body>
Search for Details <form name="admin" action="search.php" method="post">
Id <input type="text" name="username"><br/>
<br/><input type="submit" value="Submit">
</form>
</body>
</html>



<?php
$source=$footer;
echo $source;
?>

