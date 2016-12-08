<?php
class Moto extends Vehicule {

    private $roue;

    public function __construct($nom, $couleur = 'rouge', $roue = 4) {
        parent::__construct($nom, $couleur);
        $this->roue  = $roue;
    }

    public function __toString() {
        return sprintf("Moto[%s; \n\troue=%d]", parent::__toString(), $this->roue);
    }

    public function getRoue() {
        return $this->roue;
    }

    public function setRoue($roue) {
        $this->roue = $roue;
    }

}
