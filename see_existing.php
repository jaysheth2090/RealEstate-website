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

Print "<link rel=stylesheet href=css/style.css type=text/css media=screen>";





mysql_select_db("qwerty", $setup_link);

$id=$_SESSION['username'];
 $name=$_SESSION['name'];
 echo $name;
 $data=mysql_query
 ("SELECT * FROM homes Where seller= '".$name."'")
 or die(mysql_error()); 
 
// Print "<div class=login2>";
 
 Print "<table class=tablejay>";
  
 Print "<tr>"; 
 Print "<th>Name</th> <th>Address</th> <th>Bedrooms</th><th>sq. Feet</th> <th>Price</th><th>Type</th><th>City</th><th>State</th><th>email</th></tr>";
 
 
 while($info = mysql_fetch_array( $data )) 
 { 

 Print "<tr align=center class=success>";
 Print "<td >".$info['Name'] . "</td> "; 
 Print "<td>".$info['Address'] . " </td>"; 
 Print "<td>".$info['beds'] . "</td> "; 
 Print "<td>".$info['feet'] . " </td>";
 Print "<td >".$info['Prize'] . "</td> ";
 Print "<td >".$info['Que'] . "</td> ";
 Print "<td >".$info['City'] . "</td> ";
 Print "<td >".$info['State'] . "</td> ";
 Print "<td >".$info['email'] . "</td></tr> ";
  

 } 
 Print "</table>"; 
 
 Print "<div>";


?>
<br/>
 <a href=add_listing.php>Add Listing</a> |
 <a href=securedpage.php>Back</a>;

<p><a href="logout.php">Logout</a></p>
