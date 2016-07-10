<?php


session_start();


if (isset($_SESSION['name'])) {
$uname=$_SESSION['name'];        
}

$uname=$_SESSION['name'];	

include("config.php");
include("connect.php");

$id=$_GET['ID'];

	$header=implode("",file('header.htm'));		
	$topnav_manu=implode("",file('menubar.htm'));
    $content=implode("",file('showp.htm'));
  $data=mysql_query("SELECT * FROM homes where Name = '".$id."'")or die(mysql_error());
 //echo $data;
 

 
 
	//$content=implode("",file('.htm'));	
	$footer=implode("",file('footer.htm'));				
	
echo $id;



	$trs=strpos($content,"<!--ACSTA-->");
	$tre=strpos($content,"<!--ACEND-->");
	$trsub=substr($content,$trs,$tre-$trs);
	
	$tr_temp="";
	$tr_final="";
	$j=1;
	while($row=mysql_fetch_array($data))
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


<?php
//Print "<a class=btn btn-info href=Logout.php>Logout</a>";
if (isset($_SESSION['name'])) {
Print "<a class=btn btn-info href=securedpage.php>";
echo $uname;
Print "</a>";
        
}


?>