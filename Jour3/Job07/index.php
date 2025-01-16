<?php
// Définir la chaîne
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Vérifier si la chaîne n'est pas vide
if (strlen($str) > 0) {
    // Construire la nouvelle chaîne
    $newStr = '';
    for ($i = 1; $i < strlen($str); $i++) {
        $newStr .= $str[$i];
    }
    // Ajouter le premier caractère à la fin
    $newStr .= $str[0];

    // Afficher la nouvelle chaîne
    echo $newStr;
} else {
    echo "La chaîne est vide.";
}
?>
