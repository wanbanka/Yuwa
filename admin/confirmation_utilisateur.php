<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Confirmé</title>
</head>
<body>
    <?php
    try{
        $bdd = new PDO('mysql:host=db711050826.db.1and1.com;dbname=db711050826', 'dbo711050826', 'barbaPaPa2602');
        $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        die('Erreur :'.$e->getMessage());
    }
    $identite = $_GET['id'];
    $suppressiontag = $bdd->prepare('DELETE FROM rel_inscription_tag WHERE id_utilisateur = :id');
    $suppressiontag->execute(array('id' => $identite)) or die(print_r($suppressiontag->errorInfo()));
    $suppressionutilisateur = $bdd->prepare('DELETE FROM inscription WHERE id = :id');
    $suppressionutilisateur->execute(array('id' => $identite)) or die(print_r($suppressionutilisateur->errorInfo()));
    echo "Utilisateur supprimé";
    ?>
    <a href="moderation_utilisateur.php">Retour aux utilisateurs</a>
</body>
</html>