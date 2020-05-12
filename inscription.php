<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>
    <?php
        
        include('bdd/connection_bdd.php');
        
        $nom = htmlspecialchars(($_POST['nom']));
        $prenom = htmlspecialchars(($_POST['prenom']));
        $pseudo = strip_tags(($_POST['pseudo']));
        $mail = strip_tags(($_POST['mail']));
        $mdp = strip_tags(($_POST['mdp']));
        $mdp2 = password_hash($mdp, PASSWORD_DEFAULT);
        $confirmer = strip_tags(($_POST['confirmer']));
    if(isset($_POST['stress'])) {
        $tag = ($_POST['stress']);
    } else {
        $tag = '';
    }
    if(isset($_POST['danger'])) {
        $tag2 = ($_POST['danger']);
    } else {
        $tag2 = '';
    }
    if(isset($_POST['solutions'])) {
        $tag3 = ($_POST['danger']);
    } else {
        $tag3 = '';
    }
    if(isset($_POST['expert'])) {
        $tag4 = ($_POST['expert']);
    } else {
        $tag4 = '';
    }
        $verif = $bdd->prepare('SELECT pseudo FROM inscription WHERE pseudo = :pseudo');
        $verif->execute(array('pseudo' => $pseudo));
        $compte_pseudo = $verif->fetch();
        $verif->closeCursor();
        $verif2 = $bdd->prepare('SELECT mail FROM inscription WHERE mail = :mail');
        $verif2->execute(array('mail' => $mail));
        $compte_mail = $verif2->fetch();
        $verif2->closeCursor();
    
        if ($compte_pseudo == ''){
            if ($compte_mail == ''){
                        if ($mdp == $confirmer){
        $inscrit = $bdd->prepare('INSERT INTO inscription(nom, prenom, pseudo, mail, mot_de_passe) VALUES(:nom, :prenom, :pseudo, :mail, :mdp)');
        $inscrit->execute(array('nom' => $nom,
                               'prenom' => $prenom,
                               'pseudo' => $pseudo,
                               'mail' => $mail,
                               'mdp' => $mdp2));
                            $idutil = $bdd->prepare('SELECT id FROM inscription WHERE pseudo = :pseudo2');
                            $idutil->execute(array('pseudo2' => $pseudo));
                            $bonjour = $idutil->fetch();
                            $idutil->closeCursor();
                            
        echo "<p>Vous êtes bien inscrit ! Bonne journée !</p>";
                            echo "<a href=\"connexioninscription.php\">Essayez de vous connecter</a>";
        } else {
        echo "<p>Votre mot de passe de confirmation ne correspond pas au mot de passe tapé précédemment. Veuillez recommencer.</p>";
                            echo "<a href=\"connexioninscription.php\">Recommencer</a>";
        }
            } else {
                echo "<p>Ce mail a déjà été utilisé.</p>";
                echo "<a href=\"connexioninscription.php\">Recommencer</a>";
                }
                    } else {    
                        echo "<p>Le pseudo est déjà utilisé.</p>";
            echo "<a href=\"connexioninscription.php\">Recommencer</a>";
                    }
    ?>
</body>
</html>