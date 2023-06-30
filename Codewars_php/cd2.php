<?php

// function findShort($str) {
//   $words = explode(" ", $str);
//   $shortestLength = PHP_INT_MAX;

//   foreach ($words as $word) {
//     $length = strlen($word);
//     if ($length < $shortestLength) {
//       $shortestLength = $length;
//     }
//   }

//   return $shortestLength;
// }
// $string = "Simple words in a string";
// $result = findShort($string);
// echo $result;  //ats 1
// function findShort($str){
  
//     $words = [];
//     $lenghts = [];
    
//     $words = explode(" ", $str);
    
//     foreach ($words as $word){
      
//       $lenghts[] = strlen($word);
      
//     }
    
//     return min($lenghts);
    
//   }
function findShort($str){

 

    $w = explode(" ",$str);
  
   
  
      usort($w, function($a, $b) {
          if(strlen($a) > strlen($b)) {
              return 1;
          }
          elseif(strlen($a) < strlen($b)) {
              return -1;
          }
          else {
              return 0;
          };
      });
          return strlen($w[0]);
  }
//   echo 