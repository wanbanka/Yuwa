<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="wysibb-1.5.1/wysibb/theme/default/wbbtheme.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800,900" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="wysibb-1.5.1/wysibb/lang/fr.js"></script>
<script src="wysibb-1.5.1/wysibb/jquery.wysibb.min.js"></script>
<script>
$(function() {
    var options = {
        allButtons: {
         numlist: {
			transform: {
				'<ol>{SELTEXT}</ol>':'[num]{SELTEXT}[/num]',
				'<li>{SELTEXT}</li>':'[*]{SELTEXT[^\[\]\*]}'
			}   
        },
             fs_verysmall : {
                    title : CURLANG.fs_verysmall,
                    buttonText : "fs1",
                    excmd : 'fontSize',
                    exvalue : "1",
                    transform : {
                        '<font size="1">{SELTEXT}</font>' : '[sizep]{SELTEXT}[/sizep]'
                    }
                },
                fs_small : {
                    title : CURLANG.fs_small,
                    buttonText : "fs2",
                    excmd : 'fontSize',
                    exvalue : "2",
                    transform : {
                        '<font size="2">{SELTEXT}</font>' : '[sized]{SELTEXT}[/sized]'
                    }
                },
                fs_normal : {
                    title : CURLANG.fs_normal,
                    buttonText : "fs3",
                    excmd : 'fontSize',
                    exvalue : "3",
                    transform : {
                        '<font size="3">{SELTEXT}</font>' : '[sizet]{SELTEXT}[/sizet]'
                    }
                },
                fs_big : {
                    title : CURLANG.fs_big,
                    buttonText : "fs4",
                    excmd : 'fontSize',
                    exvalue : "4",
                    transform : {
                        '<font size="4">{SELTEXT}</font>' : '[sizeq]{SELTEXT}[/sizeq]'
                    }
                },
                fs_verybig : {
                    title : CURLANG.fs_verybig,
                    buttonText : "fs5",
                    excmd : 'fontSize',
                    exvalue : "6",
                    transform : {
                        '<font size="6">{SELTEXT}</font>' : '[sizec]{SELTEXT}[/sizec]'
                    }
                },
            fontfamily: {
              title: 'Police',                 
              type: 'select',
              options: [
               {title: "Arial",exvalue: "Arial"},
               {title: "Comic Sans MS",exvalue: "Comic Sans MS"},
               {title: "Courier New",exvalue: "Courier New"},
               {title: "Georgia",exvalue: "Georgia"},
               {title: "Lucida Sans Unicode",exvalue: "Lucida Sans Unicode"},
               {title: "Tahoma",exvalue: "Tahoma"},
               {title: "Times New Roman",exvalue: "Times New Roman"},
               {title: "Trebuchet MS",exvalue: "Trebuchet MS"},
               {title: "Montserrat",exvalue: "Montserrat"}
            ],
                transform: {
                 '<font face="Arial">{SELTEXT}</font>':'[arial]{SELTEXT}[/arial]',
                    '<font face="Comic Sans MS">{SELTEXT}</font>':'[comicsansms]{SELTEXT}[/comicsansms]',
                    '<font face="Courier New">{SELTEXT}</font>':'[couriernew]{SELTEXT}[/couriernew]',
                    '<font face="Georgia">{SELTEXT}</font>':'[georgia]{SELTEXT}[/georgia]',
                    '<font face="Lucida Sans Unicode">{SELTEXT}</font>':'[lucidasansunicode]{SELTEXT}[/lucidasansunicode]',
                    '<font face="Tahoma">{SELTEXT}</font>':'[tahoma]{SELTEXT}[/tahoma]',
                    '<font face="Times New Roman">{SELTEXT}</font>':'[timesnewroman]{SELTEXT}[/timesnewroman]',
                    '<font face="Trebuchet MS">{SELTEXT}</font>':'[trebuchetms]{SELTEXT}[/trebuchetms]',
                    '<font face="Montserrat">{SELTEXT}</font>':'[montserrat]{SELTEXT}[/montserrat]'
              }
           }
        },
        lang: "fr"
    };
$("#article").wysibb(options);
});
</script>
    <title>Fichier à déposer</title>
</head>
<body>
   <?php
    try{
        $bdd = new PDO('mysql:host=db711050826.db.1and1.com;dbname=db711050826', 'dbo711050826', 'barbaPaPa2602');
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
    if(isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $article = $bdd->query('SELECT * FROM article WHERE id = '.$id.'');
        while($donnees = $article->fetch()){
    ?>
    <form action="modif_fichier.php" method="post">
       <fieldset><legend>Modification article:</legend>
       <input type="hidden" name="identite" id="identite" value="<?php echo $id; ?>">
        <label for="titre">Titre de l'article </label><input type="text" name="titre" id="titre" value="<?php echo stripslashes($donnees['titre']); ?>" required autofocus><br>
        <textarea name="resume" id="resume" cols="30" rows="10" placeholder="Résumé rapide de l'article" required><?php echo stripslashes($donnees['resume']); ?></textarea><br>
        <textarea name="article" id="article" cols="30" rows="10" required><?php echo $donnees['contenu_article']; ?></textarea><br>
        <input type="submit" value="Envoyer">
       </fieldset>
    </form>
    <?php
    }
        $article->closeCursor();
    } else {
    ?>
    <form action="rajout_fichier.php" method="post" enctype="multipart/form-data">
       <fieldset><legend>Dépôt d'un nouvel article:</legend>
        <label for="titre">Titre de l'article </label><input type="text" name="titre" id="titre" required autofocus><br>
        <textarea name="resume" id="resume" cols="30" rows="10" placeholder="Résumé rapide de l'article" required></textarea><br>
        <textarea name="article" id="article" cols="30" rows="10" required></textarea><br><br>
        <select name="tag1" id="tag1" required>
            <?php
        $tags = $bdd->query('SELECT * FROM tag');
        while($donnees = $tags->fetch()){
            ?>
            <option value="<?php echo intval($donnees['id_tag_important']); ?>"><?php echo stripslashes($donnees['nom_tag']); ?></option>
            <?php
        }
        $tags->closeCursor();
            ?>
        </select><br><br>
        <select name="tag2" id="tag2">
           <option value="">-- Aucun --</option>
            <?php
        $tags2 = $bdd->query('SELECT * FROM tag');
        while($donnees2 = $tags2->fetch()){
            ?>
            <option value="<?php echo intval($donnees2['id_tag_important']); ?>"><?php echo stripslashes($donnees2['nom_tag']); ?></option>
            <?php
        }
        $tags2->closeCursor();
            ?>
        </select><br><br>
        <select name="tag3" id="tag3">
           <option value="">-- Aucun --</option>
            <?php
        $tags3 = $bdd->query('SELECT * FROM tag');
        while($donnees3 = $tags3->fetch()){
            ?>
            <option value="<?php echo intval($donnees3['id_tag_important']); ?>"><?php echo stripslashes($donnees3['nom_tag']); ?></option>
            <?php
        }
        $tags3->closeCursor();
            ?>
        </select><br><br>
        <label for="tagperso">Vous pouvez également créer un tag si vous le voulez : </label><input type="text" name="tagperso" id="tagperso"><br><br>
        <span>Photo de l'article: </span><input type="file" name="photo" id="photo" accept="image/*" required><br><br>
        <input type="submit" value="Envoyer">
       </fieldset>
    </form>
    <?php
    }    
    ?>
</body>
</html>