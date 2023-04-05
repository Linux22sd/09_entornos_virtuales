<?php
$variable_externa = "Variable externa global";

function my_function(){
    global $variable_externa;
    echo $variable_externa."<br>";
}
//echo $variable_externa."<br>";
my_function();





?>