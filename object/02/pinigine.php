<?php
class Pinigine {

    private $popieriniaiPinigai = 0, $metaliniaiPinigai = 0;

    public function ideti($kiekis) : void
    {
        if ($kiekis > 2) {
            $this->popieriniaiPinigai += $kiekis;
        } else {
            $this->metaliniaiPinigai += $kiekis;
        }
    }

    public function skaiciuoti() : void
    {
        echo '<h1>Popieriniai pinigai: ' . $this->popieriniaiPinigai . '<br>Metaliniai pinigai: ' . $this->metaliniaiPinigai . '</h1>';
    }

}
/*
<?php
// mano variantas
class Pinigine {
    private $popieriniaiPinigai;
    private $metaliniaiPinigai;
    
    public function ideti($kiekis) {
        if ($kiekis <= 2) {
            $this->metaliniaiPinigai += $kiekis;
        } else {
            $this->popieriniaiPinigai += $kiekis;
        }
    }
    
    public function skaiciuoti() {
        echo "Popieriniai pinigai: " . $this->popieriniaiPinigai . "<br>";
        echo "Metaliniai pinigai: " . $this->metaliniaiPinigai . "<br>";
    }
}

// Sukuriame klasės objektą
$pinigine = new Pinigine();

// Pridedame pinigus
$pinigine->ideti(1); // Pridedame 1 į metalinius pinigus
$pinigine->ideti(5); // Pridedame 5 į popierinius pinigus
$pinigine->ideti(3); // Pridedame 3 į popierinius pinigus

// Skaičiuojame ir atspausdiname sumą
$pinigine->skaiciuoti();

 */