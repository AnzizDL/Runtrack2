<?php
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

if ($mysqli->connect_error) {
	die('Erreur de connexion : ' . $mysqli->connect_error);
}

$requete = "SELECT COUNT(*) AS nb_etudiants FROM `étudiants`";
$resultat = $mysqli->query($requete);
if (!$resultat) {
	die("Erreur requête : " . $mysqli->error);
}

$row = $resultat->fetch_assoc();
echo "<table border='1'>";
echo "<tr><th>nb_etudiants</th></tr>";
echo "<tr><td>" . htmlspecialchars($row['nb_etudiants']) . "</td></tr>";
echo "</table>";

$mysqli->close();
?>
