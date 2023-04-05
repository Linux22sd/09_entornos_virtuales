<?php
// arrow function ejemplo 1
$numbers = [1,2,3,4];

$multiplicacion = array_map(fn($value)=>$value * 2, $numbers);

echo "<pre>";
print_r($multiplicacion);
echo "</pre>";

// arrow function ejemplo 2
$cajero = 10;
$add_cajero = fn($add)=> $cajero + $add;

echo $add_cajero(40)."<br>";
echo $cajero."<br>";

// arrow functions ejemplo 3
$where_am_I = "Mexico";

$changing_where_am_I = fn(&$where_am_I)=> $where_am_I = "Colombian";

echo $changing_where_am_I($where_am_I)."<br>";
echo $where_am_I;
?>