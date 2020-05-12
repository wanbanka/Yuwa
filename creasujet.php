<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Forum</title>
    <meta name="description" content="Ce site rassemble des articles et des vidéos pour vous aidez à gérer votre stress et votre anciété"/>
    <meta name="keywords" content="stress, anxiété, gérer, combattre, santé, étudiants, articles, vidéos"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/stylegeneral.css">
    <link rel="stylesheet" type="text/css" href="css/stylecrea.css">
    
     
     
    
</head>
<body>
   
   <?php
   include('nav.php');
   ?>
   
 <a href="sujetforum.php" class="retour">Retour</a><br>
  <?php
    if($_SESSION !== array()){
    ?>
    <form action="ajoutsujet.php" method="post">
       <?php
        $identite = intval($_SESSION['id']);
        echo "<input type=\"hidden\" name=\"identifiant\" id=\"identifiant\" value=\"$identite\">";
        ?>
        <label for="titreforum">Titre du sujet</label><br><input type="text" name="titreforum" id="titreforum" required autofocus><br><br>
        <label for="firstmessage">Premier message à poster</label><br><textarea name="firstmessage" id="firstmessage" cols="80" rows="5" required placeholder=""></textarea><br><br>
        <input type="submit" value="Créer" class="bouton">
    </form>
    <?php
    } else {
        echo "<a href=\"connexioninscription.php\">Connectez-vous pour pouvoir créer un sujet de forum</a>";
    }
    ?>
</body>
</html>