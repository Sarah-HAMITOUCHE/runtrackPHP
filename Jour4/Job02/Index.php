<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arguments $_GET</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Liste des arguments $_GET</h1>
    <?php
    // Vérifier s'il y a des arguments dans $_GET
    if (!empty($_GET)) {
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Argument</th>';
        echo '<th>Valeur</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        
        // Parcourir $_GET et afficher les clés et valeurs
        foreach ($_GET as $key => $value) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($key) . '</td>';
            echo '<td>' . htmlspecialchars($value) . '</td>';
            echo '</tr>';
        }
        
        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<p style="text-align: center;">Aucun argument trouvé dans $_GET.</p>';
    }
    ?>
</body>
</html>
