<?php
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

if ($mysqli->connect_error) {
	die('Erreur de connexion : ' . $mysqli->connect_error);
}

$requete = "SELECT AVG(capacite) AS capacite_moyenne FROM salles";
$resultat = $mysqli->query($requete);
if (!$resultat) {
	die("Erreur requête : " . $mysqli->error);
}

$row = $resultat->fetch_assoc();
echo "<table border='1'>";
echo "<tr><th>capacite_moyenne</th></tr>";
echo "<tr><td>" . htmlspecialchars($row['capacite_moyenne']) . "</td></tr>";
echo "</table>";

$mysqli->close();
?>
