<?php


session_start();


if (isset($_SESSION['username'])) {
        header('Location: add_validate.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
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
    <header>
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
<h8>
<form action="registerpro.php" method="post" onsubmit=" return ValidateForm(this);">
  
      <div class="container_25">
	  <table>
	  <tr>
	  <td>
      *Your First Name:
</td>
<td>

      <input name="fn" type="text" id="fname" />
</td>
</tr>
<tr>
<td>
      *Your Last Name:
</td>
<td>
      <input name="ln" type="text" id="lname"  />
</td>
</tr>
<tr>
     <td>
	  *Your Email Address:
      </td>
	  <td>
	  <input name="email" type="text" id="email" />
	  </td>
	  </tr>
	  <tr>
	  <td>
	  *Password:
	</td>
	<td>
	<input type="password" name="pwd" id="pwd">
      </td>
	  </tr>
	  <tr>
	  <td>
	   Phone:
      </td>
	  <td>
	  <input name="phone" type="text" id="phone"/>
      </td>
	  </tr>
	  <tr>
	  <td>
       *Address:
       </td>
	   <td>
	   <input name="add" type="text"  id="add"/>
     </td>
	 </tr>
	 <tr>
	 <td>
       City:
	   </td>
	   <td>
	    <input name="city" type="text" id="city" />
	   </td>
</tr>
<tr>
	   <td>
       State:
	</td>
	<td>
	<input name="state" type="text" id="state" />
       </td></tr>
	   <tr>
	   <td>
	   
	    Zip Code:
	   </td>
	   <td>
	   <input name="zip" type="text" id="zip" />
	   </td>
	   </tr>
	   <tr>
	   <td>
	   <input type="image" src="images/btn-submit.jpg" value="Send" alt="Send" /></font>
       </td>
	   </tr>
	   </table>
     </div>
    <div>





        
       
		<input name="Validation" type="hidden" id="Validation" value="
		Field=fname|Alias=First Name|Validate=BLANK|Length=255^
		Field=lname|Alias=Lirst Name|Validate=BLANK|Length=255^
		Field=email|Alias=Email addresss|Validate=EMAIL|Length=255^
		Field=pwd|Alias=password|Validate=BLANK|Length=255^
		Field=add|Alias=address|Validate=BLANK|Length=255^
		Field=phone|Alias=phone|Validate=NUMERIC|Length=10^
		Field=city|Alias=city|Validate=BLANK|Length=255^
		Field=state|Alias=state|Validate=BLANK|Length=255^
		Field=zip|Alias=zipcode|Validate=NUMERIC|Length=255"/>
		
</form>
</h8>






  <footer>
        <div class="main">
        	<div class="wrapper">
            	<div class="container_24">
                	<div class="wrapper">
                    	<div class="grid_24">
                        	<div class="wrapper">
                            	<span class="footer-text">real estate &copy; 2012  |  <a href="index-5.html">Privacy policy<span></span></a></span>
                                <nav class="fright">
                                	<ul class="footer-menu">
                                    	<li><a class="active" href="index.html">Home<span></span></a></li>
                                        <li><a href="index-1.html">About us<span></span></a></li>
                                        <li><a href="index-2.html">Partners<span></span></a></li>
                                        <li><a href="index-3.html">Services<span></span></a></li>
                                        <li><a href="index-4.html">Contacts<span></span></a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- {%FOOTER_LINK} -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>
