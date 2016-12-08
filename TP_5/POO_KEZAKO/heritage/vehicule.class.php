<?php
class Vehicule {

    protected $nom;
    protected $couleur;

    public function __construct($nom, $couleur = 'rouge') {
        $this->nom     = $nom;
        $this->couleur = $couleur;
    }
    
    public function __toString() {
        return sprintf("Vehicule[\n\tnom=%s; \n\tcouleur=%s]", $this->nom, $this->couleur);
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getCouleur() {
        return $this->couleur;
    }

    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

}
