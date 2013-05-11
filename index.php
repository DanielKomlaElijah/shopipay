<?php
//////////////////////////////////////////
//         Session Start                //
//////////////////////////////////////////
session_start();
if(isset($_SESSION['logged'])) {
   $mm = "<h1>Hi,"." ".$_SESSION['username'].' '. '<a href="logout.php"><font color="#FF4E00">'.'(Logout)'.'</font></a></h1>';
   $log = '<a href="logout.php">'.'Logout'.'</a>';
}else{
    $mm = "<h1>Welcome!"." "."<a href='customerlogin.php'><font color='#FF4E00'>sign in</font></a>"." ". "or"." ". "<a href='register.php'><font color='#FF4E00'>register</font></a></h1>";
    $log = '<a href="customerlogin.php">'.'Login'.'</a>';
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
	<title>Shopipay Limited | Liberty Reserve</title>
	<meta http-equiv="Content-Language" content="en-us" />
	
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="MSSmartTagsPreventParsing" content="true" />
	
	<meta name="description" content="" />
    
	<meta name="keywords" content="" />
    
    <style type="text/css" media="screen">
        @import url("css/style.css");	
	</style>
    
    <!--[if lt IE 7]>
       <script type="text/javascript" src="js/supersleight-min.js"></script>
       <style type="text/css" media="screen">
       @import url("ie6.css");
           
    	</style>
        
	<![endif]--> 
    
    <script src="js/jquery-1.2.6.pack.js" type="text/javascript"></script>
    <script src="js/jquery.flow.1.1.min.js" type="text/javascript"></script>
 
    <script type="text/javascript">
    
	$(function() {
		$("body").addClass("has-script");
        $("#controller").jFlow({
            slides: "#slides",
            width: "460px",
            height: "244px"
        });
    });
	
    </script>
    <script src="js/check.js" type="text/javascript"></script>

</head>

<body class="home">

	<div id="wrapper">
    
    	
    	<div id="container">
        
                  
        	
            
            <!-- header -->
            <div id="header">
            
                <h1><a href="index.php">Your Company Name and TagLine</a></h1>
                
                <ul class="contact">
                  <li><a class="home" href="index.php">home</a></li>
                  <li><a class="email" href="mailto:elijahdanielson@gmail.com">elijahdanielson@gmail.com</a></li>                  
              	</ul>
                
            	<ul id="main-menu">
                	<li><a  id="current" href="index.php">Home</a></li>                
                	<li><a href="#">Product</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
            	</ul>
               
                
   	  	  	</div>
            
            <div id="mainbar">
            
            	<div id="flow">
                
                	<div id="controller" class="hidden">  
                            <span class="jFlowControl">No 1</span>  
                            <span class="jFlowControl">No 2</span>  
                            <span class="jFlowControl">No 3</span> 
                            <span class="jFlowControl">No 4</span> 
                    </div>  
                    
                    <div class="prevNext">  
                        	<img title="Previous" src="images/previous1.png" alt="Previous" class="jFlowPrev" />  
                    </div>  
                    
                    <div id="slides">  
                        <div><img alt="shopipay" width="435px" height="188px" src="images/shopipay.png" /></div>
                        	<div>
                            	<a href="http://themeforest.net/item/green-biz-business-template/23084"><img alt="Green Biz" width="435px" height="188px" src="images/greenbiz.jpg" /></a>
                           	</div> 
                             
                        	<div>
                            	<img alt="theme forest" width="435px" height="188px" src="images/theme.jpg" />	
                           	</div>  
                           	<div>
                            
                            	<img alt="PSD tuts" width="435px" height="188px" src="images/psdtuts.jpg" />	
                            </div> 
                             
                            <div>
                            	<img alt="Net Tuts" width="435px" height="188px" src="images/nettuts.jpg" />		
                            </div>  
                            
                          
                    </div>  <!-- End of Slides -->
                    
                   	<div class="prevNext">  
                        	<img title="Next" src="images/next1.png" alt="Next" class="jFlowNext" />  
                   	</div>     
                    	
                </div><!-- End of Slider -->
                
            	
                <ul id="description">
                
                    <li>We ar the expertise</li>
                    <li>We Help your business</li>
                    <li>We Generate Revenu</li>
                
                </ul>
                
            </div><!-- end mainbar -->
   	    	<!-- end header -->
            
                      
            <div id="content" class="clearfix">
          
                <div id="main">
                	<div class="block" style="margin-right: 20px; padding: 6px;  border: #999 0px solid;" align="left"><?php echo $mm; ?></div>
                    <div class="block">
                        <h2><a href="">LIBERTY RESERVE</a></h2>
                            <form action="process.php" method="post">
<!--                                <ol class="forms">-->
        <fieldset style="border-color: #FF4E00;">
            <legend><font color="#FF4E00">Buy Liberty Reserve</font></legend>
        <table border="0" cellspacing="10" cellpadding="10" >
            <tr>
                <td align="left"><strong>You Need (USD)</strong></td>
                <td align="left">
                    <input type="text" required="required" name="amount" id="amount" size="10" Placeholder="Enter Amount">
                </td>
           
            </tr>
            <tr>
                <td align="left"><strong>Payment Method</strong></td>
                <td align="left">
                    <select id="select" name="select" onchange="chkComm()">
                        <option value="#">Select Payment Method</option>
                        <option value="mobilemoney">MTN Mobile Money</option>
                        <option value="bank">Direct Cash Deposit</option>
                    </select>
                </td>
            </tr>
            <tr id="hidethis" style="display:none">
                <td align="left"><strong>Instructions</strong></td>
                <td align="left"><textarea name="instructions" id="instructions" style="background-color: #FFFFFF; border: none;" cols="30" rows="10" disabled></textarea></td>
            </tr>
            <tr>
                <td align="left"><strong>The Commision is</strong></td>
                <td align="left"><input type="text" name="com" id="com" disabled style="background-color: #FFFFFF; border: none;"></td>
            </tr>
            <tr>
                <td align="left"><strong>You must Pay</strong></td>
                <td align="left"><input type="text" name="payy" id="payy" disabled style="background-color: #FFFFFF; border: none;"></td>
            </tr>
            <tr align="left">
                <td>
                        <ol class="forms">
                                <li class="buttons"><button type="submit" id="submit">Buy Liberty</button></li>
                            </ol>
                </td>
            </tr>
             
        </table>
       </fieldset>
          </form>   
                  	</div>
                    
                    <div class="block last"><!-- last to clear the margin -->
                    	<h2><a href="">Our Services</a></h2>
                        <p>Nulla non orci sed eros varius pretium. Morbi fringilla justo quis dui. Nulla malesuada, lorem sit amet dictum congue, dolor nisi hendrerit diam, pretium pulvinar mauris odio ac mi. Morbi vestibulum libero eget urna. </p>
                        <ul class="left">
                            <li><a href="">Nulla placerat</a></li>
                            <li><a href="">Vestibulum ante</a> </li>
                            <li><a href="">Aenean cursus,</a></li>
                            <li><a href="">Curabitur malesuada</a></li>
                            <li><a href="">Malesuada imperdiet</a></li>
                        </ul>
                        
                        <ul class="left last"><!-- last to clear the margin -->
                            <li><a href="">Nulla placerat</a></li>
                            <li><a href="">Vestibulum ante</a> </li>
                            <li><a href="">Aenean cursus,</a></li>
                            <li><a href="">Curabitur malesuada</a></li>
                            <li><a href="">Malesuada imperdiet </a></li>
                        </ul>
                        <div class="clear"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ligula. Vestibulum a neque. Fusce sed metus. </p>
                   </div>
              
				</div><!-- End Main -->
                
                <div id="sidebar">
                
               
                <div class="block">
                <h2>Testimonials</h2>
                
                	<p>There's a voice that keeps on calling me. Down the road, that's where I'll always be. Every stop I make, I make a new friend. Can't stay for long.</p>
                    <p>- Jon Something</p>
                </div>
                   
                <div class="block">    
                <h2>Contact us</h2>
                <p>Ut eget nibh vehicula turpis aliquet congue. Fusce arcu dolor, consectetur eu, feugiat nec, hendrerit ut, lectus. Suspendisse est sapien, laoreet ac:</p>
                  <p><strong>tel: </strong> 454 254 7548<br />
                  <strong>fax: </strong> 545 542 4152<br />
                  <strong>email: </strong> <a href="mailto:elijahdanielson@gmail.com"><font color="#FF4E00">elijahdanielson@gmail.com</font></a></p>
                </div>
                    
                </div><!-- end sidebar -->  
                
                
            
            </div><!-- end content -->

    	  
          
    	</div><!-- end container -->
                    
	</div><!-- end wrapper -->
    
	<div id="footer">
     
     	<div class="footer-block">
            <p><a title="" href="">&copy; Shopipay Limited | Liberty Reserve - 2013</a></p>
            <ul>
               	<li><a href="">home</a></li>
                <li>:</li>
                <li><a href="">product</a></li>
                <li>:</li>
                <li><a href="">about us</a></li>
                <li>:</li>
                <li><a href="">contact us</a></li>                   
            </ul>
            
            <div class="clear"></div>
            
        </div><!-- end Footer-Block -->
     
     </div><!-- end Footer -->
     
     
     
</body>
</html>
