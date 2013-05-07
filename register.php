<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Get started with Shopipay</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <style type="text/css" media="screen">
        @import url("css/style.css");	
	</style>
    </head>
    <body>
        <div id="wrapper">
            <div>
                <div id="content" class="clearfix">
                    <form action="registeruser.php" method="post">
                        <table border="1" width="300" align="center" cellspacing="0" bordercolor="#FF9900">
            <tr>
                <td>
                    <div id="header">
                <h1><a href="index.php">Your Company Name and TagLine</a></h1>
            </div>
                </td>
            </tr>
            <tr height="60">
                <td align="left" bgcolor="#FF9900"><h1><font color="white">Create your personal account</font></h1></td>
            </tr>
            <tr>
                <td>
                    <table border="0" width="300" align="center" cellpadding="10" cellspacing="10">
                        <tr>
                            <td align="left">
                                <strong>First Name:</strong><br>
                                <input type="text" name="firstname" id="firstname" placeholder="Enter First Name" required size="30"><br>
                            </td>
                        </tr><br/>
                        <tr>
                            <td align="left">
                                <strong>Last Name:</strong><br>
                                <input type="text" name="lastname" id="lastname" placeholder="Enter Last Name" required size="30"><br>
                            </td>
                        </tr>
                        <tr>
                            <td align="left">
                                <strong>Email Address:</strong><br>
                                <input type="email" name="email" id="email" placeholder="Enter Email Address" required size="30"><br>
                            </td>
                        </tr>
                        <tr>
                            <td align="left">
                                <strong>User Name:</strong><br>
                                <input type="text" name="username" id="username" placeholder="Enter a Valid Username" required size="30"><br>
                            </td>
                        </tr>
                        <tr>
                            <td align="left">
                                <strong>Password:</strong><br>
                                <input type="password" name="password" id="password" placeholder="Enter a Valid Password" required size="30"><br>
                            </td>
                        </tr>
                        <tr>
                            <td align="left">
                                <ol class="forms">
                                <li class="buttons"><button type="submit" id="submit">Submit</button></li>
                            </ol>
                            </td>
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
