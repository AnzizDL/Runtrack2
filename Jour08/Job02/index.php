<?php
if (isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() + 3600);
    $_COOKIE['nbvisites'] = 0;
}

if (!isset($_COOKIE['nbvisites'])) {
    $_COOKIE['nbvisites'] = 0;
}

$_COOKIE['nbvisites']++;
setcookie('nbvisites', $_COOKIE['nbvisites'], time() + 3600);

echo $_COOKIE['nbvisites'];
?>

<form method="post">
    <button name="reset">reset</button>
</form>