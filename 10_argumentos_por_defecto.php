<?php
$array = [34,54,32];

// array
function sumarEdades($edad = array(12,35,32)){
    return array_sum($edad);
}

echo sumarEdades($array)."<br>";
echo sumarEdades()."<br><br>";


// tralling comma se le llama a la coma que separa a los valores por defecto
function multiplicar($n1=3,$n2=4,$n3=5){
    return $n1 + $n2 + $n3;
}

echo multiplicar()."<br>";
echo multiplicar(4,9,7)."<br>";

// clase

class ClaseX{
    
}

function receive_a_class($class = new ClaseX){
    return $class::class;
}

echo receive_a_class();
?>