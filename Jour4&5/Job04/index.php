<?php
?><!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Job 04</title></head>
<body>
<h1>Job 04</h1>
<form method="post">
<label>Prénom: <input type="text" name="prenom"></label><br>
<label>Nom: <input type="text" name="nom"></label><br>
<button type="submit">Envoyer</button>
</form>


<h2>Arguments POST</h2>
<table border="1" cellpadding="6" cellspacing="0">
<tr><th>Argument</th><th>Valeur</th></tr>
<?php if (isset($_POST)) { foreach ($_POST as $k => $v) { ?>
<tr>
<td><?php echo $k; ?></td>
<td><?php echo $v; ?></td>
</tr>
<?php } } ?>
</table>
</body>
</html>