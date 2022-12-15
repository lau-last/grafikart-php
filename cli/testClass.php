<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'Creneau.php';

$creneau1 = new Creneau(9, 11);
$creneau2 = new Creneau(7, 6);

echo "<pre>";
var_dump($creneau1, $creneau2);
echo "</pre>";
