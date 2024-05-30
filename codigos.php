<?php
function calcula_semieje() {
    $T = 29.5; // años
    $UA_to_km = 150e6; // 1 UA en km
    $a = pow($T, 2);
    $a = pow($a, 1/3) * $UA_to_km;
    $resultado = number_format($a, 2) . ' Km.';

    return $resultado;
}

// Ejemplo de cómo llamar a la función y mostrar el resultado
echo calcula_semieje();
?>
