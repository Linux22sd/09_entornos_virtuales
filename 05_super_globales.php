<?php
// GLOBALS
$nombre = "Luis";
echo "<pre>";
print_r($GLOBALS);
echo "</pre>";

echo "<pre>";
print_r($_GET);
echo "</pre>";

// local scope
function local_scope(){
    echo $_GET["apellido"];
}
local_scope();
?>