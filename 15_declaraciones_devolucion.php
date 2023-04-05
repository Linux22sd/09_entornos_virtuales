<?php
// Ejemplo 1
function suma($n1,$n2) : int{
    return $n1 + $n2;
}
echo gettype(suma(4, 9))."<br>";

// Ejemplo 2 con declaraciones escalar y declaraciones de devolucion
class Numero{
    public $valor;
    function __construct($valor){
        $this->valor = $valor;
    }
}

$numero1 = new Numero(20);

function restar(Numero $num1, int $num2) : int {
    return $num1->valor - $num2;
}

echo restar($numero1, 10);

class hola{
    public const name = "holis";
}
    
$jj = new hola();
echo $jj->name;

?>