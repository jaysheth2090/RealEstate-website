<?php
session_start();

include('config.inc');

echo $_POST['username'];
echo md5($_POST['password']);



$login = mysql_query("SELECT * FROM admin WHERE (uname = '" . mysql_real_escape_string($_POST['username']) . "') and (pass = '" . mysql_real_escape_string(($_POST['password'])) . "')");

if (mysql_num_rows($login) == 1) {
        $_SESSION['username'] = $_POST['username'];
        header('Location: admin_home.php');
}
else {
    echo "Wrong Username ";
      
   header('Location: Login-form.php'); 
        

}

?>
