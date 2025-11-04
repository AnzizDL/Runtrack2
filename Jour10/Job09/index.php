<?php
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

if ($mysqli->connect_error) {
	die('Erreur de connexion : ' . $mysqli->connect_error);
}

$requete = "SELECT SUM(capacite) AS capacite_totale FROM salles";
$resultat = $mysqli->query($requete);
if (!$resultat) {
	die("Erreur requête : " . $mysqli->error);
}

$row = $resultat->fetch_assoc();
echo "<table border='1'>";
echo "<tr><th>capacite_totale</th></tr>";
echo "<tr><td>" . htmlspecialchars($row['capacite_totale']) . "</td></tr>";
echo "</table>";

$mysqli->close();
?>
