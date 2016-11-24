<?php
class Traducteur {

    private $donnees = [];

    public function __construct() {
        $this->donnees = unserialize(file_get_contents('data.txt'));
    }

    public function frToEn($phrase) {
        $phrase   = explode(' ', $phrase);
        $resultat = [];

        foreach ($phrase as $mot) {
            $mot = strtolower($mot);

            if (isset($this->donnees[$mot])) {
                if (!empty($this->donnees[$mot])) {
                    $resultat[] = $this->donnees[$mot];
                }
            } else {
                $resultat[] = $mot;
            }
        }

        return ucfirst(implode(' ', $resultat));
    }

    public function enToFr($phrase) {
        $phrase   = explode(' ', $phrase);
        $resultat = [];

        foreach ($phrase as $mot) {
            $mot = strtolower($mot);

            if ($this->recupererCleParValeur($mot) != null) {
                $resultat[] = $this->recupererCleParValeur($mot);
            } else {
                $resultat[] = $mot;
            }
        }

        return ucfirst(implode(' ', $resultat));
    }

    public function ajouterMot($fr, $en) {
        $this->donnees[strtolower($fr)] = strtolower($en);
    }

    public function recupererDonnees() {
        return $this->donnees;
    }

    private function recupererCleParValeur($valeur) {
        foreach ($this->donnees as $fr => $en) {
            if ($en == $valeur) {
                return $fr;
            }
        }

        return null;
    }

    public function __destruct() {
        file_put_contents('data.txt', serialize($this->donnees));
    }

}
