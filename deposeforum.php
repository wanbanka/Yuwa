<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <?php
    $idarticle = intval($_POST['article']);
    echo "<meta http-equiv=\"refresh\" content=\"0.1; URL=commentforum.php?id=".$idarticle."\">";
    ?>
    <title>Depose forum</title>
</head>
<body>
    <?php
    
    include('bdd/connection_bdd.php');
    
    $id = intval($_POST['identifiant']);
    $idarticle = intval($_POST['article']);
    $message = strip_tags($_POST['forum']);
    $insertforum = $bdd->prepare('INSERT INTO message_forum(texte_publication, date_publication, heure_publication, id_sujet, id_utilisateur) VALUES(:message, :date, :heure, :idarticle, :idutil)');
    $insertforum->execute(array('message' => $message,
                               'date' => date("Y-m-d"),
                               'heure' => date("H:i"),
                                'idarticle' => $idarticle,
                               'idutil' => $id)) or die (print_r($insertforum->errorInfo()));
    $insertforum->closeCursor();
    ?>
</body>
</html>