<?php
// Nettoyage de la console
if (stristr(PHP_OS, 'LINUX') || stristr(PHP_OS, 'DAR')) {
    system("clear");
} else {
    system("cls");
}



// Début de l'exercie
printf("========== Date ==========\n");

date_default_timezone_set("Europe/Paris");

while (true) {
    printf("Aujourd'hui nous sommes le %s\n", date("d F y H:i:s"));

    for ($i = 0; $i < 20; $i++) {
        sleep(1);
        printf("- ");
    }

    printf("\n");
}
