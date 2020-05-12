<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter sujet</title>
    <meta name="description" content="Ce site rassemble des articles et des vidéos pour vous aidez à gérer votre stress et votre anciété"/>
    <meta name="keywords" content="stress, anxiété, gérer, combattre, santé, étudiants, articles, vidéos"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styleforum.css">

    <link rel="stylesheet" type="text/css" href="css/stylegeneral.css"/>
    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
  
  
  
    <?php
    
    include('bdd/connection_bdd.php');
  
    include('nav.php');
        
            
    $identite = intval($_POST['identifiant']);
    $titre = strip_tags($_POST['titreforum']);
    $insertion = $bdd->prepare('INSERT INTO sujet_forum(titre, date_publication, heure_publication, id_utilisateur) VALUES (:titre, :date, :heure, :util)');
    $insertion->execute(array('titre' => $titre,
                             'date' => date("Y-m-d"),
                             'heure' => date("H:i"),
                             'util' => $identite)) or die(print_r($insertion->errorInfo()));
    
    $insert_message = $bdd->prepare('INSERT INTO message_forum(texte_publication, date_publication, heure_publication, id_sujet, id_utilisateur) VALUES (:texte, :date, :heure, :sujet, :util)');
    
    $insert_message->execute(array(
            'texte' => strip_tags($_POST['firstmessage']),
            'date' => date("Y-m-d"),
                             'heure' => date("H:i"),
        'sujet' => $bdd->lastInsertId(),
        'util' => $identite
    ));
    
    echo "<p>Sujet crée ! Soyez le premier à poster un message !</p>";
    $insertion->closeCursor();
    $insert_message->closeCursor();
    
    $lienrecup = $bdd->prepare('SELECT * FROM sujet_forum WHERE titre = :titre2');
    $lienrecup->execute(array('titre2' => $titre));
    while($donnees = $lienrecup->fetch()) {
        echo "<a href=\"commentforum.php?id=".$donnees['id_sujet_forum']."\">".$donnees['titre']."</a>";
    }
    $lienrecup->closeCursor();
    ?>
</body>
</html>