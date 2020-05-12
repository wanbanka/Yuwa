<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Suppression de l'article</title>
</head>
<body>
   <?php
    try{
        $bdd = new PDO('mysql:host=db711050826.db.1and1.com;dbname=db711050826', 'dbo711050826', 'barbaPaPa2602');
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e){
        die('Erreur :'.$e->getMessage());
    }
    $id = intval($_GET['id']);
    $article = $bdd->query('SELECT * FROM article WHERE id = '.$id);
    while($donnees = $article->fetch()) {
    ?>
    <p>Voulez-vous supprimer l'article suivant ?</p>
    <?php
    echo "<strong>".stripslashes($donnees['titre'])."</strong><br>";
    echo "<a href=\"confirmation_suppression.php?id=".$id."\">Oui</a>";
    ?>
    <a href="modif_article.php">Non</a>
    <?php
    }
    $article->closeCursor();
    ?>
</body>
</html>