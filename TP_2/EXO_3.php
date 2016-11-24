<?php
function ask($question) {
    printf("$question: ");

    return str_replace("\n", "", fgets(STDIN));
}

function translate(&$dico, $sentence) {
    $sentence = explode(' ', $sentence);
    $res = [];

    foreach ($sentence as $word) {
        if (!isset($dico[$word])) {
            printf("Traduction du mot '$word' non disponible.\n");
            $dico[$word] = ask("Traduction du mot '$word' en anglais");
        }

        $res[] = $dico[$word];
    }

    return implode(' ', $res);
}

if (stristr(PHP_OS, 'LINUX') || stristr(PHP_OS, 'DAR')) {
    system("clear");
} else {
    system("cls");
}

printf("========== LE TRADUCTEUR ==========\n");

/*$dico = [
    'le' => 'the',
    'la' => 'the',
    'petit' => 'small',
    'petite' => 'small',
    'mange' => 'eats',
    'chat' => 'cat',
    'souris' => 'mouse',
    'lait' => 'milk',
    'boit' => 'drinks',
    'du' => ''
];*/

$dico = unserialize(file_get_contents('dico.txt'));

$continue = null;

do {
    printf("Traduction: %s\n", translate($dico, strtolower(ask('Quelle phrase voulez-vous traduire '))));

    do {
        $continue = strtolower(ask("Voulez-vous continuez (o/n)"));
    } while ($continue != 'o' && $continue != 'n');
} while ($continue == 'o');

file_put_contents('dico.txt', serialize($dico));
