<?php
// Nettoyage de la console
if (stristr(PHP_OS, 'LINUX') || stristr(PHP_OS, 'DAR')) {
    system("clear");
} else {
    system("cls");
}



// Début de l'exercie
printf("========== Palindrome ==========\n");

if ($argc != 2) {
    die("php EXO_4.php <mot_a_tester>\n");
}

$res     = true;
$argv[1] = strtolower($argv[1]);

for ($i = 0; $i < strlen($argv[1]) / 2; $i++) {
    if ($argv[1][$i] != $argv[1][strlen($argv[1]) - $i - 1]) {
        $res = false;
    }
}

if ($res) {
    printf("$argv[1] est un palindrome\n");
} else {
    printf("$argv[1] n'est pas un palindrome\n");
}
