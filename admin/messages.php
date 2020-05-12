<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Messages</title>
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
    $envoi = $_GET['affiche'];
    if($envoi == "articles") {
        $requete = $bdd->query('SELECT * FROM article ORDER BY date_publication DESC, heure_article DESC');
        while($donnees = $requete->fetch()) {
            echo "<a href=\"commentairesarticles.php?id=".$donnees['id']."\">".stripslashes($donnees['titre'])."</a><br>";
        }
    } else if($envoi == "forum") {
        $requete2 = $bdd->query('SELECT * FROM sujet_forum, inscription WHERE inscription.id = sujet_forum.id_utilisateur ORDER BY date_publication DESC, heure_publication DESC');
        while($donnees2 = $requete2->fetch()) {
            echo "<a href=\"commentairesforum.php?id=".$donnees2['id_sujet_forum']."\">".stripslashes($donnees2['titre'])."</a> <strong>Créé par ".$donnees2['pseudo']."</strong> ";
            echo "<strong><a href=\"suppressionsujet.php?id=".$donnees2['id_sujet_forum']."&ide=".$envoi."\">Supprimer le sujet</a></strong><br>";
        }
    }
    ?>
</body>
</html>