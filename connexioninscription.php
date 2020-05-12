<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion/Inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styleco.css">
    <link rel="stylesheet" type="text/css" href="css/stylegeneral.css">
</head>
<body>
    <div class="logo"><a href="index.php"><img src="Images/Logo.png" alt="accueil" ></a></div>
    <div class="container">
    <form action="verif.php" method="post">
        <legend>Connectez-vous</legend>
        <label for="mail">Adresse E-mail</label><br><input type="email" name="mail" id="mail" required autofocus><br><div id="incorrect"></div>
        <label for="mdp">Mot de passe</label><br><input type="password" name="mdp" id="mdp" required pattern="{8}"><br><div id="mot"></div>
        <a href="oubli_mdp.php">Mot de passe oublié ?</a><br>
        <input type="submit" value="Se connecter">
         
    </form>
    <form action="inscription.php" method="post">
        <legend>Inscrivez-vous</legend> 
        <label for="nom">Votre nom (En majuscule)</label><br><input type="text" name="nom" id="nom" required pattern="[A-Z]{2,100}" autofocus><br>
        <label for="prenom">Votre prénom</label><br><input type="text" name="prenom" id="prenom" required pattern="[A-Za-zéèê]{2,50}"><br>
        <label for="pseudo">Pseudo (5 caractères minimum)</label><br><input type="text" name="pseudo" id="pseudo" required pattern="{5, 50}"><div id="apparait"></div>
        <label for="mailing">Adresse E-mail</label><br><input type="email" name="mail" id="mailing" required><div id="pris"></div>
        <label for="mdp2">Votre mot de passe (8 caractères minimum)</label><br><input type="password" name="mdp" id="mdp2" required pattern="{8}"><br>
        <label for="confirmer">Confirmer votre mot de passe</label><br><input type="password" name="confirmer" id="confirmer" required pattern="{8}"><div id="incorrect2"></div>
        <input type="submit" id="envoi" value="S'inscrire"><br><br>
        <!--<input type="reset" value="Recommencer">-->
        
    </form>
    </div>
    <script src="js/node_modules/jquery/dist/jquery.min.js"></script>
    <script>
    $(function() {
       $('#pseudo').blur(function() {
          var param = 'p=' + $('#pseudo').val();
           $('#apparait').load('pseudo.php',param);
       }); 
    });
    </script>
    <script>
        $(function() {
           $('#confirmer').blur(function() {
        var param2 = 'm=' + $('#mdp2').val();
        var param3 = 'c=' + $('#confirmer').val();
        var param4 = param2 + '&' + param3;
        $('#incorrect2').load('motdepasse.php',param4);
    });
        });
    </script>
    <script>
        $(function() {
            $('#mailing').blur(function() {
                var param5 = 'e=' + $('#mailing').val();
                $("#pris").load('mail.php',param5);
            });
        });
    </script>
    <script>
    $(function() {
       $('#mail').blur(function() {
          var param = 'e=' + $('#mail').val();
           $('#incorrect').load('no_mail.php',param);
       }); 
    });
    </script>
    <script>
    $(function() {
       $('#mdp').blur(function() {
          var param2 = 'm=' + $('#mdp').val();
          var param3 = 'p=' + $('#mail').val();
          var param4 = param2 + '&' + param3;
          $('#mot').load('no_password.php',param4);
       }); 
    });
    </script>
</body>
</html>