<?php
require_once('Payment.php');
class Tarjeta extends Payment {
    public function __constructor($id) {
        parent::__constructor($id);
    }
}
?>