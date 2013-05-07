<?php
include_once 'dbscripts/db.php';
//creating dbobject
$dbObj = new db();
//establish connection
$dbObj->db_connect();

/**
 * Description of User
 *
 * @author danny
 */
class User {
    private $firstname;
    private $lastname;
    private $email;
    private $username;
    private $password;
    
    public function getFirstname() {
        return $this->firstname;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
    
    function RegisterUser() {
        
        //see if username matches another username in the system
        $sql = mysql_query("select id from customer where username='$this->username' limit 1");
        $usermatch = mysql_num_rows($sql);
        if($usermatch > 0) {
            echo 'Sorry, Username exits. Please <a href="register.php">Click Here</a> and enter a different username.';
            exit();
        }
        
        //add user into the database now
        $sql2 = mysql_query("insert into customer(firstName, lastName, emailAddress, userName, password)
                         values ('$this->firstname', '$this->lastname', '$this->email', '$this->username', '$this->password')") or die(mysql_error());
        
        $sql3 = mysql_query("select * from customer where userName='$this->username' AND password='$this->password' limit 1");
        
        if(mysql_num_rows($sql3) == 1) {
            $row = mysql_fetch_array($sql3);
            session_start();
            $_SESSION['username'] = $row['userName'];
            $_SESSION['email'] = $row['emailAddress'];
            $_SESSION['logged'] = TRUE;
            header("Location: index.php");
            exit;
        }else{
             header("Location: register.php");
            exit;
        }
    }
    
    function Login() {
        $sql = mysql_query("select * from customer where userName='$this->username' AND password='$this->password' limit 1");
    
        if(mysql_num_rows($sql) == 1) {
            $row = mysql_fetch_array($sql);
            session_start();
            $_SESSION['username'] = $row['userName'];
            $_SESSION['email'] = $row['emailAddress'];
            $_SESSION['logged'] = TRUE;
            header("Location: index.php");
            exit;
        }else{
             header("Location: register.php");
            exit;
        }
    }


}

?>
