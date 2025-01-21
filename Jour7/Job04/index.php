<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['connexion']) && !empty(trim($_POST['prenom']))) {
        setcookie('prenom', htmlspecialchars(trim($_POST['prenom'])), time() + 3600); // Cookie valide 1 heure
    } elseif (isset($_POST['deco'])) {
        setcookie('prenom', '', time() - 3600); // Expire le cookie
    }
}
$prenom = $_COOKIE['prenom'] ?? null;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <?php if ($prenom): ?>
        <h1>Bonjour <?= htmlspecialchars($prenom) ?> !</h1>
        <form method="post">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php else: ?>
        <form method="post">
            <input type="text" name="prenom" placeholder="Entrez votre prénom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>
</html>
