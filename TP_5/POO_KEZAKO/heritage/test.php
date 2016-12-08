<?php
require 'vehicule.class.php';
require 'voiture.class.php';
require 'moto.class.php';
require 'avion.class.php';

$voiture = new Voiture('Saxo Bic Verte', 'verte', 5);
echo $voiture, "\n\n";

$moto = new Moto('125 cc Yamaha', 'blue');
echo $moto, "\n\n";

$cesna = new Avion('Cesna', 'blanc', 4);
echo $cesna, "\n\n";

$airbus = new Avion('Airbus A 380', 'blanc', 853, 0, 4);
echo $airbus, "\n\n";

/**
 * echo $voiture => appel automatiquement la méthode $voiture->__toString();
 */
