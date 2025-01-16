<?php
// Définir la chaîne
$str = "Les choses que l'on Possède finissent par nous posséder.";

// Inverser la chaîne
$reversedStr = '';
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $reversedStr .= $str[$i];
}

// Afficher la chaîne inversée
echo $reversedStr;
?>
