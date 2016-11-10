<?php
// Nettoyage de la console
if (stristr(PHP_OS, 'LINUX') || stristr(PHP_OS, 'DAR')) {
    system("clear");
} else {
    system("cls");
}



// Début de l'exercie
printf("========== Pyramide ==========\n");

$nb = isset($argv[1]) && !empty($argv[1]) ? $argv[1] : 5;

for ($i = 0; $i < $nb; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }

    echo "\n";
}
