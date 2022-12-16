<?php

class Compteur
{

    public $fichier;

    public function __construct(string $fichier)
    {
        $this->fichier = $fichier;
    }

    public function incrementer(): void
    {
        $compteur = 1;
        if (file_exists($this->fichier)) {
            $compteur = (int)file_get_contents($this->fichier);
            $compteur++;
            file_put_contents($this->fichier, $compteur);
        }
        file_put_contents($this->fichier, $compteur);
    }

    public function recuperer(): int
    {
        if (!file_exists($this->fichier)) {
            return 0;
        }
        return file_get_contents($this->fichier);
    }

}