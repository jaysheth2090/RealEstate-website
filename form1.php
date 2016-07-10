<html>
<body>
Searching <form name="search"  method="post">
City : <input type="text" name="city"><br/>
Name : <input type="text" name="name"><br/>
Address : <input type="text" name="Add"><br/>
Prize : <select name="prize" ><option value="100000">less than 100000</option>
<option value="200000">less than 200000</option>
<option value="300000">less than 300000</option></select>
Bedrooms : <input type="text" name="Bedrooms"><br/>
Bathrooms : <input type="text" name="Bathrooms"><br/>
Sq/ Feet : <input type="text" name="feet"><br/>

State : <input type="text" name="State"><br/>
Type : <select name="type" ><option value="Residential">Residential</option>
<option value="Commercial">Commercial</option>
</select>
<br/><input type="submit" value="Submit">
</form>
</body>
</html>


<?php
if (file_exists("connect.php")) {
include("connect.php");
}
else {
echo "Unable to Connect To the Database,Website not available ";
 return;
} 

mysql_select_db("qwerty", $setup_link);
$city=12345;
echo $city;
//if(isset($_POST['city']))
/*{$city=$_POST['city'];
$prize=$_POST['prize'];
$name=$_POST['name'];
$add=$_POST['Add'];
echo $name;
$city=12345;
*/

$sql = "select * from homes Where 1=1";

if(isset($_POST['prize']))
  {$sql .= " AND Prize < '".$_POST['prize']."'";}

if(isset($_POST['name']))
{if(($_POST["name"])!= "")
  {$sql .= " AND Name like '%".$_POST['name']."%'";}
 } 

if(isset($_POST['city']))
{if($_POST['city'] != "")
  {$sql .= " AND City like '%".$_POST['city']."%'";}
  }

if(isset($_POST['Add']))
{if(($_POST["Add"])!= "")
  {$sql .= " AND Address like '%".$_POST['Add']."%'";}
}

if(isset($_POST['Bedrooms']))
{if(($_POST["Bedrooms"])!= "")
  {$sql .= " AND beds    like '%".$_POST['Bedrooms']."%'";}
}

if(isset($_POST['Bathrooms']))
{if(($_POST["Bathrooms"])!= "")
  {$sql .= " AND feet like '%".$_POST['Bathrooms']."%'";}
}
if(isset($_POST['State']))
{if(($_POST["State"])!= "")
  {$sql .= " AND state like '%".$_POST['State']."%'";}
}
if(isset($_POST['type']))
{if(($_POST["type"])!= "")
  {$sql .= " AND Que like '%".$_POST['type']."%'";}
}







$result=mysql_query($sql, $setup_link) or die ('Unable to run query:'.mysql_error());





/*
$tbl_name="homes";

$sql="SELECT * FROM $tbl_name WHERE (Address like '%" . $add . "%' or City like '%" . $city . "%' or Prize = '" . $prize . "' or Name like '%" . $name . "%')";
$result=mysql_query($sql, $setup_link) or die ('Unable to run query:'.mysql_error());


*/

/*
while($row = mysql_fetch_array($result))
{$row = mysql_fetch_array($result) or die(mysql_error());
echo $row['Name'];
}*/

//if($city!= null)



$stack = array();
array_push($stack, "apple", "raspberry");


{
Print "<table border cellpadding=3>"; 
 while($info = mysql_fetch_array( $result )) 
 { 
 Print "<tr>"; 
 Print "<th>Title:</th> <td>".$info['Name'] . "</td> "; 
 Print "<th>Id:</th> <td>".$info['Address'] . " </td>"; 
 Print "<th>Title:</th> <td>".$info['beds'] . "</td> "; 
 Print "<th>Id:</th> <td>".$info['ID'] . " </td>";
array_push($stack, $info['ID'] );


print "<th>Validate:</th> <td> <form method=POST action=validate12.php>\n 
<label>Validate? <input type= text name=val  value= ".$info['ID'] . "></label><br>
<input type=submit name=Submit />";

  
 
 
 Print "</tr>"; 


 } 
 Print "</table>"; 
 }

print_r($stack);

//}

?>

<html>
<body>
Search for Details <form name="admin" action="search.php" method="post">
Id <input type="text" name="username"><br/>
<br/><input type="submit" value="Submit">
</form>
</body>
</html>