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
    <link rel="stylesheet" type="text/css" href="css/styleforum.css">
    <link rel="stylesheet" type="text/css" href="css/stylegeneral.css"/>
    
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>

  <?php

  include('nav.php');
  
  ?>

  <a href="sujetforum.php" class="liste">Retour à la liste des sujets</a>
  <section class="sujet">
   <?php
    
      include('bdd/connection_bdd.php');
      
    $id = intval($_GET['id']);
    $message = $bdd->prepare('SELECT * FROM sujet_forum, message_forum, inscription WHERE message_forum.id_utilisateur = inscription.id AND id_sujet = :sujet AND sujet_forum.id_sujet_forum = id_sujet');
    $message->execute(array('sujet' => $id));
    while($donnees = $message->fetch()) {
        $pseudo = $donnees['pseudo'];
        $contenu = $donnees['texte_publication'];
        
        $datetime1 = date_create(date('Y-m-d'));
        $datetime2 = date_create($donnees['date_publication']);
        $interval = date_diff($datetime1, $datetime2);
        $datetime3 = date_create(date('H:i', strtotime('+ 1 hours')));
        $datetime4 = date_create($donnees['heure_publication']);
        $interval2 = date_diff($datetime3, $datetime4);
        
        if($interval->format('%y') > 0){
            if($interval->format('%y') == 1){
                echo "<p><strong>".$pseudo."</strong> il y a ".$interval->format('%y an')."<br><br>";
        echo $contenu."</p>";
            } else {
                echo "<p><strong>".$pseudo."</strong> il y a ".$interval->format('%y ans')."<br><br>";
        echo $contenu."</p>";
            }
        } else if($interval->format('%m') > 0){
            echo "<p><strong>".$pseudo."</strong> il y a ".$interval->format('%m mois')."<br><br>";
        echo $contenu."</p>";
            
        } else if($interval->format('%a') > 0){
            if($interval->format('%a') == 1){
                echo "<p><strong>".$pseudo."</strong> il y a ".$interval->format('%a jour')."<br><br>";
        echo $contenu."</p>";
            } else {
                echo "<p><strong>".$pseudo."</strong> il y a ".$interval->format('%a jours')."<br><br>";
        echo $contenu."</p>";
            }
        } else if($interval2->format('%H') > 0){
            if($interval2->format('%H') == 1){
                echo "<p><strong>".$pseudo."</strong> il y a ".$interval->format('%H heure')."<br><br>";
        echo $contenu."</p>";
            } else {
                echo "<p><strong>".$pseudo."</strong> il y a ".$interval->format('%H heures')."<br><br>";
        echo $contenu."</p>";
            }
        } else if($interval2->format('%I') >= 0){
            if($interval2->format('%I') == 1){
                echo "<p><strong>".$pseudo."</strong> il y a ".$interval->format('%I minute')."<br><br>";
        echo $contenu."</p>";
            } else {
                echo "<p><strong>".$pseudo."</strong> il y a ".$interval->format('%y minutes')."<br><br>";
        echo $contenu."</p>";
            }
        }
    }
    $message->closeCursor();
    ?>
    </section>
    <?php
    if($_SESSION !== array()) {
    ?>
 
    <form action="deposeforum.php" method="post">
      <fieldset>
          <?php
        $identite = intval($_SESSION['id']);
        echo "<input type=\"hidden\" name=\"identifiant\" id=\"identifiant\" value=\"$identite\">";
        echo "<input type=\"hidden\" name=\"article\" id=\"article\" value=\"$id\">";
        ?>
        <label for="forum">Partagez votre avis</label><br><br><textarea name="forum" id="forum" cols="80" rows="5" required></textarea><br><br>
        <input type="submit" value="Envoyer">
      </fieldset>
    </form>
    <?php
    } else {
        echo "<p class=\"liste\">Connectez-vous pour pouvoir envoyer des messages sur le forum</p>";
    }
    ?>
</body>
</html>