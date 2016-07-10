







<?php


    $header=implode("",file('header.htm'));		
	$h1=implode("",file('h1.htm'));
    $topnav_manu=implode("",file('menubar.htm'));
	$content=implode("",file('form1.htm'));	
	$footer=implode("",file('footer.htm'));				
	
    
if (file_exists("connect.php")) {
include("connect.php");
}
else {
echo "Unable to Connect To the Database,Website not available ";
 return;
} 

mysql_select_db("qwerty", $setup_link);
$city=12345;
//echo $city;
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
{if(($_POST["prize"])!= "Click to Select Price")
  {$sql .= " AND Prize < '".$_POST['prize']."'";}
}
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
{if(($_POST["State"])!= "Click to Select State")
  {$sql .= " AND state like '%".$_POST['State']."%'";}
}
if(isset($_POST['type']))
{if(($_POST["type"])!= "Click to Select Type")
  {$sql .= " AND Que like '%".$_POST['type']."%'";}
}







$result=mysql_query($sql, $setup_link) or die ('Unable to run query:'.mysql_error());

echo $sql;





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
  
 Print "</table>"; 
 }

//print_r($stack);

//}






	$trs=strpos($content,"<!--ACSTA-->");
	$tre=strpos($content,"<!--ACEND-->");
	$trsub=substr($content,$trs,$tre-$trs);
	
	$tr_temp="";
	$tr_final="";
	$j=1;
	while($row=mysql_fetch_array($result))
	{	 
		$tr_temp=$trsub;	
		
        $tr_temp=str_replace("~~No~~",$j,$tr_temp);
        $tr_temp=str_replace("<!--ID-->",$row['Name'],$tr_temp);
			$tr_temp=str_replace("~~NAME~~",$row['Name'],$tr_temp);
        $tr_temp=str_replace("~~ADDRESS~~",$row['Address'],$tr_temp);
	
        $tr_temp=str_replace("~~PRICE~~",$row['Prize'],$tr_temp);
        $tr_temp=str_replace("~~TYPE~~",$row['Que'],$tr_temp);
		$tr_final.=$tr_temp;	
		$j++;		
	}	
	$content=str_replace($trsub,$tr_final,$content);
    $source=$content;
    
    


	
	echo $source;
?>

