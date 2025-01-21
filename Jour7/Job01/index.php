<?php
session_start();
$_SESSION['nbvisites'] = isset($_POST['reset']) ? 0 : ($_SESSION['nbvisites'] ?? 0) + 1;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de Visites</title>
</head>
<body>
    <h1>Compteur de Visites</h1>
    <p>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?></p>
    <form method="POST">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>

