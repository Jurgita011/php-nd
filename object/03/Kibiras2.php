<?php
class Kibiras2 {
    private static $akmenuKiekisVisuoseKibiruose = 0;
    private $akmenuKiekis = 0;
  
    public function prideti1Akmeni() {
      $this->akmenuKiekis++;
      self::$akmenuKiekisVisuoseKibiruose++;
    }
  
    public function gautiAkmenuKieki() {
      return $this->akmenuKiekis;
    }
  
    public static function gautiAkmenuKiekiVisuoseKibiruose() {
      return self::$akmenuKiekisVisuoseKibiruose;
    }
  }
  
 
  
  
  
  
  
  
  





?>