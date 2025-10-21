<?php

function leetSpeak($str) {
    $result = "";
    $length = strlen($str);
    
    for ($i = 0; $i < $length; $i++) {
        $char = $str[$i];
        
        if ($char == "A" || $char == "a") {
            $result .= "4";
        } elseif ($char == "B" || $char == "b") {
            $result .= "8";
        } elseif ($char == "E" || $char == "e") {
            $result .= "3";
        } elseif ($char == "G" || $char == "g") {
            $result .= "6";
        } elseif ($char == "L" || $char == "l") {
            $result .= "1";
        } elseif ($char == "S" || $char == "s") {
            $result .= "5";
        } elseif ($char == "T" || $char == "t") {
            $result .= "7";
        } else {
            $result .= $char;
        }
    }
    
    return $result;
}

// Tests de la fonction
echo leetSpeak("Hello World") . "<br>";      // H311o Wor1d
echo leetSpeak("LaPlateforme") . "<br>";     // 14P147form3
echo leetSpeak("Bonjour les amis") . "<br>"; // 8onjour 135 4mi5

?>