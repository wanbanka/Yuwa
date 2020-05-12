<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Anxiété</title>
    <meta name="description" content="Ce site rassemble des articles et des vidéos pour vous aidez à gérer votre stress et votre anciété"/>
    <meta name="keywords" content="stress, anxiété, gérer, combattre, santé, étudiants, articles, vidéos"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/stylestress.css">
    <link rel="stylesheet" type="text/css" href="css/stylegeneral.css"/>
    <link rel="stylesheet" type="text/css" href="css/styleline.css"/>
    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
  
  <?php include('nav.php');?>
  
   <div class="outer">
      <div class="inner"></div>
    </div>
  <?php
    if($_SESSION !== array()) {
    ?>
   <div class="connexion">
       <a href="deconnexion.php">Se déconnecter</a>
   </div>
    <?php
    } else {
        ?>
        <div class="connexion"><a href="connexioninscription.php">Connexion | Inscription</a></div><br>
        <?php
    }
    
    include('bdd/connection_bdd.php');
    
    if($_SESSION !== array()){
        $verif = $bdd->prepare('SELECT * FROM rel_inscription_tag WHERE id_utilisateur = :id');
        $verif->execute(array('id' => $_SESSION['id']));
        $cherche = $verif->fetch();
        
        if(sizeof($cherche) !== 0) {
            $requete = $bdd->prepare('SELECT DISTINCT article.titre, article.resume, article.id, article.date_publication, article.heure_article, article.adresse_photo FROM inscription, rel_inscription_tag, rel_tag_article, tag, article WHERE (inscription.id = :idutil AND inscription.id = rel_inscription_tag.id_utilisateur AND rel_inscription_tag.id_tag = tag.id_tag_important AND tag.id_tag_important = rel_tag_article.id_tag AND rel_tag_article.id_article = article.id) OR (tag.id_tag_important = 1 AND tag.id_tag_important = rel_tag_article.id_tag AND rel_tag_article.id_article = article.id) ORDER BY date_publication DESC, heure_article DESC');
        $requete->execute(array('idutil' => $_SESSION['id']));
        
      
            while($donnees = $requete->fetch()){
                echo "<div class=\"selection\">";
                echo "<div class=\"selection_articles\">";
                echo "<h1>".$donnees['titre']."</h1>";
        echo "<p>".$donnees['resume']."</p>";
        echo "<a href=\"article.php?id=".$donnees['id']."\">Voir l'article</a>";
                echo "</div>";
                echo "<div class=\"selection_photos\">";
                echo "<img src=\"".$donnees['adresse_photo']."\" alt=\"Image de l'article ".$donnees['titre']."\" title=\"Image de l'article ".$donnees['titre']."\" width=\"533\" height=\"303\">";
                echo "</div>";
                echo "</div>";
            }
            $requete->closeCursor();
        } else {
            $requete2 = $bdd->query('SELECT DISTINCT article.titre, article.resume, article.id, article.date_publication, article.heure_article, article.adresse_photo FROM rel_tag_article, tag, article WHERE tag.id_tag_important = 1 AND tag.id_tag_important = rel_tag_article.id_tag AND rel_tag_article.id_article = article.id ORDER BY date_publication DESC, heure_article DESC');
            while($donnees2 = $requete2->fetch()){
                echo "<div class=\"selection\">";
                echo "<div class=\"selection_articles\">";
                echo "<h1>".$donnees2['titre']."</h1>";
        echo "<p>".$donnees2['resume']."</p>";
        echo "<a href=\"article.php?id=".$donnees2['id']."\">Voir l'article</a>";
                echo "</div>";
                echo "<div class=\"selection_photos\">";
                echo "<img src=\"".$donnees['adresse_photo']."\" alt=\"Image de l'article ".$donnees['titre']."\" title=\"Image de l'article ".$donnees['titre']."\" width=\"533\" height=\"303\">";
                echo "</div>";
                echo "</div>";
            }
            $requete2->closeCursor();
        }
        
        
        
    } else {
        $requete = $bdd->query('SELECT DISTINCT article.titre, article.resume, article.id, article.date_publication, article.heure_article, article.adresse_photo FROM rel_tag_article, tag, article WHERE tag.id_tag_important = 1 AND tag.id_tag_important = rel_tag_article.id_tag AND rel_tag_article.id_article = article.id ORDER BY date_publication DESC, heure_article DESC');
    while($donnees = $requete->fetch()){
        echo "<div class=\"selection\">";
        echo "<div class=\"selection_articles\">";
        echo "<h1>".$donnees['titre']."</h1>";
        echo "<p>".$donnees['resume']."</p>";
        echo "<a href=\"article.php?id=".$donnees['id']."\">Voir l'article</a>";
        echo "</div>";
        echo "<div class=\"selection_photos\">";
                echo "<img src=\"".$donnees['adresse_photo']."\" alt=\"Image de l'article ".$donnees['titre']."\" title=\"Image de l'article ".$donnees['titre']."\" width=\"533\" height=\"303\">";
                echo "</div>";
        echo "</div>";
    }
    $requete->closeCursor();
    }
        ?>
              
    <script>
    var hamburger = document.getElementById('hamburger');
       hamburger.addEventListener('click', function() {
          document.querySelector('.menu').classList.toggle('disparition');
           document.querySelector('button').classList.toggle('bleu');
           
       });
    </script>
    <script>
    $(window).on('load', function () { // makes sure the whole site is loaded 
        // $('#status').fadeOut(); // will first fade out the loading animation 
        //$( '.tracking-in-expand' ).removeClass( "tracking-in-expand" );
        $('#preloader1').delay(100).slideUp('slow');
        $('#preloader').delay(1000).slideUp('slow'); // will fade out the white DIV that covers the website. 
        $('body').delay(350).css({
            'overflow': 'visible'
        });
    })
          
    </script>
</body>
</html>