<?php
	



	$header=implode("",file('header.htm'));		
	$topnav_manu=implode("",file('menubar.htm'));
	//$content=implode("",file('.htm'));	
	$footer=implode("",file('footer.htm'));				
	$source=$header.$topnav_manu;
	
	echo $source;	







include("config.php");
include("connect.php");
session_start();


if (isset($_SESSION['username'])) {
        header('Location: add_validate.php');
}

?>


<?php

if(isset($_POST['Submit'])){

$fname=trim($_POST["fname"]);
$lname=trim($_POST["lname"]);
$city=trim($_POST["city"]);
$state=trim($_POST["stateone"]);
$pass=trim($_POST["pass"]);
$number=trim($_POST["ph_number"]);
$email=trim($_POST["email"]);
$address=trim($_POST["address"]);
$que=trim($_POST["queone"]);
$ans=trim($_POST["answerone"]);


if($fname == "" ) 
{
    $error= "Error : You did not enter the First Name.";
    $code= "1" ;
}

elseif($lname == "" ) {
$error= "Error : You did not enter th Last Name.";
$code= "5" ;
}

elseif($number == "" ) {
$error= "Error : Please enter number.";
$code= "2";
}


//check if the number field is numeric
elseif(is_numeric(trim($_POST["ph_number"])) == false ) {
$error= "Error : Please enter numeric value.";
$code= "2";
}

elseif(strlen($number)<10) {
$error= "Error : Number should be ten digits.";
$code= "2";
}

//check if email field is empty
elseif($email == "" ) {
$error= "Error : You did not enter a email.";
$code= "3";
} //check for valid email
elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {
$error= 'Error : You did not enter a valid email.';
$code= "3";
}

elseif($pass == "" ) {
$error= "error : You did not enter the Password.";
$code= "6" ;
}

elseif($address == "" ) {
$error= "Error : You did not enter the Address.";
$code= "7" ;
}

elseif($city == "" ) {
$error= "Error : You did not enter the City.";
$code= "8" ;
}

elseif($state == "Click to Select State" ) {
$error= "Error : You did not Select the state";
$code= "4" ;
}

elseif($que == "Click to Select Sequrity Question" ) {
$error= "Error : You did not Select the Security Question";
$code= "9" ;
}

elseif($ans == "" ) {
$error= "Error : You did not the Answer to the Security Question";
$code= "10" ;
}


else{
    echo $que;
    $tbl_name="registration";

$sql="SELECT email FROM $tbl_name WHERE (email = '" . $email . "')";
$result=mysql_query($sql, $setup_link) or die ('Unable to run query:'.mysql_error());
            
 
 
 
  

    
//echo $sql;    
    //if($sql="")
{



	
		
					
			$fn=$_POST['fname'];
			$ln=$_POST['lname'];
			$email=$_POST['email'];
			$pwd=$_POST['pass'];
			$phone=$_POST['ph_number'];
			$add=$_POST['address'];
			$city=$_POST['city'];
			$state=$_POST['stateone'];
			  
			$que=$_POST['queone'];
		$ans=$_POST['answerone'];
        $val="no";
			
			$q="insert into registration
				(fname,lname,email,password,ph_no,address,city,state,Que,ans,validated)
				values('$fn','$ln','$email','$pwd','$phone','$add','$city','$state','$que','$ans','$val')";
			
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
</head>
<body>
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
        <td width= "82" align="right" >Last Name: </td>
        <td width= "238" ><input name= "lname" type= "text" value="<?php if(isset($lname)){echo $lname;} ?>" <?php if(isset($code) && $code == 5){echo "class=error" ;} ?> ></td>
      </tr>
      
      <tr>
        <td align="right">Number: </td>
        <td><input name= "ph_number" type= "text" id= "number" value="<?php if(isset($number)){echo $number;} ?>"<?php if(isset($code) && $code == 2){echo "class=error" ;}?> ></td>
      </tr>
      <tr>
        <td align="right"> Email: </td>
        <td><input name= "email" type= "text" id= "email" value="<?php if(isset($email)){echo $email; }?>"<?php if(isset($code) && $code == 3){echo "class=error" ;}?> ></td>
      </tr>
      
      <tr>
        <td width= "82" align="right" >Password: </td>
        <td width= "238" ><input name= "pass" type= "password" value="<?php if(isset($pass)){echo $pass;} ?>" <?php if(isset($code) && $code == 6){echo "class=error" ;} ?> ></td>
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
        <td width= "182" align="right" >Security Question :   </td>
      
<td>
<div class="styled-select">
   <select name="queone" value="<?php if(isset($queone)){echo $queone;} ?>" <?php if(isset($code) && $code == 9){echo "class=error" ;} ?> >
      <option>Click to Select Sequrity Question</option>
      <option value="What was the name of your elementary / primary school?">What was the name of your elementary / primary school?</option>
      <option value="What is the name of the company of your first job?">What is the name of the company of your first job?</option>
      <option value="What was your favorite place to visit as a child?">What was your favorite place to visit as a child?</option>
      <option value="What time of the day were you born?">What time of the day were you born?</option>
      <option value="What are the last 5 digits of your credit card?">What are the last 5 digits of your credit card?</option>
      <option value="What is your current car registration number?">What is your current car registration number?</option>
      <option value="What is your mother's middle name?">What is your mother's middle name?</option>
      <option value="What is your preferred musical genre? ">What is your preferred musical genre? </option>

   </select>
      </td></tr>
        
      </tr>
      
      <tr>
        <td width= "82" align="right" >Answer </td>
        <td width= "238" ><input name= "answerone" type= "text" value="<?php if(isset($answerone)){echo $answerone;} ?>" <?php if(isset($code) && $code == 10){echo "class=error" ;} ?> ></td>
      </tr>
      
      <tr>
        <td allign="right">Image</td>
        <td><input type= "file" name= "img" /></td>
      </tr>
      
      
      
      <tr>
        <td>&nbsp;</td>
        <td><input type= "submit" name= "Submit" value= "Submit" /></td>
      </tr>
    </table>
  </form>
</div></h8>
</body>
</html>




</body>
</html>




<?php
$source=$footer;
echo $source;
?>

