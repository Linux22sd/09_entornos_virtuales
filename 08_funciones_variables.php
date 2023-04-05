<?php

// Funciones variables

// Ejemplo 1
function saludar(){
    return "Hola";
}
function despedirse(){
    return "Adios";
}
$ejecutar = "saludar";

echo $ejecutar()."<br>";

// Ejemplo 2
function suma($n1,$n2){
    echo $n1() + $n2();
}

function getNumber1(){
    return 9;
}

function getNumber2(){
    return 8;
}

suma("getNumber1","getNumber2")."<br>";
?>