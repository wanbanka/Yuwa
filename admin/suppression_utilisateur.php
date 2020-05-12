<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Supprimer</title>
</head>
<body>
    <p>Voulez-vous réellement supprimer cet utilisateur ?</p>
    <?php 
    $id = intval($_GET['id']);
    echo "<a href=\"confirmation_utilisateur.php?id=".$id."\">Oui</a>"; ?>
    <a href="moderation_utilisateur.php">Non</a>
</body>
</html>