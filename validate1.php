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



$tbl_name="reg";
$sql="SELECT * FROM $tbl_name WHERE validated= 'no'";
$result=mysql_query($sql, $setup_link) or die ('Unable to run query:'.mysql_error());

/*
<table border cellpadding=3> 
 while($info = mysql_fetch_array( $result )) 
 { 
 <tr> 
 <th>Name:</th> <td>.$info['Name'] . </td> ; 
<th>Address:</th> <td>.$info['Address'] .  </td></tr>;
<th>Validate</th> <td>
 
 <form name="input"  method="post">
 <input type="radio" name="val" value="Validate">
  </form>
  </td></tr> 
 } 
 </table> 
 }

<form name="input"  method="post" action="index.php">
 <input type="radio" name="val" value="Validate">
  
 
 </td></tr>";



 */
 $val=7;
 
 
 Print "<table border cellpadding=3>"; 
 while($info = mysql_fetch_array( $result )) 
 { 
 Print "<tr>"; 
 Print "<th>Title:</th> <td>".$info['Name'] . "</td> "; 
 Print "<th>Id:</th> <td>".$info['Address'] . " </td>"; 
 
 
 echo $info['Name']; 
 print "<th>Validate:</th> <td> <form method=\"POST\" action=\"./user_active.php\">\n 
<label>Validate? <input type=\"radio\" name=\"val\"  value= ".$info['Name']."></label><br>
<input type=\"submit\" name=\"Submit\" />";
 
 

 
$name=$info['Name'];
if(isset($_POST["val"])){
$val=$_POST["val"];
print $val; 

 
 if(isset($_POST["val"]))
{
$sql =" UPDATE reg
SET validated='yes'
WHERE Name='" . $val . "'";
$result=mysql_query($sql, $setup_link) or die ('Unable to run query:'.mysql_error());
print "ready";
}
}


/*$sql =" UPDATE reg
SET validated='yes'
WHERE '" . $name . "'";
$result=mysql_query($sql, $setup_link) or die ('Unable to run query:'.mysql_error());
print "ready";
}
*/
else
print "not done";




 Print "</td></tr>";
 } 
 Print "</table>"; 
 
 
 

?>


<html>
<p><a href="logout.php">Logout</a></p>
</html>


<?php

$source=$footer;
	
	echo $source;		




?>


