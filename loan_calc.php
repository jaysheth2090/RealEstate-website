<?php

	$header=implode("",file('header.htm'));		
	$topnav_manu=implode("",file('menubar.htm'));
	//$content=implode("",file('.htm'));	
	$footer=implode("",file('footer.htm'));				
	$source=$header.$topnav_manu;
	
	echo $source;


?>

<!DOCTYPE html>
<html lang="en">
<head><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://cdn.mlcalc.com/widget-api.js"></script>

    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/superfish.js" type="text/javascript"></script>
    <script src="js/jquery.hoverIntent.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script> 
    <script src="js/script.js" type="text/javascript"></script>   
    <script src="js/tms-0.3.js" type="text/javascript"></script>
    <script src="js/tms_presets.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="js/jquery.color.js" type="text/javascript"></script>    
	<!--[if lt IE 7]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>
<body id="page1">
	<!--==============================header=================================-->
  <!--   <header>
    	<div class="row-top">
        	<div class="main index">
            	<div class="container_24">
                	<div class="grid_24">
                    	<h1><a href="index.html">real estate</a></h1>
                        
                        <nav class="fright">
                            <ul class="menu">
                                <li class="active"><a href="index.html"><strong>home</strong><span></span></a></li>
                                <li><a href="index-1.html"><strong>About us</strong><span></span></a></li>
                                <li><a href="index-2.html"><strong>partners</strong><span></span></a></li>
                                <li><a href="index-3.html"><strong>Services</strong><span></span></a>
                                	<ul>
                                    	<li><a href="#">support</a></li>
                                        <li><a href="#">tips</a></li>
                                        <li class="last-item"><a href="#">consulting</a>
                                        	<ul>
                                            	<li><a href="#">on-line</a></li>
                                                <li class="last-item"><a href="#">publications</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="index-4.html"><strong>Contacts</strong><span></span></a></li>
                            </ul>
                        </nav>
                        <p class="headd">Seller Login</p>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
     -->      
	<!--==============================footer=================================-->
    <script type="text/javascript">
		$(window).load(function() {
			$('.slider')._TMS({
			duration:800,
				easing:'easeOutQuad',
				preset:'simpleFade',
				slideshow:7000,
				banners:false,
				pauseOnHover:true,
				pagination:true
			});
		});
    </script>





<div>


  <form action="http://www.mlcalc.com/" method="post" onsubmit="return mlcalcCalculate(this)" class="login" >
    <input type="hidden" name="wl" value="en">
  <div class="container_25">
 
  <h1><a href="">Loan Calculator</a></h1>
  <p>&nbsp;</p>
<p>&nbsp;</p>

    <form action="http://www.mlcalc.com/" method="post" onSubmit="return mlcalcCalculate(this)">
    <input type="hidden" name="wl" value="en">
<table>   
   
   <tr>
    
    <td>Loan amount:
    </td>
    
    <td><input type="text" name="la" value="150,000"> $</td>
    
    </tr>
<tr>
    
    <td>Loan term:
    </td>
    
    <td><input type="text" name="lt" value="15"> years</td>
    
    </tr>
<tr>
    
    <td>Interest rate:
    </td>
    
    <td><input type="text" name="ir" value="5.5"> %</td>
    
    </tr>
<tr>
    
    <td>First payment date (month):
    </td>
    
    <td><input type="text" name="sm" value="3"></td>
    
    </tr>
<tr>
    
    <td>First payment date (year):
    </td>
    
    <td><input type="text" name="sy" value="2010"</td>
    
    </tr>

   <tr><td>Amortization:</td></tr>
<table>
<tr>
    
    <td>Amortization:
    </td>
    
    <td><label><input type="radio" name="as" value="year" checked="checked"> show by year</label></td>
    <td><label><input type="radio" name="as" value="month"> show by month</label></td>
    <td><label><input type="radio" name="as" value="none"> don't show</label></td>    
    </tr>
    </table>

    <input type="submit" value="Calculate" ><br><br>
  </form>
     
   
   
   
   </table>
   
   </div>
  
  Powered by <a href="http://www.mlcalc.com/">Loan Calculator</a>

</body>
</html>

<?php
$source=$footer;
echo $source;
?>