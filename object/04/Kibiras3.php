<?php

class Kibiras3 {
    private $akmenuKiekis = 0;

    public function Prideti1Akmeni()
     {
        $this->akmenuKiekis += 1;
        return $this->akmenuKiekis;
    }

    public function PridetiDaugAkmenu($kiekis)
     {
        $this->akmenuKiekis += ($kiekis-1);
        return $this->akmenuKiekis;
    }

    public function KiekPririnktaAkmenu() 
    {
        //echo "Akmenų kiekis: " . $this->akmenuKiekis . "<br>";
       return $this->akmenuKiekis;
}
}
class KibirasNePo1 extends Kibiras3 {
    public function Prideti1Akmeni() {
        $kiekis = rand(2, 5);
        $this->PridetiDaugAkmenu($kiekis);
        //echo "Pridėta $kiekis akmenų<br>";
        return "Pridėta $kiekis akmenų<br>";
    }
}


?>