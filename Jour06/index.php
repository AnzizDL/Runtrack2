<?php

$style = isset($_POST['style']) ? $_POST['style'] : 'style1';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 06 - Sélecteur de Style</title>
  
    <link rel="stylesheet" href="<?php echo $style; ?>.css">
</head>
<body>
    <div class="container">
        <h1>Sélecteur de Style CSS</h1>
        
 
        <form method="post" class="style-form">
            <label for="style">Choisissez un style :</label>
            <select name="style" id="style" class="style-select">
                <option value="style1" <?php echo ($style == 'style1') ? 'selected' : ''; ?>>Style 1 - Bleu Moderne</option>
                <option value="style2" <?php echo ($style == 'style2') ? 'selected' : ''; ?>>Style 2 - Rouge Élégant</option>
                <option value="style3" <?php echo ($style == 'style3') ? 'selected' : ''; ?>>Style 3 - Vert Nature</option>
            </select>
            <button type="submit" class="submit-btn">Appliquer le Style</button>
        </form>
        

        <div class="demo-content">
            <h2>Contenu de démonstration</h2>
            <p>Ce texte change d'apparence selon le style sélectionné.</p>
            <div class="demo-box">
                <p>Boîte de démonstration avec du contenu stylisé.</p>
            </div>
        </div>
    </div>
</body>
</html>