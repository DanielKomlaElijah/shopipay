<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Shopipay Login Page</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <style type="text/css" media="screen">
        @import url("css/style.css");	
	</style>
    </head>
    <body>
        <div id="wrapper">
            <div>
                <div id="content" class="clearfix">
                    <form action="verifycustomer.php" method="post">
                        <table border="1" width="300" align="center" cellspacing="0" bordercolor="#FF9900">
            <tr>
                <td>
                    <div id="header">
                <h1><a href="index.php">Your Company Name and TagLine</a></h1>
            </div>
                </td>
            </tr>
            <tr height="60">
                <td align="left" bgcolor="#FF9900"><h1><font color="white">Login</font></h1></td>
            </tr>
            <tr>
                <td>
                    <table border="0" width="300" align="center" cellpadding="10" cellspacing="10">
                        <tr>
                            <td align="left">
                                <strong>User Name:</strong><br>
                                <input type="text" name="username" id="username" placeholder="Enter a Valid Username" required size="30"><br>
                            </td>
                        </tr><br/>
                        <tr>
                            <td align="left">
                                <strong>Password:</strong><br>
                                <input type="password" name="password" id="password" placeholder="Enter a Valid Password" required size="30"><br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="left"><strong>I forgot my <a href="#"><font color="#ff9900"> username</font></a> or <a href="#"><font color="#ff9900">password</font></a></strong></td>
                        </tr>
                        <tr>
                            <td align="left">
                                <ol class="forms">
                                <li class="buttons"><button type="submit" id="submit">Login</button></li>
                            </ol>
                            </td>
                        </tr>
                        <tr>
                            <td align="left"><strong>New to Shopipay? - <a href="register.php"><font color="#ff9900">Register</font></a></strong></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
                    
                </div>
                
            </div>
            
        </div>
    </body>
</html>
