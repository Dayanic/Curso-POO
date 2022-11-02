<?php
require_once('Payment.php');
class PayPal extends Payment {
    public function __constructor($id) {
        parent::__constructor($id);
    }
}
?>