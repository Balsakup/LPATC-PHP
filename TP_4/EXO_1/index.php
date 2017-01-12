<?php
date_default_timezone_set('Europe/Paris');

require 'classes/util.class.php';
require 'classes/user.class.php';

$users   = Util::read('data.txt');

if (!isset($_COOKIE['lastVisit'])) {
    $users[] = new User(
        $_SERVER['REMOTE_ADDR'],
        date('d/m/y', $_SERVER['REQUEST_TIME']),
        date('h:i:s', $_SERVER['REQUEST_TIME']),
        $_SERVER['HTTP_USER_AGENT']
    );
    Util::write('data.txt', $users);
    setcookie('lastVisit', true, time() + (60 * 5), '/', 'localhost');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <style>
            table { width: 100%; border-collapse: collapse; }
            th, td { border: 1px solid black; padding: 5px; }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>IP</th>
                    <th>Date</th>
                    <th>Heure</th>
                    <th>Agent</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (array_reverse($users) as $user): ?>
                    <tr>
                        <td><?= $user->getIp(); ?></td>
                        <td><?= $user->getDate(); ?></td>
                        <td><?= $user->getTime(); ?></td>
                        <td><?= $user->getAgent(); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
