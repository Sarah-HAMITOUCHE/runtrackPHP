<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur d'Arguments $_GET</title>
</head>
<body>
    <h1>Formulaire GET</h1>
    <!-- Formulaire HTML -->
    <form method="GET" action="">
        <label for="arg1">Argument 1 :</label>
        <input type="text" id="arg1" name="arg1"><br><br>

        <label for="arg2">Argument 2 :</label>
        <input type="text" id="arg2" name="arg2"><br><br>

        <label for="arg3">Argument 3 :</label>
        <input type="text" id="arg3" name="arg3"><br><br>

        <button type="submit">Envoyer</button>
    </form>

    <h2>Résultat :</h2>
    <?php
    // Compter le nombre d'arguments dans $_GET
    $nbArguments = count($_GET);

    // Afficher le résultat
    echo "Nombre d'arguments envoyés via \$_GET : $nbArguments<br>";

    // Optionnel : Afficher chaque argument et sa valeur
    if ($nbArguments > 0) {
        echo "<ul>";
        foreach ($_GET as $key => $value) {
            echo "<li><strong>$key :</strong> $value</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
