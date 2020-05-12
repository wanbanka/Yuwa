<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Commentaires des articles</title>
</head>
<body>
    <?php
    try{
        $bdd = new PDO('mysql:host=db711050826.db.1and1.com;dbname=db711050826', 'dbo711050826', 'barbaPaPa2602');
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
    $identite = intval($_GET['id']);
    $requete = $bdd->query('SELECT * FROM article, commentaires, inscription WHERE article.id = '.$identite.' AND article.id = commentaires.id_article AND inscription.id = commentaires.id_utilisateur');
    while($donnees = $requete->fetch()) {
        echo "<p><strong>".$donnees['pseudo']."</strong> ".$donnees['jour_publication']." à ".$donnees['heure_publication']." </p>";
        echo "<p>".stripslashes($donnees['contenu'])."</p>";
        echo "<a href=\"suppressionarticle.php?id=".$donnees['id_comment']."&ide=".$identite."\">Supprimer</a>";
    }
    ?>
</body>
</html>