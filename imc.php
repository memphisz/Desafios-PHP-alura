<?php

$peso = 60;
$alt  = 1.69;

$imc = $peso/($alt * $alt);
if ($imc < 17) {
    echo "Muito abaixo do peso. vai comer porra!";
} 
elseif ($imc <= 24) {
    echo "Peso normal truta fica de boa xD";
}
elseif ($imc <= 34) {
    echo "Voce ta obeso caralho vai p academia urgente";
}
else echo "Número inválido";
