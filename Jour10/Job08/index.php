<?php
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

if ($mysqli->connect_error) {
	die('Erreur de connexion : ' . $mysqli->connect_error);
}

$requete = "SELECT SUM(superficie) AS superficie_totale FROM etage";
$resultat = $mysqli->query($requete);
if (!$resultat) {
	die("Erreur requête : " . $mysqli->error);
}

$row = $resultat->fetch_assoc();
echo "<table border='1'>";
echo "<tr><th>superficie_totale</th></tr>";
echo "<tr><td>" . htmlspecialchars($row['superficie_totale']) . "</td></tr>";
echo "</table>";

$mysqli->close();
?>
