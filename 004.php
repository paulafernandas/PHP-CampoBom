<?php

// $notaA = 9;
// $notaB = 3;
// $mediaDesejada = 7;

// $media = ($notaA+$notaB)/2;

// if ($media>= $mediaDesejada){
//     echo "Parabéns! Você está aprovado!";
// }else{
//     echo "Sinto muito, mas você está de recuperação.";
// }

// $usuario = "paula_fernanda";
// $senha= 12345;

// $usuarioCorreto = "Operador01";
// $senhaCorreta = 123;

// if ($usuario == $usuarioCorreto && $senha == $senhaCorreta){
//     echo "Login realizado com sucesso!";
// } else {
//     echo "Login inválido!";
// }

$valor= 200;

if ($valor>=100){
    $desconto = $valor *0.1;
    $valorFinal = $valor - $desconto;
    echo "Desconto aplicado: $valorFinal";
} else {
    echo "Sua compra não atinge o valor minímo para desconto";
}
