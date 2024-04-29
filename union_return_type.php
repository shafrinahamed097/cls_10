<?php 

function addTwo():int|float|bool|string{
    $a=10;
    $b=20;

    return $a+$b;
}

$sum=addTwo()+40;
echo $sum;

?>