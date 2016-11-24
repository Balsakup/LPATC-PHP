<?php
if (isset($_POST)) {
    if (isset($_POST['frToEn'])) {
        if (isset($_POST['fr']) && !empty($_POST['fr'])) {
            unset($_SESSION);
            $_SESSION['frToEn'] = [
                'base'       => $_POST['fr'],
                'traduction' => (new Traducteur())->frToEn($_POST['fr'])
            ];
        } else {
            die('Vous devez préciser un texte à traduire');
        }
    } elseif (isset($_POST['enToFr'])) {
        if (isset($_POST['en']) && !empty($_POST['en'])) {
            unset($_SESSION);
            $_SESSION['enToFr'] = [
                'base'       => $_POST['en'],
                'traduction' => (new Traducteur())->enToFr($_POST['en'])
            ];
        } else {
            die('Vous devez préciser un texte à traduire');
        }
    }
}
/*echo '<pre>';
print_r($_POST);
echo '</pre>';
echo '<pre>';
print_r($_SESSION);
echo '</pre>';*/
?>
<form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post">
    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label for="fr">Français</label>
                <textarea rows="4" id="fr" class="form-control" name="fr"><?= isset($_SESSION['frToEn']) ? $_SESSION['frToEn']['base'] : ''; ?><?= isset($_SESSION['enToFr']) ? $_SESSION['enToFr']['traduction'] : ''; ?></textarea>
            </div>
            <button class="btn btn-default" name="frToEn">Traduire</button>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label for="en">Anglais</label>
                <textarea rows="4" id="en" class="form-control" name="en"><?= isset($_SESSION['frToEn']) ? $_SESSION['frToEn']['traduction'] : ''; ?><?= isset($_SESSION['enToFr']) ? $_SESSION['enToFr']['base'] : ''; ?></textarea>
            </div>
            <button class="btn btn-default" name="enToFr">Traduire</button>
        </div>
    </div>
</form>
