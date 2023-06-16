<?php

class Krepsys {

    const DYDIS = 500;

    private $kiekis = 0;

    public function ideti($gryboSvoris) : void
    {
        $this-> kiekis += $gryboSvoris;
    }
    public function arPilnas() : bool
    {
        if($this->kiekis >= self::DYDIS){
            return true;
        } else {
            return false;
        }
    }
    public function __get($kiekis) {
        return $this->kiekis;
    }
}