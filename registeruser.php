<?php
include_once 'class/User.php';

if(isset($_POST['username'])) {
    $firstname = mysql_real_escape_string($_POST['firstname']);
    $lastname = mysql_real_escape_string($_POST['lastname']);
    $email = mysql_real_escape_string($_POST['email']);
    $username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
    
    //Creating new object
    $user = new User();
    $user->setFirstname($firstname);
    $user->setLastname($lastname);
    $user->setEmail($email);
    $user->setUsername($username);
    $user->setPassword($password);
    
    $user->RegisterUser();
}
?>
