<?php

class Creneau
{
    public $debut;

    public $fin;

    public function __construct(int $debut, int $fin){
        $this->debut = $debut;
        $this->fin = $fin;
    }
}