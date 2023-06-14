 <?php
   class MarsoPalydovas {
       private static $objektuSkaicius = 0;
       private static $objektai = [];
   
       private $vardas;
   
       private function __construct($vardas) {
           $this->vardas = $vardas;
       }
   
       public static function sukurtiObjekta() {
        if (self::$objektuSkaicius < 2) {
            $vardas = (self::$objektuSkaicius === 0) ? "Deimas" : "Fobas";
               $objektas = new MarsoPalydovas($vardas);
               self::$objektai[] = $objektas;
               self::$objektuSkaicius++;
           }
           echo '<pre>';
           return self::$objektai[rand(0, 1)]->vardas ;
       }
   }






    ?>