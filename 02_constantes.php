<?php
// case sensitive
// Forma correcta
define("ID", "d43f45");
echo ID."<br>";

// Forma incorrecta
define("id", "d45f43");
echo id."<br>";

const PI = 3.1416;
echo PI."<br>";

// dentro de un if
const DECISION = "true";
// const no se puede declarar dentro de un bloque de codigo
if(DECISION){
    define("BLOCK_CONSTANT","Declarada dentro de un if");
};
echo BLOCK_CONSTANT."<br>";

// constantes predefinidas
echo E_ERROR."<br>";
echo PHP_VERSION."<br>";
echo __LINE__."<br>";

// ================================================================================







?>