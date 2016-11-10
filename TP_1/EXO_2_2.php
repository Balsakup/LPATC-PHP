<?php
// Nettoyage de la console
if (stristr(PHP_OS, 'LINUX') || stristr(PHP_OS, 'DAR')) {
    system("clear");
} else {
    system("cls");
}



// Début de l'exercie
printf("========== JEU DES DÉS ==========\n");

$ended    = false;
$dices    = [];
$score    = [];
$score[0] = 0;
$score[1] = 0;

do {
    for ($i = 0; $i < 2; $i++) {
        $rand = rand(1, 6);
        printf("Le joueur %d a obtenu $rand\n", $i + 1);
        $dices[$i] = $rand;
    }

    if ($dices[0] > $dices[1]) {
        printf("Le joueur 1 gagne cette manche\n");
        $score[0]++;
    } else {
        printf("Le joueur 2 gagne cette manche\n");
        $score[1]++;
    }
} while ($score[0] < 11 && $score[1] < 11);

printf("===== SCORE =====\n");
printf("Joueur 1: $score[0] point(s)\n");
printf("Joueur 2: $score[1] point(s)\n");
