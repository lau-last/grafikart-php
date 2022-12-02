<?php
function repondre_oui_non(?string $phrase = null): bool
{
    while (true) {

        $reponse = readline('Voulez vous continuer ? (o)ui / (n)on : ');
        if ($reponse === 'o') {
            return true;
        } elseif ($reponse === 'n') {
            return false;
        }

    }
}

function demander_creneau(string $phrase = 'Veuillez entrer un creneau'): array
{
    echo $phrase . "\n";
    while (true) {
        $ouverture = (int)readline('heure d\'ouverture : ');
        if ($ouverture >= 0 && $ouverture <= 23) {
            break;
        }
    }
    while (true) {
        $fermeture = (int)readline('heure de fermeture : ');
        if ($ouverture >= 0 && $fermeture <= 23 && $fermeture > $ouverture) {
            break;
        }
    }
    return [$ouverture, $fermeture];
}

function demander_creneaux(string $phrase = "Veuillez entrer vos creneaux"): array
{
    $creneaux = [];
    $continuer = true;
    while ($continuer) {
        $creneaux[] = demander_creneau();
        $continuer = repondre_oui_non('Voulez vous continuer ? ');
    }
    return $creneaux;
}
