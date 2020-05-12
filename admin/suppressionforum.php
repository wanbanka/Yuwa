<!DOCTYPE html>
<html lang="fr">
<head>
   <?php
    $identite = intval($_GET['ide']);
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="0.1; URL=commentairesforum.php?id=<?php echo $identite; ?>">
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
    $suppression = $bdd->prepare('DELETE FROM message_forum WHERE id_message = :ide');
    $suppression->execute(array('ide' => $ide));
    ?>
</body>
</html>