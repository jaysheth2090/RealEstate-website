<?php
if(isset($_POST['Submit'])){

$name=trim($_POST["name"]);
$number=trim($_POST["number"]);
$email=trim($_POST["email"]);

if($name == "" ) {
$error= "error : You did not enter a name.";
$code= "1" ;
}

elseif($number == "" ) {
$error= "error : Please enter number.";
$code= "2";
}

//check if the number field is numeric
elseif(is_numeric(trim($_POST["number"])) == false ) {
$error= "error : Please enter numeric value.";
$code= "2";
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

else{
echo "Success";
//final code will execute here.
}

}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>

</head>
<body>
<div id="mainframe">
  <h1>Server Side Form Validation Demo</h1>
  <p>More tutorials <a href="http://www.w3schools.in/">http://www.w3schools.in/</a></p>
  <br>
  <form name= "info" id= "info" method= "post" action= "" >
    <table width= "327" border= "0" align="center" cellpadding= "5" cellspacing= "1" class="table">
      <?php if (isset($error)) { ?>
        <tr>
          <td colspan="2" align="center" ><?php echo "<p class='message'>" .$error. "</p>" ; ?></td>
        </tr>
        <?php } ?>
      <tr>
        <td width= "82" align="right" >Name: </td>
        <td width= "238" ><input name= "name" type= "text" value="<?php if(isset($name)){echo $name;} ?>" <?php if(isset($code) && $code == 1){echo "class=error" ;} ?> ></td>
      </tr>
      <tr>
        <td align="right">Number: </td>
        <td><input name= "number" type= "text" id= "number" value="<?php if(isset($number)){echo $number;} ?>"<?php if(isset($code) && $code == 2){echo "class=error" ;}?> ></td>
      </tr>
      <tr>
        <td align="right"> Email: </td>
        <td><input name= "email" type= "text" id= "email" value="<?php if(isset($email)){echo $email; }?>"<?php if(isset($code) && $code == 3){echo "class=error" ;}?> ></td>
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