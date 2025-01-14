<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i == 42) {
        // Affiche "La Plateforme_" à la place de 42
        echo "La Plateforme_<br>";
    } elseif ($i >= 0 && $i <= 20) {
        // Si le nombre est entre 0 et 20, l'affiche en italique
        echo "<i>$i</i><br>";
    } elseif ($i >= 25 && $i <= 50) {
        // Si le nombre est entre 25 et 50, le souligne
        echo "<u>$i</u><br>";
    } else {
        // Affiche les autres nombres normalement
        echo "$i<br>";
    }
}
?>
