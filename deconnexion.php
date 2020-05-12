<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Deconnexion</title>
    <meta name="description" content="Ce site rassemble des articles et des vidéos pour vous aidez à gérer votre stress et votre anciété"/>
    <meta name="keywords" content="stress, anxiété, gérer, combattre, santé, étudiants, articles, vidéos"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/stylegeneral.css">
</head>
<body>
  
   <div class="deco">
   <?php
       
        include('bdd/connection_bdd.php');
        
    $identite = intval($_SESSION['id']);
    $utilisateur = $bdd->prepare('SELECT pseudo FROM inscription WHERE id = :identite');
    $utilisateur->execute(array('identite' => $identite));
    $donnees = $utilisateur->fetch();
    ?>
    <p>Voulez-vous vraiment vous déconnecter, <?php echo $donnees['pseudo']; ?> ?</p>
    <?php
    $utilisateur->closeCursor();
    ?>
    <a href="deconnexion2.php">Oui</a>
    <a href="index.php">Non</a>
    </div>
</body>
</html>