<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau PHP Pair ou Impair</title>
</head>
<body>
    <h1>Analyse des nombres (Pair ou Impair)</h1>
    <?php
    // Tableau des nombres
    $nombres = [200, 204, 173, 98, 171, 404, 459];
    ?>

    <!-- Tableau HTML pour afficher les nombres -->
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Résultat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Parcours du tableau pour analyser chaque nombre
            foreach ($nombres as $nombre) {
                echo "<tr>";
                echo "<td>$nombre</td>";
                // Vérification si le nombre est pair ou impair
                if ($nombre % 2 == 0) {
                    echo "<td>$nombre est paire</td>";
                } else {
                    echo "<td>$nombre est impaire</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
