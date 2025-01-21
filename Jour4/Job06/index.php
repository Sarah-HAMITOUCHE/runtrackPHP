<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification de Nombre Pair ou Impair</title>
</head>
<body>
    <h1>Formulaire de Vérification : Pair ou Impair</h1>
    <!-- Formulaire HTML -->
    <form method="GET" action="">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit">Vérifier</button>
    </form>

    <?php
    // Vérifier si un nombre a été soumis via GET
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];

        // Vérifier si la valeur entrée est un nombre
        if (is_numeric($nombre)) {
            // Vérifier si le nombre est pair ou impair
            if ($nombre % 2 === 0) {
                echo "<p>Nombre pair</p>";
            } else {
                echo "<p>Nombre impair</p>";
            }
        } else {
            echo "<p>Veuillez entrer un nombre valide.</p>";
        }
    }
    ?>
</body>
</html>
33333