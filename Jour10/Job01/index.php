<?php
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

if ($mysqli->connect_error) {
    die('Erreur de connexion : ' . $mysqli->connect_error);
}

$requete = "SELECT * FROM étudiants";
$resultat = $mysqli->query($requete);

echo "<table border='1'>";
echo "<tr><th>id</th><th>prenom</th><th>nom</th><th>naissance</th><th>sexe</th></tr>";

while ($ligne = $resultat->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $ligne['id'] . "</td>";
    echo "<td>" . $ligne['prenom'] . "</td>";
    echo "<td>" . $ligne['nom'] . "</td>";
    echo "<td>" . $ligne['naissance'] . "</td>";
    echo "<td>" . $ligne['sexe'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
