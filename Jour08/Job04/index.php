<?php
if (isset($_POST['connexion'])) {
    setcookie('prenom', $_POST['prenom'], time() + 3600);
    $_COOKIE['prenom'] = $_POST['prenom'];
}

if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600);
    unset($_COOKIE['prenom']);
}

if (isset($_COOKIE['prenom']) && $_COOKIE['prenom'] != '') {
    echo "Bonjour " . $_COOKIE['prenom'] . " !";
    ?>
    <form method="post">
        <button name="deco">Déconnexion</button>
    </form>
    <?php
} else {
    ?>
    <form method="post">
        <input type="text" name="prenom">
        <button name="connexion">connexion</button>
    </form>
    <?php
}
?>