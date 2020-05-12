<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modification articles</title>
</head>
<body>
    <?php
    try{
        $bdd = new PDO('mysql:host=db711050826.db.1and1.com;dbname=db711050826', 'dbo711050826', 'barbaPaPa2602');
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage);
    }
    $articles = $bdd->query('SELECT * FROM article');
    while($donnees = $articles->fetch()) {
        echo "<a href=\"depot_fichier.php?id=".$donnees['id']."\">".stripslashes($donnees['titre'])."</a> <a href=\"supprimer_article.php?id=".$donnees['id']."\">Supprimer l'article</a><br>";
    }
    $articles->closeCursor();
    ?>
</body>
</html>