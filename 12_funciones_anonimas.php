<?php
// funciones anonimas

$suma = function($n1, $n2){
    return $n1 + $n2;
};
echo $suma(3,5);

// usualmente se usan mas como callbacks (parametros en funciones)

$numbers = [1,2,3,4];

// aqui se le manda a arraymap la funcion anonima directamente
$numbers_by_2 = array_map( function($current){
    return $current * 2;
}, $numbers);

echo "<pre>";
print_r($numbers_by_2);
echo "</pre>";

// y aqui se le manda a arraymap la funcion anonima en una variable
$var_funcion = function ($valor){
    return $valor * 2;
};

$operacion = array_map($var_funcion, $numbers);

echo "<pre>";
print_r($operacion);
echo "</pre>";
// ======================================================================
// Usando use
// solo podemos accesar
$user = "Luis";

$new_nombre = function () use($user){
    echo $user."<br>";
};

$new_nombre();
echo $user."<br><br>";

// Usando global se puede modificar
$new_nombre2 = function (){
    global $user;
    $user = "Alejandro";
    echo $user."<br>";
};
$new_nombre2();
echo $user;
?>