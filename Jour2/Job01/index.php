<?php
for ($i = 0; $i <= 1337; $i++) {
    if ($i == 42) {
        // Affiche le nombre 42 en gras et souligné
        echo "<strong><u>$i</u></strong><br>";
    } else {
        // Affiche tous les autres nombres avec un retour à la ligne
        echo "$i<br>";
    }
}
?>
