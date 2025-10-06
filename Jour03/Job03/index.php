<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = 'aeiouyAEIOUY';
$len = strlen($str);
for ($i = 0; $i < $len; $i++) {
    $c = $str[$i];
    if (strpos($voyelles, $c) !== false) {
        echo $c;
    }
}