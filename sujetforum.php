<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Forum</title>
    <meta name="description" content="Ce site rassemble des articles et des vidéos pour vous aidez à gérer votre stress et votre anciété"/>
    <meta name="keywords" content="stress, anxiété, gérer, combattre, santé, étudiants, articles, vidéos"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styleforum.css">

    <link rel="stylesheet" type="text/css" href="css/stylegeneral.css"/>
    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
<div class="logo"><a href="index.php"><img src="images/Logo.png" alt="accueil" ></a></div>
<?php
    if($_SESSION !== array()){
    ?>
    <div class="connexion"><a href="deconnexion.php">Se déconnecter</a></div>
    <?php
    } else {
    ?>
    <div class="connexion"><a href="connexioninscription.php">Connexion | Inscription</a></div>
    <?php
    }
    ?>
<button id="hamburger"><img src="images/menuburger.png" alt="menu"></button>
   <nav class="menu disparition">  
    
       <ul>          
           <li>
               <a href="stress.php">STRESS</a>
           </li>
           <li>
               <a href="anxiete.php">ANXIETE</a>
           </li>
           
           <li>
               <div class="bar"></div>
               <a href="sujetforum.php" >LE FORUM</a>
           </li>
           <li>
               <a href="apropos.php">A PROPOS</a>
           </li>
           
       </ul>
       
   </nav>

 <?php
    if($_SESSION !== array()) {
    ?>
  
  <?php
    }
    ?>
   <h1 class="titre">Sujets du forum</h1>
    <a href="creasujet.php" class="bouton">+</a>
    <section>
        <?php
        include('bdd/connection_bdd.php');
        $sujets = $bdd->query('SELECT * FROM sujet_forum, inscription WHERE sujet_forum.id_utilisateur = inscription.id ORDER BY date_publication DESC, heure_publication DESC');
        while($donnees = $sujets->fetch()) {
            echo "<p><a href=\"commentforum.php?id=".$donnees['id_sujet_forum']."\">".$donnees['titre']."</a>  crée par ".$donnees['pseudo']."</p>";
        }
        $sujets->closeCursor();
        ?>
    </section>
   
</body>
</html>