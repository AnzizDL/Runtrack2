<?php
$nb = 0;
if (isset($_GET)) {
foreach ($_GET as $k => $v) {
$nb = $nb + 1;
}
}
?><!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Job 01</title></head>
<body>
<h1>Job 01</h1>
<form method="get">
<label>Nom: <input type="text" name="nom"></label><br>
<label>Prénom: <input type="text" name="prenom"></label><br>
<button type="submit">Envoyer</button>
</form>


<p>Le nombre d'argument GET envoyé est : <?php echo $nb; ?></p>
</body>
</html>