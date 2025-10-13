<?php
$nb = 0;
if (isset($_POST)) {
foreach ($_POST as $k => $v) {
$nb = $nb + 1;
}
}
?><!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Job 03</title></head>
<body>
<h1>Job 03</h1>
<form method="post">
<label>Ville: <input type="text" name="ville"></label><br>
<label>Pays: <input type="text" name="pays"></label><br>
<button type="submit">Envoyer</button>
</form>


<p>Le nombre d'argument POST envoyé est : <?php echo $nb; ?></p>
</body>
</html>