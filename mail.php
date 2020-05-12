<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mail</title>
</head>
<body>
    <?php
    
    include('bdd/connection_bdd.php');
    
    $recup2 = $_GET['e'];
$pseudo = $bdd->prepare('SELECT mail FROM inscription WHERE mail = :mail');
$pseudo->execute(array('mail' => $recup2));
$donnees = $pseudo->fetch();
if($recup2 !== '' && $donnees[0] == $recup2){
    echo "<p>Le mail est déjà utilisé</p>";
}
    ?>
</body>
</html>