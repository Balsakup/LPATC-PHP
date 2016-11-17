<?php
function ask($question) {
    printf("$question: ");

    return str_replace("\n", "", fgets(STDIN));
}

function game($nb) {
    printf("========== JEU DU PLUS GRAND OU PLUS PETIT ==========\n");

    while (true) {
        $ask = ask("Donnez un chiffre");

        if ($ask > $nb) {
            printf("C'est moins\n");
        } elseif ($ask < $nb) {
            printf("C'est plus\n");
        } else {
            printf("Trouvé !!!! Le chiffre était $nb\n");
            break;
        }
    }
}

if (stristr(PHP_OS, 'LINUX') || stristr(PHP_OS, 'DAR')) {
    system("clear");
} else {
    system("cls");
}

game(rand(0, 100));
