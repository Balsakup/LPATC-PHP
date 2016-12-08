<?php
require 'classes/rdv.class.php';
require 'classes/agenda.class.php';

$rdv1 = new RDV('08/12/2016', '9:00', 'Salle 138', 'CM de PHP');
$rdv2 = new RDV('08/12/2016', '10:45', 'Salle 162', 'TP de PHP');
$rdv3 = new RDV('08/12/2016', '11:00', 'Saxo bic verte', 'Rentrer chez moi');

$rdv3->modifier('heure', '10:45');

$agenda = new Agenda();
$agenda->addRDV($rdv1);
$agenda->addRDV($rdv2);
$agenda->addRDV($rdv3);
$agenda->removeRDV($rdv2);
$agenda->afficher();
