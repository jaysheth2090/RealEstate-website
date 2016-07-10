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






?>

<?php

if(isset($_POST['Submit'])){

$fname=trim($_POST["fname"]);

$city=trim($_POST["city"]);
$state=trim($_POST["stateone"]);

$number=trim($_POST["ph_number"]);
$email=trim($_POST["email"]);
$address=trim($_POST["address"]);
$que=trim($_POST["queone"]);

$beds=trim($_POST["beds"]);
$sq_ft=trim($_POST["sq_ft"]);

if($fname == "" ) 
{
    $error= "error : You did not enter th First Name.";
    $code= "1" ;
}


elseif($number == "" ) {
$error= "error : Please enter number.";
$code= "2";
}


//check if the number field is numeric
elseif(is_numeric(trim($_POST["ph_number"])) == false ) {
$error= "error : Please enter numeric value.";
$code= "2";
}

elseif(strlen($number)<5) {
$error= "error : Number should be five digits.";
$code= "2";
}

elseif(is_numeric(trim($_POST["beds"])) == false ) {
$error= "error : Please enter numeric value.";
$code= "11";
}

elseif(is_numeric(trim($_POST["sq_ft"])) == false ) {
$error= "error : Please enter numeric value.";
$code= "12";
}

elseif(strlen($number)<5) {
$error= "error : Number should be five digits.";
$code= "2";
}



//check if email field is empty
elseif($email == "" ) {
$error= "error : You did not enter a email.";
$code= "3";
} //check for valid email
elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {
$error= 'error : You did not enter a valid email.';
$code= "3";
}



elseif($address == "" ) {
$error= "error : You did not enter the Address.";
$code= "7" ;
}

elseif($city == "" ) {
$error= "error : You did not enter the City.";
$code= "8" ;
}

elseif($state == "Click to Select State" ) {
$error= "error : You did not Select the state";
$code= "4" ;
}

elseif($que == "Click to Select Sequrity Question" ) {
$error= "error : You did not Select the Security Question";
$code= "9" ;
}



else{
    echo $que;
    /*$tbl_name="registration";
$sql="SELECT * FROM $tbl_name WHERE City like'%" . $city . "%' ";
$sql="SELECT * FROM $tbl_name WHERE (fname = '" . $fname . "')";
$result=mysql_query($sql, $setup_link) or die ('Unable to run query:'.mysql_error());
            
    
    
//echo $sql;    
    if($sql="")*/
{



	
		
					
			$fn=$_POST['fname'];
			
			$email=$_POST['email'];
			
			$phone=$_POST['ph_number'];
			$add=$_POST['address'];
			$city=$_POST['city'];
			$state=$_POST['stateone'];
			  
			$que=$_POST['queone'];
		$sq=$_POST['sq_ft'];
			
			$q="insert ignore into homes
				(Name,email,ph_no,Address,city,State,Que,beds,feet,seller)
				values('$fn','$email','$phone','$add','$city','$state','$que','$beds','$sq','$uname')";
			
			mysql_query($q,$link ) or die($q);	
			
		//	header("location:index.php");
}	

//else echo "registered";

//final code will execute here.
}

}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
<style type="text/css">
#mainframe {
	margin:auto;
	width:600px;
	
	padding:10px;
}

.error {
	border:2px solid #DB4A39 !Important;
}
.message {
	color: #DB4A39;
	font-weight:bold;
}
.message {
	color: #DB4A39;
	font-weight:bold;
}




.table input[type="Submit"]:hover {
	text-decoration: none;
}
.table input[type="Submit"]:active {
	background-image: none;
}
h1 {
	font-size: 160%;
	font-weight: normal;
	margin: 0 0 0.2em;
}
</style>


