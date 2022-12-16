<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'Creneau.php';

$creneau1 = new Creneau(9, 11);
$creneau2 = new Creneau(7, 9);

$creneau1->intersect($creneau2);

echo $creneau1->toHTML();

echo "<pre>";
var_dump(
    $creneau1->include_hours(10),
    $creneau2->include_hours(10),
    $creneau1->intersect($creneau2)
);
echo "</pre>";
