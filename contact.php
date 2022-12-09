<?php
$title = "Nous contacter";
$nav = "contact";
require_once 'config.php';
require_once 'functions.php';
date_default_timezone_set('Europe/paris');
$heure = (int)($_GET['heure'] ?? date('G'));
$jour = (int)($_GET['jour'] ?? date('N') - 1);
$creneaux = CRENEAUX[$jour];
$ouvert = in_creneaux($heure, $creneaux);
$color = $ouvert ? 'green' : 'red';
require 'header.php';
?>
    <div class="row">


        <div class="col-md-8">
            <h2>Nous contacter</h2>
            <p>Lorem</p>
        </div>
        <div class="col-md-4">
            <h2>Horaire d'ouvertures</h2>


            <?php if ($ouvert): ?>
                <div class="alert alert-success">
                    Le magasin sera ouvert
                </div>
            <?php else : ?>
                <div class="alert alert-danger">
                    Le magasin sera fermé
                </div>
            <?php endif; ?>


            <form action="" method="get">
                <div class="form-groupe">
                    <?= select('jour', $jour, JOURS) ?>
                    <select class="form-control" name="jour"></select>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="heure"
                           value="<?= $heure ?>">
                </div>
                <button class="btn btn-primary" type="submit">Voir si
                    le magasin est ouvert
                </button>
            </form>


            <ul>
                <?php foreach (JOURS as $k => $jour): ?>
                    <li <?php if ($k + 1 === (int)date('N')): ?>
                        style="color:<?= $color; ?>"<?php endif; ?> >
                        <strong><?= $jour ?></strong>
                        <?= creneaux_html(CRENEAUX[$k]) ?>
                    </li>
                <?php endforeach; ?>
            </ul>


        </div>
    </div>


<?php require 'footer.php'; ?>