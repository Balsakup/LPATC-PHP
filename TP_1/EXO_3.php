<?php
// Nettoyage de la console
if (stristr(PHP_OS, 'LINUX') || stristr(PHP_OS, 'DAR')) {
    system("clear");
} else {
    system("cls");
}



// Début de l'exercie
printf("========== CALCULATRICE ==========\n");

$op = ask("Quelle opération voulez-vous faire (+, -, *, /)");

function ask($question) {
    printf("$question : ");
    $line = fgets(STDIN);

    return substr($line, 0, strpos($line, "\n"));
}

$nb1 = ask("Saisissez un nombre");
$nb2 = ask("Saisissez un nombre");

switch ($op) {
    case '+':
        printf("$nb1 $op $nb2 = %d\n", $nb1 + $nb2);
        break;
    case '-':
        printf("$nb1 $op $nb2 = %d\n", $nb1 - $nb2);
        break;
    case '*':
        printf("$nb1 $op $nb2 = %d\n", $nb1 * $nb2);
        break;
    case '/':
        printf("$nb1 $op $nb2 = %d\n", $nb1 / $nb2);
        break;
    default:
        printf("Opération non connue\n");
        break;
}
