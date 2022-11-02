<?php
require_once('Account.php');
class User extends Account {
    public function __constructor($name, $document) {
        parent::__constructor($name, $document);
    }
}
?>