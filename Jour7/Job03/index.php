<?php
session_start();
$_SESSION['prenoms'] = $_SESSION['prenoms'] ?? [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['prenom'])) {
        $_SESSION['prenoms'][] = htmlspecialchars(trim($_POST['prenom']));
    } elseif (isset($_POST['reset'])) {
        $_SESSION['prenoms'] = [];
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prénoms</title>
</head>
<body>
    <form method="post">
        <input type="text" name="prenom" placeholder="Entrez un prénom" required>
        <button type="submit">Ajouter</button>
        <button type="submit" name="reset">Reset</button>
    </form>

    <ul>
        <?php foreach ($_SESSION['prenoms'] as $prenom): ?>
            <li><?= htmlspecialchars($prenom) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
