<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Pseudo</title>
</head>
<body>
    <?php

    include('bdd/connection_bdd.php');
    
$recup = $_GET['p'];
$pseudo = $bdd->prepare('SELECT pseudo FROM inscription WHERE pseudo = :pseudo');
$pseudo->execute(array('pseudo' => $recup));
$donnees = $pseudo->fetch();
if($recup !== '' && $donnees[0] == $recup){
    echo "<p>Le pseudo est déjà utilisé</p>";
}
?>
</body>
</html>