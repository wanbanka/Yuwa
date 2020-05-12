<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>No password</title>
</head>
<body>
    <?php
   
    include('bdd/connection_bdd.php');
    
    $mdp = $_GET['m'];
    $pseudo = $_GET['p'];
    $recherche = $bdd->prepare('SELECT mail, mot_de_passe FROM inscription WHERE mail = :mail');
    $recherche->execute(array('mail' => $pseudo));
    $donnees = $recherche->fetch();
    if($pseudo !== '' && $mdp !== '' && $donnees['mail'] == '' && !password_verify($mdp, $donnees['mot_de_passe'])){
        echo "<p>Votre mot de passe de confirmation ne correspond pas.</p>";
    }
    ?>
</body>
</html>