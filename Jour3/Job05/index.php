<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comptage Voyelles et Consonnes</title>
</head>
<body>
    <h1>Comptage des Voyelles et Consonnes</h1>
    <?php
    // Définir la chaîne
    $str = "On n est pas le meilleur quand on le croit mais quand on le sait";

    // Définir les voyelles
    $voyelles = "aeiouyAEIOUY";

    // Initialiser le dictionnaire
    $dic = ["consonnes" => 0, "voyelles" => 0];

    // Parcourir la chaîne pour compter les voyelles et les consonnes
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (ctype_alpha($char)) { // Vérifie si le caractère est une lettre
            if (strpos($voyelles, $char) !== false) {
                $dic["voyelles"]++;
            } else {
                $dic["consonnes"]++;
            }
        }
    }
    ?>

    <!-- Tableau HTML pour afficher les résultats -->
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dic["voyelles"]; ?></td>
                <td><?php echo $dic["consonnes"]; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
