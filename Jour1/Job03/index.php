<?php
// Déclaration de variables avec des types primitifs
$booleanVar = true;          // Type boolean
$intVar = 42;                // Type entier
$stringVar = "LaPlateforme"; // Type chaîne de caractères
$floatVar = 3.14;            // Type nombre à virgule flottante
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types de Variables en PHP</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1 style="text-align: center;">Tableau des Variables PHP</h1>

    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Boolean</td>
                <td>$booleanVar</td>
                <td><?php echo $booleanVar ? 'true' : 'false'; ?></td>
            </tr>
            <tr>
                <td>Entier</td>
                <td>$intVar</td>
                <td><?php echo $intVar; ?></td>
            </tr>
            <tr>
                <td>Chaîne de caractères</td>
                <td>$stringVar</td>
                <td><?php echo $stringVar; ?></td>
            </tr>
            <tr>
                <td>Nombre à virgule flottante</td>
                <td>$floatVar</td>
                <td><?php echo $floatVar; ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>
