<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vérification</title>
</head>
<body>
    <?php
    include('bdd/connection_bdd.php');
    
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];
        $verification = $bdd->prepare('SELECT * FROM inscription WHERE mail = :mail');
        $verification->execute(array('mail' => $mail));
        $donneesr = $verification->fetch();
        $recup = $donneesr['mail'];
        $recuppseudo = $donneesr['pseudo'];
        $identifiant = $donneesr['id'];
        $verification->closeCursor();
        $verification2 = $bdd->prepare('SELECT mot_de_passe FROM inscription WHERE mail = :mail');
        $verification2->execute(array('mail' => $mail));
        $donnees = $verification2->fetch();
        $recup2 = $donnees['mot_de_passe'];
        $verification2->closeCursor();
        if ($mail == $recup){
            if (password_verify($mdp, $recup2)){
                $_SESSION['id'] = $identifiant;
                echo "<form action=\"index.php\" method=\"post\" id=\"automatique\"><input type=\"hidden\" name=\"identifie\" id=\"identifie\" value=\"".$_SESSION['id']."\"></form>";
            } else {
                echo "<p>Le mot de passe n'est pas correct. Veuillez le retaper.</p>";
                echo "<a href=\"connexioninscription.php\">Retour en arrière</a>";
            }
        } else {
            echo "<p>Le mail n'est pas dans notre base de données. Veuillez recommencer.</p>";
            echo "<a href=\"connexioninscription.php\">Retour en arrière</a>";
        }
    ?>
    <script>
    document.getElementById('automatique').submit();
    </script>
</body>
</html>