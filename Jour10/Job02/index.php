<?php
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

if ($mysqli->connect_error) {
    die('Erreur de connexion : ' . $mysqli->connect_error);
}

$requete = "SELECT nom, capacite FROM salles";
$resultat = $mysqli->query($requete);
if (!$resultat) {
    die("Erreur requête : " . $mysqli->error);
}

echo "<table border='1'>";
echo "<tr><th>nom</th><th>capacite</th></tr>";

while ($ligne = $resultat->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $ligne['nom'] . "</td>";
    echo "<td>" . $ligne['capacite'] . "</td>";
    echo "</tr>";
}

echo "</table>";
