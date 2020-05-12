<?php
require_once('jbbcode-1.3.0/jBBCode-1.3.0/JBBCode/Parser.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800,900" rel="stylesheet">
    <title>Rajout de fichier</title>
</head>
<body>
    <?php
    try{
        $bdd = new PDO('mysql:host=db711050826.db.1and1.com;dbname=db711050826', 'dbo711050826', 'barbaPaPa2602');
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        }
        catch (Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    $titre = addslashes($_POST['titre']);
    $resume = addslashes($_POST['resume']);
    $article = $_POST['article'];
    $parser = new JBBCode\Parser();
    $parser->addCodeDefinitionSet(new JBBCode\DefaultCodeDefinitionSet());
    $parser->addBBCode("sizep", '<p style="font-size: 0.75rem;">{param}</p>');
    $parser->addBBCode("sized", '<p style="font-size: 1rem;">{param}</p>');
    $parser->addBBCode("sizet", '<p style="font-size: 1.5rem;">{param}</p>');
    $parser->addBBCode("sizeq", '<p style="font-size: 2.4rem;">{param}</p>');
    $parser->addBBCode("sizec", '<p style="font-size: 3.5rem;">{param}</p>');
    $parser->addBBCode("s", '<p style = "text-decoration: line-through;">{param}</p>');
    $parser->addBBCode("quote", '<blockquote>{param}</blockquote>');
    $parser->addBBCode("video", '<iframe width="560" height="315" src="https://www.youtube.com/embed/{param}" frameborder="0" allowfullscreen></iframe>');
    $parser->addBBCode("list", '<ul>{param}</ul>');
    $parser->addBBCode("num", '<ol>{param}</ol>');
    $parser->addBBCode("*", '<li>{param}</li>');
    $parser->addBBCode("center", '<p style = "text-align: center;">{param}</p>');
    $parser->addBBCode("left", '<p style = "text-align: left;">{param}</p>');
    $parser->addBBCode("right", '<p style = "text-align: right;">{param}</p>');
    $parser->addBBCode("table", '<table style="border: 0.0625rem solid #000000;">{param}</table>');
    $parser->addBBCode("tr", '<tr style="border: 0.0625rem solid #000000;">{param}</tr>');
    $parser->addBBCode("td", '<td style="border: 0.0625rem solid #000000;">{param}</td>');
    $parser->addBBCode("arial", '<p style="font-family: \'Arial\';">{param}</p>');
    $parser->addBBCode("comicsansms", '<p style="font-family: \'Comic Sans MS\';">{param}</p>');
    $parser->addBBCode("couriernew", '<p style="font-family: \'Courier New\';">{param}</p>');
    $parser->addBBCode("georgia", '<p style="font-family: \'Georgia\';">{param}</p>');
    $parser->addBBCode("lucidasansunicode", '<p style="font-family: \'Lucida Sans Unicode\';">{param}</p>');
    $parser->addBBCode("tahoma", '<p style="font-family: \'Tahoma\';">{param}</p>');
    $parser->addBBCode("timesnewroman", '<p style="font-family: \'Times New Roman\';">{param}</p>');
    $parser->addBBCode("trebuchetms", '<p style="font-family: \'Trebuchet MS\';">{param}</p>');
    $parser->addBBCode("montserrat", '<p style="font-family: \'Montserrat\';">{param}</p>');
$parser->parse($article);
$ajout = $parser->getAsHtml();
    $jour = date("Y-m-d");
    $heure = date("H:i", strtotime('+1 hours'));
    $content_dir = "../pictures/";
    $tmp_file = $_FILES['photo']['tmp_name'];
    $name_file = $_FILES['photo']['name'];
    if(is_uploaded_file($tmp_file)){
        move_uploaded_file($tmp_file, $content_dir . $name_file);
        $adresse = "pictures/".$name_file;
    }
    $query = $bdd->prepare('INSERT INTO article(titre, resume, adresse_photo, contenu_article, date_publication, heure_article) VALUES(:titre, :resume, :photo, :contenu, :datep, :heurep)');
    $query->execute(array('titre' => $titre,
                         'resume' => $resume,
                          'photo' => $adresse,
                         'contenu' => $ajout,
                         'datep' => $jour,
                         'heurep' => $heure)) or die(print_r($query->errorInfo()));
    $query->closeCursor();
    
     $rechercheid = $bdd->prepare('SELECT id FROM article WHERE titre = :titre2');
    $rechercheid->execute(array('titre2' => $titre));
    $donnees = $rechercheid->fetch();
    $idarticle = $donnees['id'];
    $rechercheid->closeCursor();
    
    $tag1 = intval($_POST['tag1']);
    $insertiontag = $bdd->prepare('INSERT INTO rel_tag_article(id_tag, id_article) VALUES(:idtag, :idarticle)');
    $insertiontag->execute(array('idtag' => $tag1,
                                'idarticle' => $idarticle));
    
    if(isset($_POST['tag2'])){
        $tag2 = intval($_POST['tag2']);
        $insertiontag2 = $bdd->prepare('INSERT INTO rel_tag_article(id_tag, id_article) VALUES(:idtag2, :idarticle2)');
    $insertiontag2->execute(array('idtag2' => $tag2,
                                 'idarticle2' => $idarticle));
    }
    
    if(isset($_POST['tag3'])){
        $tag3 = intval($_POST['tag3']);
        $insertiontag3 = $bdd->prepare('INSERT INTO rel_tag_article(id_tag, id_article) VALUES(:idtag3, :idarticle3)');
    $insertiontag3->execute(array('idtag3' => $tag3,
                                 'idarticle3' => $idarticle));
    }

    if(isset($_POST['tagperso']) && $_POST['tagperso'] !== ""){
        $tagperso = strip_tags(htmlspecialchars(addslashes($_POST['tagperso'])));
        $rechercheidtaggo = $bdd->prepare('SELECT * FROM tag WHERE nom_tag = :tagchercheur');
        $rechercheidtaggo->execute(array('tagchercheur' => $tagperso));
        $donnees4 = $rechercheidtaggo->fetch();
        $tagachercher2 = intval($donnees4['id_tag_important']);
        $rechercheidtaggo->closeCursor();
        
        if($tagachercher2 == ""){
            $inserttag = $bdd->prepare('INSERT INTO tag(nom_tag) VALUES(:nomtag)');
        $inserttag->execute(array('nomtag' => $tagperso));
        $rechercheidtag = $bdd->prepare('SELECT * FROM tag WHERE nom_tag = :tagcherche');
        $rechercheidtag->execute(array('tagcherche' => $tagperso));
        $donnees2 = $rechercheidtag->fetch();
        $tagachercher = intval($donnees2['id_tag_important']);
        $rechercheidtag->closeCursor();
        $insertiontag4 = $bdd->prepare('INSERT INTO rel_tag_article(id_tag, id_article) VALUES(:idtag4, :idarticle4)');
    $insertiontag4->execute(array('idtag4' => $tagachercher,
                                 'idarticle4' => $idarticle));
        } else {
            $insertiontag5 = $bdd->prepare('INSERT INTO rel_tag_article(id_tag, id_article) VALUES(:idtag5, :idarticle5)');
    $insertiontag5->execute(array('idtag5' => $tagachercher2,
                                 'idarticle5' => $idarticle));
            echo "<p>Le tag que vous avez voulu créer existe déjà ! Mais il est rajouté !</p>";
            
        }
    }
    
    ?>
    <a href="depot_fichier.php">Retour au dépot</a>
</body>
</html>