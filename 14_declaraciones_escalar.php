<?php
function calcular_area_triangulo(int $base, int $altura, string $nombre){
        return $nombre . ($base * $altura) / 2;
}

echo calcular_area_triangulo(10,12,"area del triangulo es: ")

?>