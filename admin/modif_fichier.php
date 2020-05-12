<?php
require_once('jbbcode-1.3.0/jBBCode-1.3.0/JBBCode/Parser.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modification article</title>
</head>
<body>
    <?php
    try{
        $bdd = new PDO('mysql:host=db711050826.db.1and1.com;dbname=db711050826', 'dbo711050826', 'barbaPaPa2602');
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e){
        die('Erreur :'.$e->getMessage());
    }
    $id = intval($_POST['identite']);
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
    $parser->addBBCode("video", '<br><iframe width="560" height="315" src="https://www.youtube.com/embed/{param}" frameborder="0" allowfullscreen></iframe>');
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
    $parser->addBBCode("verdana", '<p style="font-family: \'Verdana\';">{param}</p>');
$parser->parse($article);
$ajout = $parser->getAsHtml();
    $maj = $bdd->prepare('UPDATE article SET titre = :titre, resume = :resume, contenu_article = :contenuarticle WHERE id = :id');
    $maj->execute(array('titre' => $titre,
                       'resume' => $resume,
                       'contenuarticle' => $ajout,
                       'id' => $id));
    echo "<p>L'article a été mis à jour</p>";
    echo "<a href=\"modif_article.php\">Retour</a>";
    ?>
</body>
</html>