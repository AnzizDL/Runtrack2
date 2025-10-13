<?php
$resultat = "";
if (isset($_GET) && isset($_GET['nombre'])) {
$n = $_GET['nombre'];
$estEntier = true;
$i = 0;
if ($n === "") { $estEntier = false; }
else {
if ($n[0] === '-' || $n[0] === '+') { $i = 1; }
for (; $i < strlen($n); $i = $i + 1) {
if ($n[$i] < '0' || $n[$i] > '9') { $estEntier = false; }
}
}
if ($estEntier) {
$val = $n + 0;
if (($val % 2) === 0) { $resultat = "Nombre pair"; }
else { $resultat = "Nombre impair"; }
} else {
$resultat = "Veuillez entrer un entier";
}
}
?><!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Job 06</title></head>
<body>
<h1>Job 06</h1>
<form method="get">
<label>Nombre: <input type="text" name="nombre"></label>
<button type="submit">Tester</button>
</form>
<p><?php echo $resultat; ?></p>
</body>
</html>