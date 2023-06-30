<?php
function getMiddle($text) {
  $text='';
  if(strlen($text)%2==0){
    $in1=(strlen($text)/2)-1;
    $in2=$in1+1;
   $textArray=str_split('',$text);
    return $textArray[$in1].$textArray[$in2] ;
  }else{
    $in1= ((strlen($text)-1)/2);
    $textArray=str_split('',$text);
    return $textArray[$in1];
  }
  
}
echo getMiddle('obuolys');