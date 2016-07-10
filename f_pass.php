


<?php

	



	$header=implode("",file('header.htm'));		
	$topnav_manu=implode("",file('menubar.htm'));
	//$content=implode("",file('.htm'));	
	$footer=implode("",file('footer.htm'));				
	$source=$header.$topnav_manu;
	
	echo $source;		
?>




<?php


session_start();

$_SESSION['pass']="";

?>




<div>



   <form method="post" action="pass_validate.php" class="login">
    
    <h1><a href="index.html">Forgot Password</a></h1>
    <br/><br/>
    <p>
      <label for="login">Email-ID</label>
      <input type="text" name="id"  value="Enter Your Email-ID">
    </p>
    <p>
      
      <label for="login1">Sequrity Question</label>
<select name="que" value="Sequrity Question">
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

    </p>

    <p>
      <label for="password">Answer</label>
      <input type="text" name="ans" value="Example">
    </p>

    <p class="login-submit">
      <button type="submit" class="login-button">Login<br/></button>
    </p>
 </form>
</div>
    
</body>
</html>




<?php
$source=$footer;
echo $source;
?>



