<?php	


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

    $header=implode("",file('header.htm'));		
	$topnav_manu=implode("",file('menubar.htm'));
	$content=implode("",file('val.htm'));	
	$footer=implode("",file('footer.htm'));				
	
	if (file_exists("connect.php")) {
include("connect.php");
}
else {
echo "Unable to Connect To the Database,Website not available ";
 return;
} 

mysql_select_db("qwerty", $setup_link);
		
	$trs=strpos($content,"<!--ACSTA-->");
	$tre=strpos($content,"<!--ACEND-->");
	$trsub=substr($content,$trs,$tre-$trs);
	
	$query="SELECT * FROM registration WHERE validated= 'no'";
	$result=mysql_query($query) or die("problem in query".mysql_error());
	$tr_temp="";
	$tr_final="";
	$j=1;
	while($row=mysql_fetch_array($result))
	{	
		$tr_temp=$trsub;	
		$tr_temp=str_replace("~~No~~",$j,$tr_temp);
		$tr_temp=str_replace("~~NAME~~",$row['fname'],$tr_temp);
		
		$tr_final.=$tr_temp;	
		$j++;		
	}	
	$content=str_replace($trsub,$tr_final,$content);
    
/*$query="select * from tb_title_meta where ID=1";
	$result=mysql_query($query) or die(" Data is not select".mysql_error());
	$row=mysql_fetch_array($result);		
	
	/****************************************** replace title and mera information  *****************************************************/
/*	$source=str_replace("~~NAME~~",$row['title_name'],$source);
	$source=str_replace("~~DESCRIPTION~~",$row['description'],$source);
	$source=str_replace("~~KEYWORDS~~",$row['keywords'],$source);
	
	/******************************************************* Enable Active class ********************************************************/
//	$source=str_replace("~~home~~",active,$source);*/
	$source=$header.$topnav_manu.$content.$footer;
    
    


	
	echo $source;		
?>

<?php
$source=$footer;
echo $source;
?>
