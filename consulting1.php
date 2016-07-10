<?php

include("config.php");
include("connect.php");

$sub= $_POST['subject'];
$details=$_POST['detail'];
$name=$_POST['name'];
$mail=$_POST['customer_mail'];
$sql =" Insert into consultation (Subject,Details,Name,email) values ('$sub','$details','$name','$mail') ";
		$result=mysql_query($sql, $setup_link) or die ('Unable to run query:'.mysql_error());
		if($result)
		{
		header('location:index.php');
		}

?>