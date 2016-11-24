<?php
define('ROOT', __DIR__);

if (isset($_GET['page']) && !empty($_GET['page'])) {
    $page = $_GET['page'];

    if (!file_exists("pages/$page.php")) {
        die('404: Page non trouvée !');
    }

    require "pages/$page.php";
}
