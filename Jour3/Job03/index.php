<?php
// Définir la chaîne
$str = "I'm sorry Dave I'm afraid I can't do that";

// Définir les voyelles
$vowels = "aeiouAEIOU";

// Parcourir la chaîne et afficher uniquement les voyelles
for ($i = 0; $i < strlen($str); $i++) {
    if (strpos($vowels, $str[$i]) !== false) {
        echo $str[$i];
    }
}
?>

