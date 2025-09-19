<?php
$booleen = true;
$entier = 42;
$chaine = "Hello World";
$virgule = 3.14;

?>

<table border="1">
    <tr>
        <th>Type</th>
        <th>Nom</th>
        <th>Valeur</th>
    </tr>
    <tr>
        <td>Boolean</td>
        <td>boolean</td>
        <td><?php echo $booleen ? 'true' : 'false'; ?></td>
    </tr>
    <tr>
        <td>Entier</td>
        <td>entier</td>
        <td><?php echo $entier; ?></td>
    </tr>
    <tr>
        <td>Chaîne de caractères</td>
        <td>chaine</td>
        <td><?php echo $chaine; ?></td>
    </tr>
    <tr>
        <td>Nombre à virgule flottante</td>
        <td>virgule</td>
        <td><?php echo $virgule; ?></td>
    </tr>
</table>
