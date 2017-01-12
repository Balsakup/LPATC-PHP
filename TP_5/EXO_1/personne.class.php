<?php
class Personne {

    private $nom;
    private $prenom;
    private $adresse;
    private $nationnalite;

    public function __construct($nom, $prenom, $adresse, $nationnalite) {
        $this->nom          = $nom;
        $this->prenom       = $prenom;
        $this->adresse      = $adresse;
        $this->nationnalite = $nationnalite;
    }

    public function __toString() {
        return "Personne[nom: $this->nom; prenom: $this->prenom; adresse: $this->adresse; nationnalite: $this->nationnalite]";
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function setNationnalite($nationnalite) {
        $this->nationnalite = $nationnalite;
    }

    public function getNationnalite() {
        return $this->nationnalite;
    }

    public function __destruct() {
        $this->nom          = null;
        $this->prenom       = null;
        $this->adresse      = null;
        $this->nationnalite = null;
    }

}
