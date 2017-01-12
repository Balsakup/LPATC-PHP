<?php
class Couleur {

    private $r;
    private $v;
    private $b;

    public function __construct($r, $v, $b) {
        $this->r = $r > 255 ? 255 : $r;
        $this->v = $v > 255 ? 255 : $v;
        $this->b = $b > 255 ? 255 : $b;
    }

    public function getR() {
        return $this->r;
    }

    public function getV() {
        return $this->v;
    }

    public function getB() {
        return $this->b;
    }

    public function setR($r) {
        $this->r = $r;
    }

    public function setV($v) {
        $this->v = $v;
    }

    public function setB($b) {
        $this->b = $b;
    }

    public function __toString() {
        return "rgb($this->r, $this->v, $this->b)";
    }

}
