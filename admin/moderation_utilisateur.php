<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modération utilisateurs</title>
</head>
<body>
   <style>
       table, tr, td, thead, th {
           border: 1px solid black;
       }
    </style>
    <?php
    try{
        $bdd = new PDO('mysql:host=db711050826.db.1and1.com;dbname=db711050826', 'dbo711050826', 'barbaPaPa2602');
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e){
        die('Erreur :'.$e->getMessage());
    }
    ?>
    <table>
             <thead>
             <th>Liens</th>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Pseudo</th>
              <th>Adresse mail</th> 
             </thead>
    <?php
    $utilisateurs = $bdd->query('SELECT id, nom, prenom, pseudo, mail FROM inscription');
    while($donnees = $utilisateurs->fetch()) {
        ?>
           <tr>
               <td><?php echo "<a href=\"fiche_utilisateur.php?id=".$donnees['id']."\">Voir la fiche utilisateur</a>"; ?></td>
               <td><?php echo stripslashes($donnees['nom']); ?></td>
               <td><?php echo stripslashes($donnees['prenom']); ?></td>
               <td><?php echo stripslashes($donnees['pseudo']); ?></td>
               <td><?php echo $donnees['mail']; ?></td>
           </tr>
           
        <?php
    }
    $utilisateurs->closeCursor();
    ?>
    </table>
</body>
</html>