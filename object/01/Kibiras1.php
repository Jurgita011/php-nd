<?php

class Kibiras1
{
    private $akmenuKiekis = 0;

    public function prideti1Akmeni() : int
    {
        $this->akmenuKiekis += 1;
        return $this->akmenuKiekis;
    }

    public function pridetiDaugAkmenu($kiekis) : int
    {
        $this->akmenuKiekis += ($kiekis - 1);
        return $this->akmenuKiekis;
    }

    public function kiekPririnktaAkmenu()
    {
        return $this->akmenuKiekis;
    }
}

// // <?php
// echo '<pre>';

// require __DIR__ . '/01.php';

// $kibiriukas = new Kibiras1;

// echo 'Pridėti 1 akmenį: ';
// echo $kibiriukas->prideti1Akmeni();
// echo '<br>';

// echo 'Pridėti daug akmenų: ';
// $kiekis = 100;
// echo $kibiriukas->pridetiDaugAkmenu($kiekis);
// echo '<br>';

// echo 'Akmenų pririnkta: ';
// echo $kibiriukas->kiekPririnktaAkmenu();


// ?>
