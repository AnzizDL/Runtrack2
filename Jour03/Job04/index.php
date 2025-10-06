<?php
$str = "Dans l'espace, personne ne vous entend crier";
$compte = 0;
while (isset($str[$compte])) {
    $compte++;
}
echo $compte;
