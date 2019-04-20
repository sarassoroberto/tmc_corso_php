<?php 
// $voti = array(8,5,7,8,8,9);
function media ($array){

    $sum = array_sum($array);
    $num = count($array);
    $media = $sum/$num;
    return $media;
}

$voti = array(9,9,9);
echo media($voti);
$voti = array(10,5);
echo media($voti);