<?php
declare(strict_types=1);
function myName( ?string $name){
    echo $name;

}

myName("Shafrin Ahamed");
myName(null); 

?>