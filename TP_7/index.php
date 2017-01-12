<?php
function __autoload($class) {
    require "$class.class.php";
}

function debug($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

function getRandomColor() {
    $r = mt_rand(128, 255);
    $g = mt_rand(128, 255);
    $b = mt_rand(128, 255);

    return "rgb($r, $g, $b)";
}

$list = new LinkedList();
$total = 100;

for ($i = 0; $i < $total; $i++) {
    $list->add(getRandomColor());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <style>
            table { border-collapse: collapse; width: 100% }
            th, td { border: 1px solid black; padding: 5px 10px; }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>index</th>
                    <th>data</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < $list->length(); $i++): ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td style="background-color: <?= $list->get($i)->getData(); ?>"><?= $list->get($i)->getData(); ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </body>
</html>
