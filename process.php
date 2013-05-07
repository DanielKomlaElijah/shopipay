<?php
////////////////////////////////////////////
//         Form Processing                //
////////////////////////////////////////////

include_once 'class/LibertyReserve.php';

if(isset($_POST['amount'])) {
    $amount = mysql_real_escape_string($_POST['amount']);
    $pm = $_POST['select'];
    $username = 'Danny';
    $orderid = uniqid('lbr_');
    $date = date("Y-m-d");
    
    //creating new object
    $liberty = new LibertyReserve();
    $liberty->setAmount($amount);
    $liberty->setPaymentmethod($pm);
    $liberty->setUsername($username);
    $liberty->setOrderid($orderid);
    $liberty->setDate($date);
    $liberty->buyLiberty();
    
    $to = 'elijahdanielson@gmail.com';
    $sub = 'testing emails';
    $msg = "$username just bought $amount (USD) Liberty reserve.";
    $from = 'elijahdanielson@yahoo.com';
    
    mail($to, $sub, $msg, 'From:' . $from);
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
                	<li><a href="#"><?php echo $log; ?></a></li>
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
                	<div class="block" style="margin-right: 20px; padding: 6px;  border: #999 0px solid;" align="left"><?php echo "<h1>Your OrderId is $orderid</h1>"; ?></div>
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
                  <strong>email: </strong> <a href="mailto:elijahdanielson@gmail.com"><font color="orange">elijahdanielson@gmail.com</font></a></p>
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
                <li><a href="">about</a></li>
                <li>:</li>
                <li><a href="">products</a></li>
                <li>:</li>
                <li><a href="">services</a></li>
                <li>:</li>
                <li><a href="">news</a></li>
                <li>:</li>
                <li><a href="">contact</a></li>                    
            </ul>
            
            <div class="clear"></div>
            
        </div><!-- end Footer-Block -->
     
     </div><!-- end Footer -->
     
     
     
</body>
</html>
