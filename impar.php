<?php

// Desafio numeros ímpares Alura
for ($i = 0;$i <= 100;$i += 1){
    if ($i % 2 == 0){
        continue;
    } else {
        echo "#$i" . PHP_EOL;
    }
}
