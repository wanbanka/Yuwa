<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Oubli de mot de passe</title>
</head>
<body>
     <form action="affichage_mdp.php" method="post">
       <fieldset><legend>Oubli de mot de passe </legend>
             <label for="pseudo">Pseudo</label><input type="text" name="pseudo" id="pseudo" required autofocus pattern="{5, 50}"><div id="mauvais"></div><br>
        <label for="mail">Mail</label><input type="email" name="mail" id="mail" required><div id="nomail"></div><br>
        <input type="submit" value="Envoi d'un mail">  
       </fieldset>
    </form>
    <script src="js/node_modules/jquery/dist/jquery.min.js"></script>
    <script>
    $(function() {
           $('#pseudo').blur(function() {
        var param = 'p=' + $('#pseudo').val();
        $('#mauvais').load('pseudo2.php',param);
    });
        });
    </script>
    <script>
    $(function() {
       $('#mail').blur(function() {
           var param2 = 'e=' + $('#mail').val();
           $('#nomail').load('no_mail.php',param2);
       }); 
    });
    </script>
</body>
</html>