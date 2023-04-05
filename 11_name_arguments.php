<?php

// named arguments

function saludar($name,$apellido,$nacionalidad){
    return "Mi nombre es $name $apellido y soy $nacionalidad";
}

echo saludar(
    name: "Luis",
    apellido: "Padilla",
    nacionalidad: "Mexicano",
)

?>