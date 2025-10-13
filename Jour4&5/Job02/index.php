<?php
?><!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Job 02</title></head>
<body>
<h1>Job 02</h1>
<form method="get">
<label>Champ 1: <input type="text" name="a"></label><br>
<label>Champ 2: <input type="text" name="b"></label><br>
<label>Champ 3: <input type="text" name="c"></label><br>
<button type="submit">Envoyer</button>
</form>


<h2>Arguments GET</h2>
<table border="1" cellpadding="6" cellspacing="0">
<tr><th>Argument</th><th>Valeur</th></tr>
<?php if (isset($_GET)) { foreach ($_GET as $k => $v) { ?>
<tr>
<td><?php echo $k; ?></td>
<td><?php echo $v; ?></td>
</tr>
<?php } } ?>
</table>
</body>
</html>