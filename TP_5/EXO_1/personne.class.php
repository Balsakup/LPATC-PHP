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

    public function toString() {
        return "Personne[nom: $this->nom; prenom: $this->prenom; adresse: $this->adresse; nationnalite: $this->nationnalite]";
    }

    public function __destruct() {
        $this->nom          = null;
        $this->prenom       = null;
        $this->adresse      = null;
        $this->nationnalite = null;
    }

}
