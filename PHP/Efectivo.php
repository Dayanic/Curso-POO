<?php
require_once('Payment.php');
class Efectivo extends Payment {
    public function __constructor($id) {
        parent::__constructor($id);
    }
}
?>