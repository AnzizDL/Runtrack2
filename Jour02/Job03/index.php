<?php
  for ($i = 0; $i <= 100; $i++) {
    if ($i == 42) {
        echo 'La Plateforme_<br />';
        continue;
    }
    $txt = (string)$i;
    if ($i >= 0 && $i <= 20) {
        $txt = '<i>' . $txt . '</i>';
    }
    if ($i >= 25 && $i <= 50) {
        $txt = '<u>' . $txt . '</u>';
    }
    echo $txt . '<br />';
}
