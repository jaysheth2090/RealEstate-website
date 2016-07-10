<?php

/**
 * @author 
 * @copyright 2013
 */

include("config.php");
include("connect.php");


	$header=implode("",file('header.htm'));		
	$topnav_manu=implode("",file('menubar.htm'));
	//$content=implode("",file('.htm'));	
	$footer=implode("",file('footer.htm'));				
	$source=$header.$topnav_manu;
	
	echo $source;	

?>

<body>
<h8>
<div class="login">
 
  <h1><a href="blank1.php">Registeration Form: </a></h1>
 
  <br/>
  <br/>
  <form name= "info" id= "info" method= "get"  action="contactus_1.php">
    <table width= "527" border= "0" align="center" cellpadding= "5" cellspacing= "1" class="h8">

<tr>
<td ></td>
</tr>
</table>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td align="center"><form name="form1" method="get" action="contactus1.php">
<table >
<tr>
<td></td>
<td></td>
<td><input name="name" type="text" id="name" size="50" value="Enter the values"></td>
</tr>

<td >Subject</td>
<td >:</td>
<td ><input name="subject" type="text" id="subject" size="50"></td>
</tr>
<tr>
<td>Det	ail</td>
<td>:</td>
<td><textarea name="detail" cols="50" rows="4" id="detail"></textarea></td>
</tr>
<tr>
<td>Name</td>
<td>:</td>
<td><input name="name" type="text" id="name" size="50"></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><input name="customer_mail" type="text" id="customer_mail" size="50"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>
</tr>
</table>
</form>
</td>
</tr>




</table>
</div>
</body>


<?php

$source=$footer;
	
	echo $source;		




?>
