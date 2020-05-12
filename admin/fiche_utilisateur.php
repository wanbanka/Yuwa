<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fiche utilisateur</title>
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
    $idutil = intval($_GET['id']);
    $infos = $bdd->prepare('SELECT nom, prenom, pseudo, mail FROM inscription WHERE id = :id');
    $infos->execute(array('id' => $idutil));
    while($donnees = $infos->fetch()) {
        ?>
        <p><?php echo stripslashes($donnees['nom']); ?></p>
        <p><?php echo stripslashes($donnees['prenom']); ?></p>
        <p><?php echo stripslashes($donnees['pseudo']); ?></p>
        <p><?php echo $donnees['mail']; ?></p>
        <?php
    }
    $infos->closeCursor();
    ?>
    <?php
    echo "<a href=\"suppression_utilisateur.php?id=".$idutil."\">Supprimer l'utilisateur</a>";
    ?>
</body>
</html>