<?php
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

if ($mysqli->connect_error) {
	die('Erreur de connexion : ' . $mysqli->connect_error);
}

$requete = "SELECT prenom, nom, naissance FROM `étudiants` WHERE naissance > CURRENT_DATE() - INTERVAL 18 YEAR";
$resultat = $mysqli->query($requete);
if (!$resultat) {
	die("Erreur requête : " . $mysqli->error);
}

echo "<table border='1'>";
echo "<tr><th>prenom</th><th>nom</th><th>naissance</th></tr>";
while ($ligne = $resultat->fetch_assoc()) {
	echo "<tr>";
	echo "<td>" . htmlspecialchars($ligne['prenom']) . "</td>";
	echo "<td>" . htmlspecialchars($ligne['nom']) . "</td>";
	echo "<td>" . htmlspecialchars($ligne['naissance']) . "</td>";
	echo "</tr>";
}
echo "</table>";

$mysqli->close();
?>
