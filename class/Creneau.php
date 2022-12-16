<?php

class Creneau
{
    public $debut;
    public $fin;

    public function __construct(int $debut, int $fin)
    {
        $this->debut = $debut;
        $this->fin = $fin;
    }

    public function toHTML(): string
    {
        return "<strong>{$this->debut}h</strong> <strong>{$this->fin}h</strong>";
    }

    public function include_hours(int $hours): bool
    {
        return $hours >= $this->debut && $hours <= $this->fin;
    }

    public function intersect(Creneau $creneau): bool
    {
        return $this->include_hours($creneau->debut) || $this->include_hours($creneau->fin) ||
            ($this->debut > $creneau->debut && $this->fin < $creneau->fin);
    }

}