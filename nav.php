<div class="logo">
        <a href="index.php"><img src="images/Logo.png" alt="accueil"></a>
    </div>
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
            <li> <a href="stress.php">STRESS</a> </li>
            <li> <a href="anxiete.php">ANXIETE</a> </li>
            <li> <a href="sujetforum.php">LE FORUM</a> </li>
            
            <li><div class="bar"></div> <a href="apropos.html">A PROPOS</a></li>
        </ul>
       
        
    </nav>