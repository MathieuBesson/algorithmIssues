<?php 

// Given a string, find its first unique character

function FirstUniqueStr($str){
    $dublonArray= [];
    for($i = 0; $i< strlen($str); $i++){
        $dublonArray[$str[$i]] = (array_key_exists($str[$i], $dublonArray)) ? $dublonArray[$str[$i]]+1 : 1;
    }
    return array_search(1,$dublonArray);
}
  

$str = "geeksfforgeeks"; 
$caract = FirstUniqueStr($str); 
echo (!$caract) ? "All characters are repeating or string is empty" : "First unique character is " . $caract; 
  

