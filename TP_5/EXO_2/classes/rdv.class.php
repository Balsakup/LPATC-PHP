<?php
class RDV {

    private $date;
    private $heure;
    private $lieu;
    private $sujet;

    public function __construct($date, $heure, $lieu, $sujet) {
        $this->date  = $date;
        $this->heure = $heure;
        $this->lieu  = $lieu;
        $this->sujet = $sujet;
    }

    public function modifier($attribut, $valeur) {
        if (in_array($attribut, [ 'date', 'heure', 'lieu', 'sujet' ])) {
            return $this->$attribut = $valeur;
        }

        return null;
    }

    public function afficher() {
        return "========== RENDEZ-VOUS ==========\nDate: $this->date\nHeure: $this->heure\nLieu: $this->lieu\nSujet: $this->sujet\n\n";
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getDate() {
        return $this->date;
    }

    public function setHeure($heure) {
        $this->heure = $heure;
    }

    public function getHeure() {
        return $this->heure;
    }

    public function setLieu($lieu) {
        $this->lieu = $lieu;
    }

    public function getLieu() {
        return $this->lieu;
    }

    public function setSujet($sujet) {
        $this->sujet = $sujet;
    }

    public function getSujet() {
        return $this->sujet;
    }

}
