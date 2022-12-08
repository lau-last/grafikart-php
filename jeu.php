<?php
$aDeviner = 150;
$erreur = null;
$succes = null;
$value = null;

if (isset($_GET['chiffre'])) {

    if ($_GET['chiffre'] > $aDeviner) {
        $erreur = 'Votre chiffre est trop grand';
    } elseif ($_GET['chiffre'] < $aDeviner) {
        $erreur = 'Votre chiffre est trop petit';
    } else {
        $succes = 'Bravo vous avez deviné le chiffre ' . $aDeviner;
    }
    $value = (int)$_GET['chiffre'];
}

require 'header.php';
?>


<form action="/grafikart/jeu.php" method="get">
    <input type="number" name="chiffre" placeholder="entre 0 et 1000"
           value="<?php if (isset($_GET['chiffre'])) {
               htmlentities($_GET['chiffre']);
           } ?>">
    <!--    <input type="text" name="demo" value="test">-->
    <button type="submit">Deviner</button>
</form>


<?php require 'footer.php'; ?>
