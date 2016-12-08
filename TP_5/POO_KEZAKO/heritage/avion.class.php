<?php
class Avion extends Vehicule {

    private $passager;
    private $helice;
    private $reacteur;

    public function __construct($nom, $couleur = 'rouge', $passager = 2, $helice = 1, $reacteur = 0) {
        parent::__construct($nom, $couleur);
        $this->passager = $passager;
        $this->helice = $helice;
        $this->reacteur = $reacteur;
    }

    public function __toString() {
        return sprintf("Avion[%s; \n\tpassager=%d; \n\thelice=%d; \n\treacteur=%d]", parent::__toString(), $this->passager, $this->helice, $this->reacteur);
    }

    public function getPassager() {
        return $this->passager;
    }

    public function setPassager($passager) {
        $this->passager = $passager;
    }

    public function getHelice() {
        return $this->helice;
    }

    public function setHelice($helice) {
        $this->helice = $helice;
    }

    public function getReacteur() {
        return $this->reacteur;
    }

    public function setReacteur($reacteur) {
        $this->reacteur = $reacteur;
    }

}
