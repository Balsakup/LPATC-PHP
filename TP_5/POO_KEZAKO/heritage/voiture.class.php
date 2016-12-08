<?php
class Voiture extends Vehicule {

    private $siege;
    private $roue;

    public function __construct($nom, $couleur = 'rouge', $siege = 5, $roue = 4) {
        parent::__construct($nom, $couleur);
        $this->siege = $siege;
        $this->roue  = $roue;
    }

    public function __toString() {
        return sprintf("Voiture[%s; \n\tsiege=%d; \n\troue=%d]", parent::__toString(), $this->siege, $this->roue);
    }

    public function getSiege() {
        return $this->siege;
    }

    public function setSiege($siege) {
        $this->siege = $siege;
    }

    public function getRoue() {
        return $this->roue;
    }

    public function setRoue($roue) {
        $this->roue = $roue;
    }

}
