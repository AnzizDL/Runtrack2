<?php
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

if ($mysqli->connect_error) {
	die('Erreur de connexion : ' . $mysqli->connect_error);
}

$requete = "SELECT prenom FROM `étudiants` WHERE prenom LIKE 'T%'";
$resultat = $mysqli->query($requete);
if (!$resultat) {
	die("Erreur requête : " . $mysqli->error);
}

echo "<table border='1'>";
echo "<tr><th>prenom</th></tr>";
while ($ligne = $resultat->fetch_assoc()) {
	echo "<tr>";
	echo "<td>" . htmlspecialchars($ligne['prenom']) . "</td>";
	echo "</tr>";
}
echo "</table>";

$mysqli->close();
?>
