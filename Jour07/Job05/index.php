<?php

function occurrences($str, $char) {
    $count = 0;
    $length = strlen($str);
    
    for ($i = 0; $i < $length; $i++) {
        if ($str[$i] == $char) {
            $count++;
        }
    }
    
    return $count;
}

// Test de la fonction
echo occurrences("Bonjour", "o") . "<br>";  // 2
echo occurrences("Hello LaPlateforme", "e") . "<br>";  // 3
echo occurrences("Programming", "m") . "<br>";  // 2

?>