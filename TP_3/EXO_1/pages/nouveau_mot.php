<?php
$traducteur = new Traducteur();

if (isset($_POST['nouveauMot'])) {
    if (isset($_POST['fr']) && !empty($_POST['fr'])) {
        $traducteur->ajouterMot($_POST['fr'], isset($_POST['en']) ? $_POST['en'] : '');
    } else {
        die('Vous devez préciser le mot français');
    }
}
?>
<form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post">
    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label for="fr">Français</label>
                <input type="text" id="fr" class="form-control" name="fr">
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label for="en">Anglais</label>
                <input type="text" id="en" class="form-control" name="en">
            </div>
        </div>
    </div>
    <button class="btn btn-default" name="nouveauMot">Traduire</button>
</form>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Français</th>
            <th>Anglais</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($traducteur->recupererDonnees() as $fr => $en): ?>
            <tr>
                <td><?= $fr; ?></td>
                <td><?= $en; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
