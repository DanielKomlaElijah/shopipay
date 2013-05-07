<?php
include_once 'dbscripts/db.php';
//creating dbobject
$dbObj = new db();
//establish connection
$dbObj->db_connect();

/**
 * Description of LibertyReserve
 *
 * @author danny
 */
class LibertyReserve {
    private $amount;
    private $paymentmethod;
    private $username;
    private $orderid;
    private $date;
    
    public function getAmount() {
        return $this->amount;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
    }

    public function getPaymentmethod() {
        return $this->paymentmethod;
    }

    public function setPaymentmethod($paymentmethod) {
        $this->paymentmethod = $paymentmethod;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getOrderid() {
        return $this->orderid;
    }

    public function setOrderid($orderid) {
        $this->orderid = $orderid;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function buyLiberty() {
        $sql = mysql_query("insert into libertyreserve(amountPurchased, paymentMethod, userName, orderId, date)values('$this->amount', '$this->paymentmethod', '$this->username', '$this->orderid', '$this->date')") or die(mysql_error());
    }
}

?>
