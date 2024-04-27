<?php

function sum(int $a, float $b, int $c){
    $num1=$a;
    $num2=$b;
    $num3=$c;

    echo $num1+$num2-$num3;
}

sum(300,true,"700");


// Multiple type hinting
function mySelf(string $name, int | string $age, string $city){
    echo "My name is: $name, I'm $age years old, And I live in $city ";
}
 mySelf("Shafrin Ahamed", 27, "Noakhali");

?>