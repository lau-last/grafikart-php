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

function dump($variable)
{
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}

function creneaux_html(array $creneaux)
{
    if (empty($creneaux)) {
        return 'Fermé';
    }
    $phrases = [];
    foreach ($creneaux as $creneau) {
        $phrases[] = "<strong>{$creneau[0]}h</strong> à <strong>{$creneau[1]}h</strong>";
    }
    return 'Ouvert de ' . implode(' et ', $phrases);
}

function in_creneaux(int $heure, array $creneaux): bool
{
    foreach ($creneaux as $creneau) {
        $debut = $creneau[0];
        $fin = $creneau[1];
        if ($heure >= $debut && $heure <= $fin) {
            return true;
        }
    }
    return false;
}

function select(string $name, $value, array $option): string
{
    foreach ($option as $k => $option) {
        $attributes = $k == $value ? ' selected' : '';
        $html_option[] = "<option value='$k' $attributes>$option</option>";
    }
    return  "<select class='form-control' name='$name'>" . implode
        ($html_option);
}