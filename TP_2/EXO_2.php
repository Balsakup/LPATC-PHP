<?php
function ask($question) {
    printf("$question: ");

    return str_replace("\n", "", fgets(STDIN));
}

function isPalindrome($word) {
    for ($i = 0; $i < strlen($word) / 2; $i++) {
        if ($word[$i] != $word[strlen($word) - 1 - $i]) {
            return false;
        }
    }

    return true;
}

if (stristr(PHP_OS, 'LINUX') || stristr(PHP_OS, 'DAR')) {
    system("clear");
} else {
    system("cls");
}

printf("========== PALINDROME ==========\n");

$continue = 'o';

do {
    $word     = ask("Quel mot voulez-vous tester");

    if (isPalindrome($word)) {
        printf("'$word' est un palindrome\n");
    } else {
        printf("'$word' n'est pas un palindrome\n");
    }

    do {
        $continue = strtolower(ask("Voulez-vous continuez (o/n)"));
    } while ($continue != 'o' && $continue != 'n');
} while ($continue == 'o');
