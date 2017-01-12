<?php
require 'point.class.php';
require 'couleur.class.php';
require 'cercle.class.php';

function genererCercle() {
    $centre  = new Point(mt_rand(0, 1440), mt_rand(0, 900));
    $rayon   = mt_rand(5, 40);
    $couleur = new Couleur(mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));

    return new Cercle($centre, $rayon, $couleur);
}

echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"100%\" height=\"100%\">";

for ($i = 0; $i < 100; $i++) {
    echo genererCercle()->dessiner();
}

echo "</svg>";
