<!DOCTYPE html>
<html lang="fr">
<head>
   <?php
    $identite = intval($_GET['ide']);
    ?>
    <meta charset="UTF-8">
    <title>Suppression forum</title>
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
    $ide = intval($_GET['id']);
    $suppressiontag = $bdd->prepare('DELETE FROM rel_forum_tag WHERE id_forum = :idf');
    $suppressiontag->execute(array('idf' => $ide));
    $suppression = $bdd->prepare("DELETE FROM sujet_forum WHERE id_sujet_forum = :ide");
    $suppression->execute(array("ide" => $ide)) or die(print_r($suppression->errorInfo()));
    echo "Sujet supprimé !";
    ?>
    <a href="messages.php?affiche=forum">Retour</a>
</body>
</html>