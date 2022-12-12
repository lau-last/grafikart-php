<?php

var_dump(dirname(__DIR__));

$fichier = __DIR__ . DIRECTORY_SEPARATOR . 'demo.txt';

echo file_get_contents($fichier);

$size = file_put_contents($fichier, 'Salut les gens ', FILE_APPEND);

