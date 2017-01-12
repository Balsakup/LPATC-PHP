<?php
class Cercle {

    private $centre;
    private $rayon;
    private $couleur;

    public function __construct(Point $centre, $rayon, Couleur $couleur) {
        if ($rayon <= 0) {
            throw new Exception('Le rayon doit être positif !');
        }

        $this->centre = $centre;
        $this->rayon = $rayon;
        $this->couleur = $couleur;
    }

    public function surface() {
        return pi() * pow($this->rayon, 2);
    }

    public function getRayon() {
        return $this->rayon;
    }

    public function setRayon($rayon) {
        $this->rayon = $rayon;
    }

    public function translate($x, $y) {
        $this->centre->setX($x);
        $this->centre->setY($y);
    }

    public function dessiner() {
        return "<circle cx=\"{$this->centre->getX()}\" cy=\"{$this->centre->getY()}\" r=\"$this->rayon\" fill=\"$this->couleur\"></circle>";
    }

}
