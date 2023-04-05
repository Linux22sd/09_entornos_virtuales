<?php

$user = "Luis";

// usando (&) antes del parametro se modificara la variable original ya que esta llamando a su referencia
function displayName(&$name){
    return $name = "Alejandro";
}

echo displayName($user)."<br>";

echo $user."<br>";

?>