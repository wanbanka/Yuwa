<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Le voilà, le mot de passe !</title>
</head>
<body>
    <?php
    
    
        include('bdd/connection_bdd.php');
    include('nav.php');
        
    $personne = '';
    $mailing = '';
        $pseudo = $_POST['pseudo'];
        $mail = $_POST['mail'];
        $cherche = $bdd->prepare('SELECT * FROM inscription WHERE pseudo = :pseudo');
        $cherche->execute(array('pseudo' => $pseudo));
        $donnees = $cherche->fetch();
        $personne = $donnees['pseudo'];
        $mailing = $donnees['mail'];
        $cherche->closeCursor();
         if ($personne == $pseudo){
             if($mailing == $mail){
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail))
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
$boundary = "-----=".md5(rand());
$header = "From:\"yuwa@gmail.com\">".$passage_ligne."Reply-to:\"yuwa@gmail.com\">".$passage_ligne."MIME-Version: 1.0".$passage_ligne."Content-type: multipart/mixed;".$passage_ligne."boundary=\"$boundary\"";
$date = "Date:".date("D, d m y H:i:s P");
$message = "Voici le lien pour aller modifier votre mot de passe";
$messageenvoi = $passage_ligne."--".$boundary.$passage_ligne."Content-type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne."Content-Transfer-Encoding: 8bit".$passage_ligne.$passage_ligne.$message.$passage_ligne;
mail($mail,"Modification mot de passe de Yuwa",$messageenvoi,$header);
             } else {
                 echo "<p>Le mail n'est pas dans notre base de données. Veuillez recommencer.</p>";
             }
        } else {
            echo "<p>Vous n'êtes pas encore inscrit sur notre site.</p>";
        }
    ?>
    <a href="connexioninscription.php">Connexion</a>
</body>
</html>