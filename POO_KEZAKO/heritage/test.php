<?php
require 'vehicule.class.php';
require 'voiture.class.php';
require 'moto.class.php';
require 'avion.class.php';

// Instance d'une voiture
$voiture = new Voiture('Saxo Bic Verte', 'verte', 5);
echo $voiture, "\n\n"; // Affiche la voiture (appel $voiture->__toString())

// Instance d'une moto
$moto = new Moto('125 cc Yamaha', 'blue');
echo $moto, "\n\n"; // Affiche la moto (appel $moto->__toString())

// Instance d'un avion Cesna
$cesna = new Avion('Cesna', 'blanc', 4);
echo $cesna, "\n\n"; // Affiche le Cesna (appel $cesna->__toString())

// Instance d'un Airbus A 380
$airbus = new Avion('Airbus A 380', 'blanc', 853, 0, 4);
echo $airbus, "\n\n"; // Affiche l'Airbus A 380 (appel $airbus->__toString())

/**
 * echo $voiture => appel automatiquement la méthode $voiture->__toString();
 */
