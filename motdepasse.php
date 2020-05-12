<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mot de passe</title>
</head>
<body>
    <?php
    
    include('bdd/connection_bdd.php');
    
    $mdp = $_GET['m'];
    $confirmer = $_GET['c'];
    if($mdp !== '' && $confirmer !== '' && $mdp !== $confirmer){
        echo "<p>Votre mot de passe de confirmation ne correspond pas.</p>";
    }
    ?>
</body>
</html>