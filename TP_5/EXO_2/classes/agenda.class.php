<?php
class Agenda {

    private $liste_rdv = [];

    public function addRDV($rdv) {
        $this->liste_rdv[] = $rdv;
    }

    public function removeRDV($rdv) {
        if (($key = array_search($rdv, $this->liste_rdv, true)) !== false) {
            unset($this->liste_rdv[$key]);
        }
    }

    public function afficher() {
        foreach ($this->liste_rdv as $rdv) {
            echo $rdv->afficher();
        }
    }
    
    public function setListeRdv($liste_rdv)
    {
        $this->liste_rdv = $liste_rdv;
    }

    public function getListeRdv()
    {
        return $this->liste_rdv;
    }

}
