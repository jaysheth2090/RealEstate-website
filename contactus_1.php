<?php

include("config.php");
include("connect.php");

$sub= $_GET['subject'];
$details=$_GET['detail'];
$name=$_GET['name'];
$mail=$_GET['customer_mail'];
$sql =" Insert into contact (Subject,Details,Name,email) values ('$sub','$details','$name','$mail') ";
		$result=mysql_query($sql, $setup_link) or die ('Unable to run query:'.mysql_error());
		if($result)
		{
		//header('location:index.php');
		}

?>