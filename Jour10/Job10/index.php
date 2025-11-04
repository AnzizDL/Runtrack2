<?php
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

if ($mysqli->connect_error) {
	die('Erreur de connexion : ' . $mysqli->connect_error);
}

$requete = "SELECT id, nom, id_etage, capacite FROM salles ORDER BY capacite DESC";
$resultat = $mysqli->query($requete);
if (!$resultat) {
	die("Erreur requête : " . $mysqli->error);
}

echo "<table border='1'>";
echo "<tr><th>id</th><th>nom</th><th>id_etage</th><th>capacite</th></tr>";
while ($ligne = $resultat->fetch_assoc()) {
	echo "<tr>";
	echo "<td>" . htmlspecialchars($ligne['id']) . "</td>";
	echo "<td>" . htmlspecialchars($ligne['nom']) . "</td>";
	echo "<td>" . htmlspecialchars($ligne['id_etage']) . "</td>";
	echo "<td>" . htmlspecialchars($ligne['capacite']) . "</td>";
	echo "</tr>";
}
echo "</table>";

$mysqli->close();
?>
