<?php
function ligne($char, $n) {
$s = "";
$i = 0;
while ($i < $n) { $s = $s . $char; $i = $i + 1; }
return $s;
}


$w = 0; $h = 0; $ok = false;
if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {
$w = $_GET['largeur'] + 0;
$h = $_GET['hauteur'] + 0;
if ($w >= 2 && $h >= 2) { $ok = true; }
}


function maison_ascii($w, $h) {
$out = "";
$row = 0;
while ($row < $h) {
$espaces = ($h - 1) - $row; 
$milieu = ($row * 2) + 1; 
$i = 0; $line = "";
while ($i < $espaces) { $line = $line . " "; $i = $i + 1; }
$line = $line . "/"; 
$i = 0; while ($i < $milieu) { $line = $line . "^"; $i = $i + 1; }
$line = $line . "\\"; 
$out = $out . $line . "\n";
$row = $row + 1;
}
$r = 0;
while ($r < $h) {
$line = "|";
$i = 0; while ($i < $w) { $line = $line . " "; $i = $i + 1; }
$line = $line . "|\n";
$out = $out . $line;
$r = $r + 1;
}
$out = $out . "+" . ligne("_", $w) . "+\n";
return $out;
}
?><!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Job 07</title>
<style>pre{line-height:1; font-family: monospace; font-size: 14px;}</style>
</head>
<body>
<h1>Job 07</h1>
<form method="get">
<label>Largeur: <input type="text" name="largeur" value="10"></label>
<label>Hauteur: <input type="text" name="hauteur" value="5"></label>
<button type="submit">Dessiner</button>
</form>


<?php if ($ok) { echo '<pre>' . maison_ascii($w, $h) . '</pre>'; }
else { echo '<p>Entrez une largeur et une hauteur (≥ 2).</p>'; } ?>
</body>
</html>