<?php
$message = "";
if (isset($_POST) && isset($_POST['username']) && isset($_POST['password'])) {
$u = $_POST['username'];
$p = $_POST['password'];
if ($u === "John" && $p === "Rambo") {
$message = "C'est pas ma guerre";
} else {
$message = "Votre pire cauchemar";
}
}
?><!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Job 05</title></head>
<body>
<h1>Job 05</h1>
<form method="post">
<label>Username: <input type="text" name="username"></label><br>
<label>Password: <input type="password" name="password"></label><br>
<button type="submit">Se connecter</button>
</form>


<?php if ($message !== "") { echo '<p>' . $message . '</p>'; } ?>
</body>
</html>