<h8>
<div id="mainframe">
  <h1>          Registeration Form: </h1>
  <h1><a href="blank1.php">Registeration</a></h1>
 
  <br/>
  <br/>
  <form name= "info" id= "info" method= "post" action= "" class="login1">
    <table width= "527" border= "0" align="center" cellpadding= "5" cellspacing= "1" class="h8">
      <?php if (isset($error)) { ?>
        <tr>
          <td colspan="2" align="center" ><?php echo "<p class='message'>" .$error. "</p>" ; ?></td>
        </tr>
        <?php } ?>
      <tr>
        <td width= "182" align="right" >First Name: </td>
        <td width= "238" ><input name= "fname" type= "text" value="<?php if(isset($fname)){echo $fname;} ?>" <?php if(isset($code) && $code == 1){echo "class=error" ;} ?> ></td>
      </tr>
      
      
      
      <tr>
        <td align="right">Number: </td>
        <td><input name= "ph_number" type= "text" id= "number" value="<?php if(isset($number)){echo $number;} ?>"<?php if(isset($code) && $code == 2){echo "class=error" ;}?> ></td>
      </tr>
      <tr>
      
      
      <tr>
        <td align="right">Beds </td>
        <td><input name= "beds" type= "text" id= "beds" value="<?php if(isset($beds)){echo $beds;} ?>"<?php if(isset($code) && $code == 11){echo "class=error" ;}?> ></td>
      </tr>
      <tr>
      <tr>
        <td align="right">Sq_ft: </td>
        <td><input name= "sq_ft" type= "text" id= "sq_ft" value="<?php if(isset($sq_ft)){echo $sq_ft;} ?>"<?php if(isset($code) && $code == 12){echo "class=error" ;}?> ></td>
      </tr>
      <tr>
        <td align="right"> Email: </td>
        <td><input name= "email" type= "text" id= "email" value="<?php if(isset($email)){echo $email; }?>"<?php if(isset($code) && $code == 3){echo "class=error" ;}?> ></td>
      </tr>
          
      
      <tr>
        <td width= "82" align="right" >Adddress: </td>
        <td width= "238" ><input name= "address" type= "text" value="<?php if(isset($address)){echo $address;} ?>" <?php if(isset($code) && $code == 7){echo "class=error" ;} ?> ></td>
      </tr>
      
      
      <tr>
        <td width= "82" align="right" >City: </td>
        <td width= "238" ><input name= "city" type= "text" value="<?php if(isset($city)){echo $city;} ?>" <?php if(isset($code) && $code == 8){echo "class=error" ;} ?> ></td>
      </tr>
      
      
      <tr>
        <td width= "82" align="right" >State: </td>
      <td width= "238" >
      
      
      
<div class="styled-select">
   <select width="238" name="stateone" value="<?php if(isset($stateone)){echo $stateone;} ?>" <?php if(isset($code) && $code == 4){echo "class=error" ;} ?> >
      <option>Click to Select State</option>
     <h8> <option value="Andhra Pradesh">Andhra Pradesh</option></h8>
      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
      <option value="Assam">Assam</option>
      <option value="Bihar">Bihar</option>
      <option value="Chhattisgarh">Chhattisgarh</option>
      <option value="Goa">Goa</option>
      <option value="Gujarat">Gujarat</option>
      <option value="Haryana">Haryana</option>
      <option value="Himachal Pradesh">Himachal Pradesh</option>
      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
      <option value="Jharkhand">Jharkhand</option>
      <option value="Karnataka">Karnataka</option>
      <option value="Kerala">Kerala</option>
      <option value="Madhya Pradesh">Madhya Pradesh</option>
      <option value="Maharashtra">Maharashtra</option>
      <option value="Manipur">Manipur</option>
      <option value="Meghalaya">Meghalaya</option>
      <option value="Mizoram">Mizoram</option>
      <option value="Nagaland">Nagaland</option>
      <option value="Punjab">Punjab</option>
      <option value="Rajasthan">Rajasthan</option>
      <option value="Sikkim">Sikkim</option>
      <option value="Tamil Nadu">Tamil Nadu</option>
      <option value="Tripura">Tripura</option>
       <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
         <option value="West Bengal">West Bengal</option>
   </select>





</div></td></tr>



<tr>
        <td width= "182" align="right" >Category :   </td>
      
<td>
<div class="styled-select">
   <select name="queone" value="<?php if(isset($queone)){echo $queone;} ?>" <?php if(isset($code) && $code == 9){echo "class=error" ;} ?> >
      <option>Click to Select Category</option>
      <option value="Commercial">Commercial</option>
      <option value="Residential">Residential</option>
      
   </select>
      </td></tr>
        
      </tr>
      
      
      <tr>
        <td>&nbsp;</td>
        <td><input type= "submit" name= "Submit" value= "Submit" /></td>
      </tr>
    </table>
  </form>
</div>










</body>
</html>


<html>

<a href=securedpage.php>Back</a> |
 <a href=see_existing.php>See existing Listings</a>;
<p><a href=logout.php>Logout</a></p>
</html>


<?php
$source=$footer;
echo $source;
?>

