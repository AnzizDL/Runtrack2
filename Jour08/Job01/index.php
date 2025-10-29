<?php
session_start();

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}

if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}

$_SESSION['nbvisites']++;

echo $_SESSION['nbvisites'];
?>

<form method="post">
    <button name="reset">reset</button>
</form>