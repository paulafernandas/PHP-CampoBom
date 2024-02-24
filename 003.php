<?php 

$contador = 1;
$numero = 7;

    echo "Tabuada de multiplicação para o número $numero:\n";

    while ($contador <= 10) {
        $resultado = $numero * $contador;
        echo "$numero x $contador = $resultado\n";
        $contador++;
    }