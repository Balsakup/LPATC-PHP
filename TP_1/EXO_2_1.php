<?php
// Nettoyage de la console
if (stristr(PHP_OS, 'LINUX') || stristr(PHP_OS, 'DAR')) {
    system("clear");
} else {
    system("cls");
}



// Début de l'exercie
printf("========== JEU DU PLUS OU MOINS ==========\n");

$rand  = rand(0, 100);
$ended = false;

do {
    printf("Proposez un nom : ");
    $choice = fgets(STDIN);

    if ($rand != $choice) {
        if ($choice > $rand) {
            printf("C'est moins\n");
        } else {
            printf("C'est plus\n");
        }
    }
} while ($rand != $choice);

printf("Trouvé !! Le nombre était $rand\n");
