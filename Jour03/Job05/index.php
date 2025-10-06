<?php
// Compter voyelles/consonnes (gère accents basiques)
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
$len = mb_strlen($str, 'UTF-8');
$voyelles = ['a','e','i','o','u','y','A','E','I','O','U','Y','à','â','ä','é','è','ê','ë','î','ï','ô','ö','ù','û','ü','À','Â','Ä','É','È','Ê','Ë','Î','Ï','Ô','Ö','Ù','Û','Ü'];
$dic = ['consonnes' => 0, 'voyelles' => 0];
for ($i = 0; $i < $len; $i++) {
    $c = mb_substr($str, $i, 1, 'UTF-8');
    if (trim($c) === '') continue;
    if (in_array($c, $voyelles, true)) {
        $dic['voyelles']++;
    } else if (preg_match('/[\p{L}]/u', $c)) {
        $dic['consonnes']++;
    }
}
// Affichage simple en table HTML
echo '<table border="1"><thead><tr><th>Consonnes</th><th>Voyelles</th></tr></thead>';
echo '<tbody><tr><td>' . $dic['consonnes'] . '</td><td>' . $dic['voyelles'] . '</td></tr></tbody></table>';
