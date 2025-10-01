<?php
for ($n = 2; $n <= 1000; $n++) {
    $premier = true;
    for ($d = 2; $d * $d <= $n; $d++) {
        if ($n % $d == 0) {
            $premier = false;
            break;
        }
    }
    if ($premier) {
        echo $n . '<br />';
    }
}
