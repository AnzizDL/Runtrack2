<?php

// FONCTION GRAS : Met en gras les mots commençant par une majuscule
function gras($str) {
    $result = ""; // Variable pour stocker le résultat final
    $words = explode(" ", $str); // Divise la chaîne en tableau de mots (séparateur = espace)
    
    // Parcourt chaque mot du tableau
    foreach ($words as $word) {
        if (strlen($word) > 0) { // Vérifie que le mot n'est pas vide
            $firstChar = $word[0]; // Récupère le premier caractère du mot
            // Vérifie si le premier caractère est une majuscule (A-Z)
            if ($firstChar >= 'A' && $firstChar <= 'Z') {
                $result .= "<b>" . $word . "</b>"; // Ajoute le mot entouré de balises <b>
            } else {
                $result .= $word; // Ajoute le mot sans modification
            }
        }
        $result .= " "; // Ajoute un espace après chaque mot
    }
    
    return trim($result); // Supprime les espaces en début/fin et retourne le résultat
}

// FONCTION CESAR : Décale chaque lettre de l'alphabet selon un décalage donné
function cesar($str, $decalage = 2) { // Décalage par défaut = 2
    $result = ""; // Variable pour stocker le résultat final
    $length = strlen($str); // Obtient la longueur de la chaîne
    
    // Parcourt chaque caractère de la chaîne
    for ($i = 0; $i < $length; $i++) {
        $char = $str[$i]; // Récupère le caractère à la position i
        
        // Si c'est une lettre minuscule (a-z)
        if ($char >= 'a' && $char <= 'z') {
            // ord() = code ASCII, chr() = caractère depuis code ASCII
            // Calcule le nouveau caractère avec décalage circulaire (% 26)
            $newChar = chr(((ord($char) - ord('a') + $decalage) % 26) + ord('a'));
            $result .= $newChar; // Ajoute le nouveau caractère
        // Si c'est une lettre majuscule (A-Z)
        } elseif ($char >= 'A' && $char <= 'Z') {
            // Même principe mais pour les majuscules
            $newChar = chr(((ord($char) - ord('A') + $decalage) % 26) + ord('A'));
            $result .= $newChar; // Ajoute le nouveau caractère
        } else {
            $result .= $char; // Si ce n'est pas une lettre, garde le caractère tel quel
        }
    }
    
    return $result; // Retourne la chaîne transformée
}

// FONCTION PLATEFORME : Ajoute "_" aux mots finissant par "me"
function plateforme($str) {
    $result = ""; // Variable pour stocker le résultat final
    $words = explode(" ", $str); // Divise la chaîne en tableau de mots
    
    // Parcourt chaque mot du tableau
    foreach ($words as $word) {
        if (strlen($word) >= 2) { // Vérifie que le mot a au moins 2 caractères
            $lastTwo = substr($word, -2); // Récupère les 2 derniers caractères
            // Vérifie si les 2 derniers caractères sont "me" (insensible à la casse)
            if (strtolower($lastTwo) == "me") {
                $result .= $word . "_"; // Ajoute le mot + underscore
            } else {
                $result .= $word; // Ajoute le mot sans modification
            }
        } else {
            $result .= $word; // Si moins de 2 caractères, garde tel quel
        }
        $result .= " "; // Ajoute un espace après chaque mot
    }
    
    return trim($result); // Supprime les espaces en début/fin et retourne
}

// TRAITEMENT DU FORMULAIRE
$output = ""; // Variable pour stocker le résultat à afficher

// Vérifie si les données du formulaire ont été envoyées (méthode POST)
if (isset($_POST['str']) && isset($_POST['fonction'])) {
    $str = $_POST['str']; // Récupère le texte saisi
    $fonction = $_POST['fonction']; // Récupère la fonction choisie
    
    // Appelle la fonction correspondante selon le choix
    if ($fonction == "gras") {
        $output = gras($str); // Applique la fonction gras
    } elseif ($fonction == "cesar") {
        $output = cesar($str); // Applique la fonction cesar
    } elseif ($fonction == "plateforme") {
        $output = plateforme($str); // Applique la fonction plateforme
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Job 07 - Transformateur de texte</title>
</head>
<body>
    <h1>Transformateur de texte</h1>
    
    <!-- FORMULAIRE : Envoie les données en POST -->
    <form method="post">
        <!-- CHAMP TEXTE : Input pour saisir le texte à transformer -->
        <label for="str">Texte :</label><br>
        <!-- value= : Garde la valeur saisie après soumission du formulaire -->
        <input type="text" id="str" name="str" value="<?php echo isset($_POST['str']) ? $_POST['str'] : ''; ?>"><br><br>
        
        <!-- LISTE DÉROULANTE : Choix de la fonction à appliquer -->
        <label for="fonction">Fonction :</label><br>
        <select id="fonction" name="fonction">
            <!-- Option GRAS : selected= garde la sélection après soumission -->
            <option value="gras" <?php echo (isset($_POST['fonction']) && $_POST['fonction'] == 'gras') ? 'selected' : ''; ?>>Gras</option>
            <!-- Option CESAR -->
            <option value="cesar" <?php echo (isset($_POST['fonction']) && $_POST['fonction'] == 'cesar') ? 'selected' : ''; ?>>César</option>
            <!-- Option PLATEFORME -->
            <option value="plateforme" <?php echo (isset($_POST['fonction']) && $_POST['fonction'] == 'plateforme') ? 'selected' : ''; ?>>Plateforme</option>
        </select><br><br>
        
        <!-- BOUTON DE SOUMISSION : Envoie le formulaire -->
        <button type="submit">Transformer</button>
    </form>
    
    <!-- AFFICHAGE DU RÉSULTAT : Seulement si $output n'est pas vide -->
    <?php if ($output): ?>
        <h2>Résultat :</h2>
        <p><?php echo $output; ?></p> <!-- Affiche le texte transformé -->
    <?php endif; ?>
</body>
</html>