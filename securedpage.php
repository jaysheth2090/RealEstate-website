<?php	


include("config.php");
include("connect.php");

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
    
mysql_select_db("qwerty", $setup_link);

$id=$_SESSION['username'];
 echo $id;
  $data1=mysql_query("SELECT fname FROM registration Where email= '".$id."'") 
 or die(mysql_error()); 
 

 
 $data=mysql_query("SELECT * FROM registration Where email= '".$id."'") 
 or die(mysql_error()); 
 
 
 while($info1 = mysql_fetch_array( $data1 )) 
 { 

 $name=$info1['fname'];
 
 }
 

echo $name;
$_SESSION['name']=$name;


 
 
 
 
 Print "<h7>Profile:</h7>";
 Print "<br/>"; 
 Print "<br/>"; 
 Print "<br/>"; 
 Print "<table width= 527 border=2 align=left cellpadding= 5 class=h8>";
  
 Print "<tr>"; 
 
 
  while($info = mysql_fetch_array( $data )) 
 { 

 Print "<tr >";
 Print "<td  align=right>First Name : </td> ";
 Print "<td >".$info['fname'] . "</td> </tr>"; 
 
 Print "<tr >";
 Print "<td   align=right>Last Name : </td> ";
 Print "<td>".$info['lname'] . " </td></tr>"; 
 
 Print "<tr >";
 Print "<td   align=right>Email ID : </td> ";
 Print "<td>".$info['email'] . " </td></tr>"; 


Print "<tr >";
 Print "<td   align=right>Address : </td> ";
 Print "<td>".$info['address'] . " </td></tr>"; 
  
 
 Print "<tr>";
 Print "<td   align=right>Phone Number : </td> ";
 Print "<td>".$info['ph_no'] . " </td></tr>"; 
 
 Print "<tr>";
 Print "<td   align=right>City : </td> ";
 Print "<td>".$info['city'] . " </td></tr>"; 
 
 
 Print "<tr>";
 Print "<td   align=right>State : </td> ";
 Print "<td>".$info['state'] . " </td></tr>"; 
 
 } 
 Print "</table>"; 
 


?>
<?php echo $_SESSION['username']; ?></b>
</p>
<br/>
 <a href=add_listing.php>Add Listing</a> |
 <a href=see_existing.php>See existing Listings</a>;

<p><a href="logout.php">Logout</a></p>


</body>



</html>

<?php
$source=$footer;
echo $source;
?>
