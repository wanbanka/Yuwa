<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <?php
    
    include('bdd/connection_bdd.php');
    
    $ide = intval($_POST['ide']);
    echo "<meta http-equiv=\"refresh\" content=\"0.1; URL=article.php?id=$ide\">";
    ?>
    <title>Envoicomment</title>
</head>
<body>
    <?php
     
    
    $identite = intval($_POST['identifiant']);
    $ide = intval($_POST['ide']);
    $journee = date("d-m-Y");
    $jour = date("d");
    $mois = date("m");
    $annee = date("Y");
    $heure = date("H:i");
    $comment = strip_tags($_POST['commentaire']);
    $inscrit = $bdd->prepare('INSERT INTO commentaires(contenu, jour_publication, jour, mois, annee, heure_publication, id_utilisateur, id_article) VALUES(:comment, :journee, :jour, :mois, :annee, :heure, :identite, :ide)');
    $inscrit->execute(array('comment' => $comment,
                            'journee' => $journee,
                            'jour' => $jour,
                            'mois' => $mois,
                            'annee' => $annee,
                            'heure' => $heure,
                            'identite' => $identite, 
                           'ide' => $ide)) or die(print_r($inscrit->errorInfo()));
    ?>
</body>
</html>