<?php
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

if ($mysqli->connect_error) {
	die('Erreur de connexion : ' . $mysqli->connect_error);
}

$requete = "SELECT salles.nom AS nom_salle, etage.nom AS nom_etage FROM salles INNER JOIN etage ON salles.id_etage = etage.id";
$resultat = $mysqli->query($requete);
if (!$resultat) {
	die("Erreur requête : " . $mysqli->error);
}

echo "<table border='1'>";
echo "<tr><th>nom_salle</th><th>nom_etage</th></tr>";
while ($ligne = $resultat->fetch_assoc()) {
	echo "<tr>";
	echo "<td>" . htmlspecialchars($ligne['nom_salle']) . "</td>";
	echo "<td>" . htmlspecialchars($ligne['nom_etage']) . "</td>";
	echo "</tr>";
}
echo "</table>";

$mysqli->close();
?>
