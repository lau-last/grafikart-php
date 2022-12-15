<?php
$date1 = '2014-01-08';
$date2 = '2019-06-01';

$d1 = new DateTime($date1);
$d2 = new DateTime($date2);

$diff = $d1->diff($d2, true);
echo "Il y a {$diff->y} année, {$diff->m} mois et {$diff->d} jours de différence";


