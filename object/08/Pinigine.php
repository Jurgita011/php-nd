<?php
class Pinigine{
   private $popieriniaiPinigai;
    private $metaliniaiPinigai;
    
    public function ideti($kiekis) :void
    {
        if ($kiekis <= 2) {
            $this->metaliniaiPinigai += $kiekis;
        } else {
            $this->popieriniaiPinigai += $kiekis;
        }

}

public function skaiciuoti ():void
{
 echo '<h1>Popieriniai pinigai: ' . $this->popieriniaiPinigai . '<br>Metaliniai pinigai: ' . $this->metaliniaiPinigai . '</h1>';
}
}