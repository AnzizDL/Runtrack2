<?php

function calcule($a, $operation, $b) {
    if ($operation == "+") {
        return $a + $b;
    } elseif ($operation == "-") {
        return $a - $b;
    } elseif ($operation == "*") {
        return $a * $b;
    } elseif ($operation == "/") {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Erreur: Division par zéro";
        }
    } elseif ($operation == "%") {
        if ($b != 0) {
            return $a % $b;
        } else {
            return "Erreur: Modulo par zéro";
        }
    } else {
        return "Erreur: Opération non supportée";
    }
}

// Tests de la fonction
echo calcule(10, "+", 5) . "<br>";  // 15
echo calcule(10, "-", 3) . "<br>";  // 7
echo calcule(4, "*", 6) . "<br>";   // 24
echo calcule(20, "/", 4) . "<br>";  // 5
echo calcule(17, "%", 5) . "<br>";  // 2

?>