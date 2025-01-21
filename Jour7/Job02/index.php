<?php
// Créez un cookie “nbvisites”. À chaque fois que la page est visitée, ajouter 1. Affichez le contenu du cookie. Ajoutez un bouton “reset” qui permet de réinitialiser le compteur.
$nbvisites = isset($_POST['reset']) ? 0 : ($_COOKIE['nbvisites'] ?? 0) + 1;
setcookie('nbvisites', $nbvisites, time() + 3600 * 24 * 30);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de Visites</title>
</head>
<body>
    <h1>Compteur de Visites</h1>
    <p>Nombre de visites : <?php echo $nbvisites; ?></p>
    <form method="POST">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>
