<?php
require_once('Car.php');
class UberVan extends Car {
    public $typeCarAccepted;
    public $seatsMaterial;
    
    public function __constructor($license, $driver, $typeCarAccepted, $seatsMaterial) {
        parent::__constructor($license, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;
    }

    public function setPassenger($passenger) {
        if ($passenger == 6) {
            $this->passenger = $passenger;
        } else {
            echo "Necesitas asignar 6 pasajeros";
        }
    }
}
?>