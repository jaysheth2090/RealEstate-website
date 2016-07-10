<?php






   if (file_exists("connect.php")) {
include("connect.php");
}
else {
echo "Unable to Connect To the Database,Website not available ";
 return;
} 

mysql_select_db("qwerty", $setup_link);

$id=$_POST['username'];
 $data=mysql_query
 ("SELECT * FROM homes Where ID= '".$id."'")
 or die(mysql_error()); 
 Print "<table border cellpadding=3>"; 
 Print "<tr>"; 
 Print "<th>Name</th> <th>Address</th> <th>Bedrooms</th><th>sq. Feet</th> </tr>";
 
 while($info = mysql_fetch_array( $data )) 
 { 

 Print "<tr>";
 Print "<td>".$info['Name'] . "</td> "; 
 Print "<td>".$info['Address'] . " </td>"; 
 Print "<td>".$info['beds'] . "</td> "; 
 Print "<td>".$info['Sq.feet'] . " </td></tr>"; 

 } 
 Print "</table>"; 
 
 
 
 
 

 ?>
