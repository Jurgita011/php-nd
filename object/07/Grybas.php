<?php

class Grybas {

    private $valgomas, $sukirmijes, $svoris;

    public function __construct ()
    {
        $this->valgomas = rand(0,1);
        $this->sukirmijes = rand(0,1);
        $this->svoris = rand(5,45);
    }
    public function arGeras() : bool 
    {
        if ($this->valgomas && !$this->sukirmijes){
            return true;
        } else {
            return false;
        }
    }
    public function __get($svoris) 
    {   
        return $this->svoris;
    } 
}








