<?php



	$link=mysql_connect ("localhost","root");
if(!$link)
{
	die("Could not connect to MySQL");
}
mysql_select_db("qwerty",$link) or die ("could not open db".mysql_error());

		
?>