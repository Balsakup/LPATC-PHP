<?php
session_start();

require 'classes/traducteur.class.php';

if (isset($_GET['page']) && !empty($_GET['page'])) {
    $page = $_GET['page'];

    if (file_exists("pages/$page.php")) {
        ob_start();
        include "pages/$page.php";

        $content_for_layout = ob_get_clean();
    } else {
        die('404: Page non trouvée');
    }
} else {
    if (file_exists("pages/accueil.php")) {
        ob_start();
        include "pages/accueil.php";

        $content_for_layout = ob_get_clean();
    } else {
        die('404: Page non trouvée');
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Traducteur</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <div class="row">
                    <div class="col-xs-6">
                        <h1>Traducteur</h1>
                    </div>
                    <div class="col-xs-6">
                        <br>
                        <a href="?page=nouveau_mot" class="btn btn-success pull-right">Ajouter une traduction</a>
                        <a href="?page=accueil" class="btn btn-info pull-right">Allez à l'accueil</a>
                    </div>
                </div>
            </div>
            <?= isset($content_for_layout) ? $content_for_layout : ''; ?>
        </div>
    </body>
</html>
