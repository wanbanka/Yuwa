<?php
require_once('jbbcode-1.3.0/jBBCode-1.3.0/JBBCode/Parser.php');
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Article</title>
    <meta name="description" content="Ce site rassemble des articles et des vidéos pour vous aidez à gérer votre stress et votre anciété"/>
    <meta name="keywords" content="stress, anxiété, gérer, combattre, santé, étudiants, articles, vidéos"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/stylearticle.css">
    <link rel="stylesheet" type="text/css" href="css/stylegeneral.css"/>
    
    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
  
  <?php
    
    include('nav.php');
    
    ?>
  
   <section>
       <?php
    
       include('bdd/connection_bdd.php');
       
    $id = intval($_GET['id']);
        $selection = $bdd->prepare('SELECT * FROM article WHERE id = :identite');
        $selection->execute(array('identite' => $id));
        while ($preparer = $selection->fetch()){
            $titre2 = $preparer['titre'];
            $contenu2 = $preparer['contenu_article'];
            $parser = new JBBCode\Parser();
            $parser->addCodeDefinitionSet(new JBBCode\DefaultCodeDefinitionSet());
$parser->parse($contenu2);
$bonjour = $parser->getAsHtml();
            echo "<h1>".$titre2."</h1>";
            echo "<article>".$bonjour."</article>";
        }
       ?>
   </section><br>
   <section>
   <h2>Commentaires</h2>
   <?php
    if($_SESSION !== array()) {
    ?>
   
    <?php 
    
    $identite = intval($_GET['id']);
    $affiche = $bdd->prepare('SELECT pseudo, contenu, jour_publication, heure_publication FROM commentaires, inscription, article WHERE commentaires.id_utilisateur = inscription.id AND article.id = :identite AND article.id = commentaires.id_article ORDER BY annee DESC, mois DESC, jour DESC, heure_publication DESC');
    $affiche->execute(array('identite' => $identite));
    while ($donnees = $affiche->fetch()) {
        $pseudo = $donnees['pseudo'];
        $contenu = $donnees['contenu'];
        $datetime1 = date_create(date('d-m-Y'));
        $datetime2 = date_create($donnees['jour_publication']);
        $interval = date_diff($datetime1, $datetime2);
        $datetime3 = date_create(date('H:i', strtotime('+ 1 hours')));
        $datetime4 = date_create($donnees['heure_publication']);
        $interval2 = date_diff($datetime3, $datetime4);
        if($interval->format('%y') > 0){
            if($interval->format('%y') == 1){
                echo "<div class=\"commentaires\">";
        echo "<p><strong>".$pseudo."</strong> il y a ".$interval->format('%y an')."</p>";
        echo "<p>".$contenu."</p>";
        echo "</div>";
            } else {
                echo "<div class=\"commentaires\">";
        echo "<p><strong>".$pseudo."</strong> il y a ".$interval->format('%y ans')."</p>";
        echo "<p>".$contenu."</p>";
        echo "</div>";
            }
        } else if($interval->format('%m') > 0){
            echo "<div class=\"commentaires\">";
        echo "<p><strong>".$pseudo."</strong> il y a ".$interval->format('%m mois')."</p>";
        echo "<p>".$contenu."</p>";
        echo "</div>";
        } else if($interval->format('%a') > 0){
            if($interval->format('%a') == 1){
                echo "<div class=\"commentaires\">";
        echo "<p><strong>".$pseudo."</strong> il y a ".$interval->format('%a jour')."</p>";
        echo "<p>".$contenu."</p>";
        echo "</div>";
            } else {
                echo "<div class=\"commentaires\">";
        echo "<p><strong>".$pseudo."</strong> il y a ".$interval->format('%a jours')."</p>";
        echo "<p>".$contenu."</p>";
        echo "</div>";
            }
        } else if($interval2->format('%H') > 0){
            if($interval2->format('%H') == 1){
                echo "<div class=\"commentaires\">";
        echo "<p><strong>".$pseudo."</strong> il y a ".$interval2->format('%H heure')."</p>";
        echo "<p>".$contenu."</p>";
        echo "</div>";
            } else {
                echo "<div class=\"commentaires\">";
        echo "<p><strong>".$pseudo."</strong> il y a ".$interval2->format('%H heures')."</p>";
        echo "<p>".$contenu."</p>";
        echo "</div>";
            }
        } else if($interval2->format('%I') >= 0){
            if($interval2->format('%I') == 1){
                echo "<div class=\"commentaires\">";
        echo "<p><strong>".$pseudo."</strong> il y a ".$interval2->format('%I minute')."</p>";
        echo "<p>".$contenu."</p>";
        echo "</div>";
            } else {
                echo "<div class=\"commentaires\">";
        echo "<p><strong>".$pseudo."</strong> il y a ".$interval2->format('%I minutes')."</p>";
        echo "<p>".$contenu."</p>";
        echo "</div>";
            }
        }
    }
    $affiche->closeCursor();
    ?>
    <fieldset><legend>Donnez votre avis:</legend>
        <form action="envoicomment.php" method="post">
        <?php
        $identite = intval($_SESSION['id']);
        $id = intval($_GET['id']);
        echo "<input type=\"hidden\" name=\"identifiant\" id=\"identifiant\" value=\"$identite\">";
        echo "<input type=\"hidden\" name=\"ide\" id=\"ide\" value=\"$id\">";
        ?>
        <textarea name="commentaire" id="commentaire" cols="80" rows="5" placeholder="" required></textarea><br>
        <input type="submit" value="Envoyer">
    </form>
    </fieldset>
    <?php
    } else {
        echo "<a href=\"connexioninscription.php\">Connectez-vous pour pouvoir envoyer des commentaires</a>";
    }
    ?>
    </section>
    
</body>
</html>