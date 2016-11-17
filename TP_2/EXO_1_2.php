<?php
function isEnded($players, $max) {
    foreach ($players as $player => $score) {
        if ($score >= $max) {
            return true;
        }
    }

    return false;
}

function winner($players) {
    $win = [ null, 0 ];

    foreach ($players as $player => $score) {
        if ($score > $win[1]) {
            $win = [ $player, $score ];
        } elseif ($score == $win[1]) {
            $win = null;
        }
    }

    return $win;
}

function displayScore($scores) {
    printf("\n");

    foreach ($scores as $v) {
        printf("-------------");
    }

    printf("-\n");

    foreach ($scores as $player => $score) {
        printf("| %-10s ", $player);
    }

    printf("|\n");

    foreach ($scores as $v) {
        printf("-------------");
    }

    printf("-\n");

    foreach ($scores as $player => $score) {
        printf("| %-10d ", $score);
    }

    printf("|\n");

    foreach ($scores as $v) {
        printf("-------------");
    }

    printf("-\n\n");
}

$scores = [
    'p1' => 0,
    'p2' => 0,
    'p3' => 0
];

$dices = [];

if (stristr(PHP_OS, 'LINUX') || stristr(PHP_OS, 'DAR')) {
    system("clear");
} else {
    system("cls");
}

printf("========== JEU DES DÉS ==========\n");

while (!isEnded($scores, 11)) {
    sleep(1);

    foreach ($scores as $player => $score) {
        $dices[$player] = rand(1, 12);
    }

    $winner = winner($dices);

    if ($winner == null) {
        printf(">> Le tour est nul. 2 joueurs au moins on obtenu le même résultat\n");
        continue;
    }

    $scores[$winner[0]]++;

    printf(">> Le joueur '$winner[0]' gagne la manche\n");
}

if (stristr(PHP_OS, 'LINUX') || stristr(PHP_OS, 'DAR')) {
    system("clear");
} else {
    system("cls");
}

displayScore($scores);

printf(">> Le joueur '%s' gagne le jeu\n", winner($scores)[0]);
