<?php
$nums = [200, 204, 173, 98, 171, 404, 459];
foreach ($nums as $n) {
    if ($n % 2 == 0) {
        echo $n . ' est paire<br />';
    } else {
        echo $n . ' est impaire<br />';
    }
}
