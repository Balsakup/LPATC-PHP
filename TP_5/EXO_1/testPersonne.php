<?php
require 'personne.class.php';

$personne = new Personne('Catherine', 'Quentin', 'Fontenay-le-Marmion', 'Française');
echo $personne->toString(), "\n";
