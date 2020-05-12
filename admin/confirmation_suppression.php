<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="0.1; URL=modif_article.php">
    <title>Confirmation</title>
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
    $suppressiontags = $bdd->prepare('DELETE FROM rel_tag_article WHERE id_article = :idarticle');
    $suppressiontags->execute(array('idarticle' => $id));
    $suppression = $bdd->prepare('DELETE FROM article WHERE id = :id');
    $suppression->execute(array('id' => $id));
    ?>
</body>
</html>