<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Commentaires forum</title>
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
    $requete = $bdd->query('SELECT * FROM sujet_forum, message_forum, inscription WHERE sujet_forum.id_sujet_forum = '.$identite.' AND sujet_forum.id_sujet_forum = message_forum.id_sujet AND inscription.id = message_forum.id_utilisateur');
    while($donnees = $requete->fetch()) {
        echo "<p><strong>".$donnees['pseudo']."</strong> ".$donnees['date_publication']." à ".$donnees['heure_publication']." </p>";
        echo "<p>".stripslashes($donnees['texte_publication'])."</p>";
        echo "<a href=\"suppressionforum.php?id=".$donnees['id_message']."&ide=".$identite."\">Supprimer</a>";
    }
    ?>
</body>
</html>