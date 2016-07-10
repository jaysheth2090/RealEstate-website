<?php

	$header=implode("",file('header.htm'));		
	$topnav_manu=implode("",file('menubar.htm'));
	//$content=implode("",file('.htm'));	
	$footer=implode("",file('footer.htm'));				
	$source=$header.$topnav_manu;
	
	echo $source;		



session_start();

include('config.inc');

echo $_POST['que'];
echo $_POST['ans'];
$login = mysql_query("SELECT * FROM registration WHERE (Que = '" . mysql_real_escape_string($_POST['que']) . "') and (ans = '" . ($_POST['ans']) . "')");

if (mysql_num_rows($login) == 1) {
        $_SESSION['pass'] = $_POST['que'];
        $_SESSION['id'] = $_POST['id'];
      header('Location: n_pass.php');
       echo $_SESSION['pass'];
echo $_SESSION['id'];
}
else {
    echo "Wrong Username ";
      
        header('Location: seller_login_form.php'); 
        

}

?>



<?php
$source=$footer;
echo $source;
?>

