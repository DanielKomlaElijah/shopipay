<?php
include_once 'class/User.php';

if(isset($_POST['username'])) {
    $uname = mysql_real_escape_string($_POST['username']);
    $upass = md5(mysql_real_escape_string($_POST['password']));
    
    $user = new User();
    $user->setUsername($uname);
    $user->setPassword($upass);
    
    $user->Login();
}
?>
