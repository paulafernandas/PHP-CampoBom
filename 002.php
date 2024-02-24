<?php

$A = 20;
$B = 40;

 if ($A < $B) {
     echo "A é menor que B";
 } elseif ($A == $B) {
     echo "A é igual a B";
 } else {
     echo "A é maior que B";
 }

 $contador = 1;

 while ($contador <= 15) {
     echo "#$contador" . PHP_EOL;
     $contador++;
 }

$limite = 30;

for ($i = 3; $i <= $limite; $i += 3) {
     echo $i . " ";
 }

$limite=100;

for ($i = 14; $i <= $limite; $i += 14) {
        echo $i . " ";
    }

    $contador = 1;

    echo "Tabuada de multiplicação para o número $numero:\n";

    while ($contador <= 10) {
        $resultado = $numero * $contador;
        echo "$numero x $contador = $resultado\n";
        $contador++;
    }

$numeroEscolhido = 7;

