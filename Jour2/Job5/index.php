<?php
// Fonction pour vérifier si un nombre est premier
function estPremier($nombre) {
    if ($nombre <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($nombre); $i++) {
        if ($nombre % $i == 0) {
            return false;
        }
    }
    return true;
}

// Affichage des nombres premiers jusqu'à 1000
for ($i = 2; $i <= 1000; $i++) {
    if (estPremier($i)) {
        echo "$i<br>";
    }
}
?>
