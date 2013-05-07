<?php
error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of db
 *
 * @author danny
 */
class db {
    //put your code here
    protected $hostname = "localhost"; //it could also be 127.0.0.1
    protected $database = "shopipay";
    protected $user = "root";
    protected $password = "";
    protected $connection;

    public function db_connect() {
        $this->connection = mysql_pconnect($this->hostname, $this->user, $this->password) or die("Couldn't Connect to Server");
        mysql_select_db($this->database, $this->connection);
    }

}

?>
