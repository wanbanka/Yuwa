-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Client :  db711050826.db.1and1.com
-- Généré le :  Jeu 29 Mars 2018 à 15:43
-- Version du serveur :  5.5.59-0+deb7u1-log
-- Version de PHP :  5.4.45-0+deb7u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `db711050826`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE DATABASE IF NOT EXISTS `no_stress`;

USE `no_stress`;

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `resume` text NOT NULL,
  `adresse_photo` text NOT NULL,
  `contenu_article` text NOT NULL,
  `date_publication` date NOT NULL,
  `heure_article` time NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `resume`, `adresse_photo`, `contenu_article`, `date_publication`, `heure_article`) VALUES
(5, 'Comprendre le stress', 'â€œJe suis stressÃ©â€. Câ€™est une phrase que nous employons rÃ©guliÃ¨rement dans nos conversations mais peu sont rÃ©ellement capables de dÃ©crire le stress.', 'images/coffee.jpg', 'â€œJe suis stressÃ©â€. Câ€™est une phrase que nous employons rÃ©guliÃ¨rement dans nos conversations mais peu sont rÃ©ellement capables de dÃ©crire le stress. On sait plus ou moins quâ€™un individu stressÃ© est un individu touchÃ© moralement (trouble de lâ€™esprit, agacement...) et physiquement (rythme cardiaque rapide, tremblotementsâ€¦) mais essayons de mieux comprendre ce phÃ©nomÃ¨ne pour mieux le maÃ®triser.<br><br>\r\n\r\n<em>DÃ©finition : Le stress est une rÃ©action physique normale Ã  des Ã©vÃ©nements qui provoquent un sentiment de menace ou qui viennent perturber votre Ã©quilibre.</em><br><br>\r\n\r\nÃŠtre victime de stress nâ€™est donc pas une anomalie mais bien un rÃ©action naturelle de notre organisme. Lorsque vous Ãªtes face Ã  un Ã©vÃ©nement jugÃ© dangereux, votre systÃ¨me nerveux rÃ©agit en libÃ©rant un flot dâ€™hormones dont lâ€™adrÃ©naline. Sa prÃ©sence dans le sang va dÃ©clencher instantanÃ©ment des rÃ©actions dans tout le corps : le rythme cardiaque augmente, la respiration s''accÃ©lÃ¨re, la pression artÃ©rielle augmente, le cerveau et les muscles reÃ§oivent plus d''oxygÃ¨ne, tandis que notre digestion se ralentit et nos pupilles se dilatent pour augmenter la vigilance. Lâ€™adrÃ©naline mobilise donc lâ€™organisme pour affronter le danger et conduit alors Ã  la manifestation visible du stress chez lâ€™individu.<br><br>\r\n\r\nLes rÃ©actions du stress sont certes dÃ©sagrÃ©ables mais il faut savoir quâ€™elles sont bÃ©nÃ©fiques. En effet, le niveau de performance au moment de l''exÃ©cution dâ€™une tÃ¢che est meilleur lorsqu''il y a une certaine dose de stress. Elle permettrait de stimuler la motivation, dâ€™Ãªtre plus lucide par rapport Ã  la situation et de sâ€™y prÃ©parer en consÃ©quence. De mÃªme, plusieurs personnes aiment et recherchent cette excitation du stress : les compÃ©titeurs aiment le challenge et se confronter Ã  des obstacles, les personnes passionnÃ©es de montagnes russes aiment avoir des sueurs froides. Ici, le stress est bien un moteur de stimulation de soi. Cependant, chez d''autres, leur relation avec le stress peut Ãªtre sensible et source de mal-Ãªtre. Si elles sont intenses ou bien durables, cela peut clairement nuire au fonctionnement social et professionnel : le stress prend alors la forme dâ€™anxiÃ©tÃ©.<br><br>\r\n\r\nAinsi, selon lâ€™individu, on peut Ãªtre tolÃ©rant ou non au stress. Pour les plus sensibles Ã  ces rÃ©actions, des solutions existent pour mieux se les approprier et ne pas se laisser envahir par celles-ci. Nous serons lÃ  pour vous accompagner durant ce processus et, avec un peu dâ€™entraÃ®nement, le stress ne sera plus votre ennemi !<br><br>', '2018-03-28', '16:17:00'),
(7, 'Le SGA D\\''Hans SELYE', 'DiplÃ´mÃ© dâ€™endocrinologie (Ã©tude des sÃ©crÃ©tions hormonales internes), Hans Selye fut lâ€™un des premiers chercheurs Ã  sâ€™Ãªtre intÃ©ressÃ© au stress dans la premiÃ¨re moitiÃ© du XXe siÃ¨cle. Sa conception du stress apparaÃ®t alors en 1925.', 'images/hans.jpg', 'DiplÃ´mÃ© dâ€™endocrinologie (Ã©tude des sÃ©crÃ©tions hormonales internes), Hans Selye fut lâ€™un des premiers chercheurs Ã  sâ€™Ãªtre intÃ©ressÃ© au stress dans la premiÃ¨re moitiÃ© du XXe siÃ¨cle. Sa conception du stress apparaÃ®t alors en 1925 : il le dÃ©finit comme lâ€™ensemble des moyens physiologiques et psychologiques mis en Å“uvre par une personne pour sâ€™adapter Ã  un Ã©vÃ©nement donnÃ©. <br><br>\r\nHans Selye publie en 1956 Â« The stress of life Â» (Le Stress de la vie). Il y dÃ©crit le mÃ©canisme du syndrome gÃ©nÃ©ral dâ€™adaptation (SGA), câ€™est-Ã -dire Â« lâ€™ensemble des modifications qui permettent Ã  un organisme de supporter les consÃ©quences dâ€™un traumatisme naturel ou opÃ©ratoire Â». Il dÃ©coupe le SGA en trois phases :Â <br><br>\r\nâ€¢ la â€œphase dâ€™alerteâ€ : lorsque lâ€™individu est confrontÃ© soudainement Ã  un agent stresseur, la phase dite dâ€™alerte sâ€™enclenche. Dans un premier temps, lâ€™individu est dit en â€œchocâ€ et se manifeste des symptÃ´mes dâ€™altÃ©rations passives telles que la tachycardie, lâ€™augmentation du tonus musculaire, la dilatation des pupilles, lâ€™hypothermie ou encore lâ€™hypotension. Cette phase dure de quelques minutes Ã  24 heures. Ensuite, lâ€™individu passe en â€œcontre-chocâ€ : lâ€™organisme dÃ©veloppe des moyens de dÃ©fense active (augmentation de la tempÃ©rature corporel, de la diurÃ¨se, du volume plasmatiqueâ€¦).Â <br><br>\r\nâ€¢ la â€œphase de rÃ©sistanceâ€ : si le traumatisme de lâ€™organisme se prolonge, le contre-choc accentue le dÃ©veloppement de ces moyens de dÃ©fense.Â <br><br>\r\nâ€¢ la â€œphase dâ€™Ã©puisementâ€ : si le traumatisme se prolonge toujours, lâ€™organisme sâ€™Ã©puise au fil du temps et les manifestations passives de la phase dâ€™alerte reviennent et lâ€™emportent sur les manifestations de dÃ©fense active. La capacitÃ© de rÃ©sistance devient alors plus faible et peut conduire Ã  la destruction des glandes surrÃ©nales, Ã  savoir la mort.Â <br><br>\r\nCe syndrome gÃ©nÃ©ral dâ€™adaptation est la rÃ©ponse rigoureuse de Selye Ã  la question â€œQuâ€™est-ce que le stress ?â€. En poursuivant ses recherches, il dÃ©veloppera le concept dâ€™Eustress: le prÃ©fixe Â« eu Â» signifie Â« bien Â» ou Â« bon Â» en grec. AccolÃ© au mot stress, il signifie littÃ©ralement Â« bon stress Â». Hans Selye montre finalement que le phÃ©nomÃ¨ne de stress est un dispositif de vigilance bÃ©nÃ©fique mais que la sur-vigilance est dommageable lorsque la quantitÃ© de demandes dÃ©passe la capacitÃ© de rÃ©ponse du sujet.Â <br><br>\r\nÂ \r\nLâ€™apport dâ€™Hans Selye est majeur : il introduit le concept de stress nÃ©gatif (dÃ©favorable) et de stress positif (favorable) et laisse entrevoir que par le dÃ©veloppement des compÃ©tences individuelles et collectives, il est possible de transformer un stress nÃ©gatif en stress positif.Â <br><br>\r\nÂ \r\nPour en savoir plus sur Hans Selye, Yuwa vous invite Ã  Ã©couter <a href="{http://ici.radio-canada.ca/premiere/premiereplus/science/p/62374/hans-selye-lhommequi-a-explique-le-stress}" target="_blank">le podcast</a> enrichissant de radio Canada <br><br>', '2018-03-28', '20:55:00'),
(8, 'Parler en public', 'Salle obscure, projecteur Ã©clatant, les yeux rivÃ©s sur vous. Oui, ce nâ€™est pas Ã©vident de parler en public. Certains sauront profiter de ces occasions pour faire entendre ce quâ€™ils auront Ã  dire. ', 'images/parlerenpublic.jpg', 'Salle obscure, projecteur Ã©clatant, les yeux rivÃ©s sur vous. Oui, ce nâ€™est pas Ã©vident de parler en public. Certains sauront profiter de ces occasions pour faire entendre ce quâ€™ils auront Ã  dire. Dâ€™autres seront dÃ©stabilisÃ©s et laisseront transparaÃ®tre des tics corporels ou verbaux. Et dâ€™autres encore seront complÃ¨tement paralysÃ©s pour sâ€™exprimer. Notre aisance Ã  lâ€™oral est diffÃ©rent dâ€™un individu Ã  lâ€™autre mais, rassurez-vous, les plus douÃ©s ne naissent pas prodiges de lâ€™Ã©loquence : ils le deviennent. <br>Â <br>\r\nYoutube est une mine dâ€™informations et de vidÃ©os intÃ©ressantes en tout genre. Les confÃ©rences TED (Technology, Entertainment et Design) en sont dâ€™excellents exemples. Pendant une vingtaine de minutes, un interlocuteur - habituÃ© ou non Ã  prendre la parole en public - va mener sa rÃ©flexion autour dâ€™un sujet devant des spectateurs curieux. A lâ€™origine de ce format imposÃ© maintenant comme une rÃ©fÃ©rence ? Chris Anderson, ancien journaliste britannique et diplÃ´mÃ© dâ€™Oxford. Il est lâ€™auteur de Â«Parler en public. TED, le guide officielÂ» (Ã©ditions Flammarion) qui propose dâ€™offrir les secrets dâ€™une prise de parole rÃ©ussie, dans nâ€™importe quelle situation de la vie quotidienne.<br>Â <br>\r\nYuwa vous propose de tirer les idÃ©es majeures de ce livre :<br><br>\r\n- <strong>Parler en public nâ€™est pas un don :</strong>Â certains ont davantage de facilitÃ©s que dâ€™autres mais cela se travaille et se perfectionne. Un mauvais orateur ne peut que tendre Ã  devenir bon, mais pour cela il faut sâ€™exercer en conditions rÃ©elles, savoir analyser ses prestations et rectifier par la suite. Ayez courage, il faut bien quelques ratÃ©s avant de rÃ©ussir !<br><br>- <strong>Soyez authentique </strong>: une prise de parole qui marche est une prise de parole qui vous ressemble. Il ne faut pas chercher Ã  jouer un rÃ´le qui ne nous correspond pas<br><br>- <strong>Focalisez vous sur votre message :</strong> rÃ©sumer sa rÃ©flexion en un seul message est souvent compliquÃ© et on peut avoir tendance Ã  digresser vers d''autres sujets. Une bonne prise de parole est une prise de parole cohÃ©rente et qui se suit facilement du dÃ©but Ã  la fin.<br><br>- <strong>Jouer sur les Ã©motions : </strong>il est nÃ©cessaire de captiver l''attention du public pour rÃ©ussir sa prise de parole. Mettre en scÃ¨ne son message en apportant du concret avec des exemples par exemple peut tirer sur des Ã©motions comme l''empathie ou l''Ã©merveillement par exemple. Donner du relief Ã  votre prise de parole !<br><br>- <strong>GÃ©rer son temps :</strong> les 30 premiÃ¨res secondes de votre prise de parole sont primordiales. Utiliser un phrase d''accroche et jouer sur la curiositÃ© sont des moyens efficaces pour bien commencer. A la fin de votre intervention, ne vous prÃ©cipitez pas pour terminer en vous Ã©parpillant mais amener une conclusion claire, Ã  apprendre par cÅ“ur, et qui apporte un vrai point final.<br><br>- <strong>RÃ©pÃ©ter sont texte : </strong>l''orateur Ã  l''aise avec son dÃ©veloppement ne joue pas de l''improvisation : il a travaillÃ©, travaillÃ© et travaillÃ© son texte avec notamment des entraÃ®nements Ã  l''oral. C''est la clÃ© pour gagner en confiance avant de montrer sur la scÃ¨ne et briller devant votre public.<br><br>', '2018-03-28', '21:23:00'),
(9, 'Passer un entretien', 'Que Ã§a soit un stage ou un contrat sur le long terme, passer des entretiens d\\''embauches est souvent quelque chose de stressant. Il faut convaincre le recruteur qu\\''on est LE candidat pour pouvoir rÃ©pondre aux attentes - souvent nombreuses - de l\\''entreprise.', 'images/passerunentretien.jpg', 'Que Ã§a soit un stage ou un contrat sur le long terme, passer des entretiens d''embauches est souvent quelque chose de stressant. Il faut convaincre le recruteur qu''on est LE candidat pour pouvoir rÃ©pondre aux attentes - souvent nombreuses - de l''entreprise. Yuwa propose alors des conseils Ã  mettre en application pour se mettre dans les meilleurs conditions pour rÃ©ussir son entretien :<br><br>\r\n- <strong>Â Planifier les choses Ã  lâ€™avance</strong> : pour ne pas perdre ses moyens Ã  cause du stress, mieux vaut se prÃ©parer Ã  l''avance examinant par exemple les Ã©tapes de votre trajet pour vous rendre Ã  l''entretien. Prenez quelques instants pour planifier les dÃ©tails de votre itinÃ©raire et n''oubliez pas de prÃ©voir une dizaine de minutes d''avance afin dâ€™Ã©viter les Ã©ventuels retards de transport.<br><br>\r\n- <strong> Se renseigner sur lâ€™entreprise </strong>: soyez au point sur votre sujet ! Internet est une ressource trÃ¨s riche et prÃ©cieuse pour vous aider Ã  comprendre la structure et les valeurs de votre future entreprise.<br><br>\r\n-Â  <strong>Essayer dâ€™anticiper les questions de lâ€™entretien :</strong> certaines questions sont classiques et souvent employÃ©es lors d''un entretien de recrutement comme Â« Pouvez-vous me parler de vous ? Â» ou bien Â« Quels sont vos dÃ©fauts et vos qualitÃ©s ? Â» en passant par Â« Qu''Ãªtesvous en mesure d''apporter Ã  notre entreprise ? Â». Bref, lâ€™important est de savoir rÃ©pliquer avec confiance, donc mieux vaut avoir sâ€™imaginer les rÃ©ponses des questions pour se mettre en pleine confiance !<br><br>\r\n- <strong>Soigner votre apparence : </strong>votre apparence devra probablement Ãªtre adaptÃ©e en fonction du secteur dans lequel vous dÃ©sirez acquÃ©rir un poste. En consÃ©quence, il n''y a pas rÃ©ellement de tenue type Ã  adopter lors de l''entretien de recrutement. L''important est de se diriger vers des vÃªtements sobres (on a dit la sobriÃ©tÃ©, pas la surenchÃ¨re !).<br><br>\r\n- <strong>Mettre en valeur ses forces :</strong> vous devez donc parfaitement connaÃ®tre votre parcours et les compÃ©tences demandÃ©es afin de pouvoir reprÃ©senter un candidat adaptÃ© aux yeux de l''employeur lors de votre entretien de recrutement. Câ€™est-Ã -dire rÃ©pondre avec sÃ©rÃ©nitÃ© tout en nÃ©cessitant pas Ã  appuyer sur les points forts de certains de vos projets par exemple.<br><br>', '2018-03-28', '22:03:00'),
(10, 'Comprendre l\\''anxiÃ©tÃ©', 'Le stress est quelque chose quâ€™on arrive souvent Ã  bien dÃ©terminer mais quâ€™en est-il de lâ€™anxiÃ©tÃ© ?\r\nEt oui, la plupart dâ€™entre nous ont gÃ©nÃ©ralement du mal Ã  distinguer ces deux comportements qui\r\nont pourtant des consÃ©quences trÃ¨s diffÃ©rents sur lâ€™Ã©tat de lâ€™individu.\r\n', 'images/tea.jpg', 'Le stress est quelque chose quâ€™on arrive souvent Ã  bien dÃ©terminer mais quâ€™en est-il de lâ€™anxiÃ©tÃ© ?Et oui, la plupart dâ€™entre nous ont gÃ©nÃ©ralement du mal Ã  distinguer ces deux comportements qui\r\nont pourtant des consÃ©quences trÃ¨s diffÃ©rents sur lâ€™Ã©tat de lâ€™individu. <br><br>\r\nÃŠtre stressÃ©, câ€™est un phÃ©nomÃ¨ne normal qui peut toucher nâ€™importe qui. Câ€™est ce qui se passe\r\ndans notre corps et notre esprit lorsque nous sommes soumis Ã  une pression ou agression du\r\nmonde extÃ©rieur (câ€™est ce quâ€™on appelle des agents dits Â« stresseurs Â» comme le travail, le bruit, le\r\nconflitâ€¦). Pour ce qui est de lâ€™anxiÃ©tÃ©, on peut lâ€™observer quand lâ€™Ãªtre humain dÃ©veloppe une\r\ntendance Ã  anticiper ou grossir les difficultÃ©s rencontrÃ©es, mÃªme parfois Ã  sâ€™en crÃ©er ou Ã  sâ€™en\r\nimaginer alors quâ€™il nâ€™y en pas.<br><br>\r\nLe lien entre stress et anxiÃ©tÃ© ? Lâ€™anxiÃ©tÃ© câ€™est en quelque sorte la capacitÃ© dâ€™amplifier ou Ã  crÃ©er\r\nsoi-mÃªme du stress. Pour donner un exemple concret, un travailleur stressÃ© par son travail est\r\nnettement plus apaisÃ© le soir, en rentrant chez lui quand il est loin de Â« la source de stress Â». Or,\r\ndans le cas de lâ€™anxiÃ©tÃ©, le travailleur anxieux, mÃªme loin de cette source, cogite Ã©normÃ©ment et a\r\ndu mal Ã  se dÃ©tendre.<br><br>\r\nLes symptÃ´mes sont les mÃªmes liÃ©s au stress : irritabilitÃ©, troubles du sommeil, difficultÃ©s de\r\nconcentration... Lâ€™intensitÃ© du trouble est variable en fonction des individus. Elle peut-Ãªtre trÃ¨s\r\nforte chez certaines personnes, et Â« banalisÃ©e Â» pendant un certain temps chez dâ€™autres qui ont\r\ntendance Ã  intÃ©grer comme Â« normale Â» cette inquiÃ©tude omniprÃ©sente ainsi que la tension\r\nnerveuse et physique qui en dÃ©coule.<br><br>\r\nDire au revoir Ã  lâ€™anxiÃ©tÃ©, câ€™est tout Ã  fait rÃ©alisable et Yuwa est lÃ  pour vous aider dans cet objectif.\r\nPour terminer, on vous invite Ã  visualiser la vidÃ©o suivante qui illustre bien la diffÃ©rence entre le\r\nstress et lâ€™anxiÃ©tÃ© :<br><br>\r\nhttps://www.youtube.com/watch?v=S8-zfk9_lhg', '2018-03-28', '22:10:00'),
(11, 'Faire des rencontre', 'Pour beaucoup de personnes, le simple fait dâ€™aborder des gens quâ€™elles ne connaissent pas et\r\ndâ€™entretenir une conversation est synonyme de mission impossible. Pourtant, rÃ©ussir ces\r\nrencontres peut Ãªtre source dâ€™Ã©panouissement et mÃªme dâ€™opportunitÃ©s !', 'images/fairedesrencontres.jpg', 'Pour beaucoup de personnes, le simple fait dâ€™aborder des gens quâ€™elles ne connaissent pas etdâ€™entretenir une conversation est synonyme de mission impossible. Pourtant, rÃ©ussir ces\r\nrencontres peut Ãªtre source dâ€™Ã©panouissement et mÃªme dâ€™opportunitÃ©s ! Les conseils suivants\r\nvous aideront Ã  gagner suffisamment de confiance pour faire le premier pas vers lâ€™autre :<br><br>\r\n- <strong>Ne rÃ©flÃ©chissez pas trop :</strong> en restant focaliser sur chacun de vos mots, en imaginant les\r\npossibles bourdes Ã  lâ€™oral, vous vous mettez bÃªtement en difficultÃ©s. Respirez un bon coup,\r\npensez Ã  maintenir un dÃ©bit de parole calme (se prÃ©cipiter pour terminer ses phrases, Ã§a\r\nperd souvent lâ€™interlocuteur...) et lancez-vous !<br><br>\r\n- <strong>Profiter des sorties culturelles :</strong> se rendre Ã  une exposition ou bien Ã  une confÃ©rence\r\nprofessionnelle peut vous aider Ã  tisser facilement des liens avec autrui. La rÃ¨gle pour vous\r\nlaisser pleinement jouir de ces moments est dâ€™y aller seul : comme Ã§a pas moyen de se\r\nrÃ©fugier derriÃ¨re son ami !<br><br>\r\n- <strong>Employer des Â« small talk Â» :</strong> un bon sens de la rÃ©partie vous ouvre toutes les portes !\r\nSavoir maÃ®triser le small talk (ou Â« la conversation lÃ©gÃ¨re Â») est un bon moyen dâ€™aborder\r\nefficacement un inconnu. Â« La mÃ©tÃ©o est bonne aujourdâ€™hui, nâ€™est-ce pas ? Â» ou Â« comment\r\na Ã©tÃ© votre journÃ©e ? Â» sont des exemples pour dÃ©marrer simplement une conversation.\r\nBonne humeur et sens de lâ€™humour sont des avantages pour entretenir votre small talk.<br><br>\r\n- <strong>Demander un ami de vous aider :</strong> si parler Ã  des inconnus vous effraie beaucoup trop,\r\nvous pourriez demander lâ€™aide dâ€™un ami Ã  lâ€™aise dans cet exercice pour Ãªtre votre\r\nintermÃ©diaire. Vous vous sentirez en effet plus Ã  lâ€™aise pour discuter mais il faut Ã©viter que\r\nvotre ami soit trop dominant dans la conversation et qui vous laisse, au contraire, prendre\r\nla main progressivement.<br><br>\r\n- <strong>Utiliser le non-verbal :</strong> avant dâ€™aborder votre Â« cible Â», il peut Ãªtre plus naturel de montrer\r\nquâ€™on veut crÃ©er un contact avec du non-verbal. Cela peut Ãªtre le regard qui croise celle de\r\nlâ€™autre personne, un lÃ©ger sourire, un lÃ©ger mouvement de la main, bref des choses subtiles\r\net non brusques.<br><br>\r\n- <strong>Se tenir Ã  des sujets qui ne risquent pas dâ€™engendrer la controverse : </strong>mieux vaut\r\nÃ©viter dâ€™introduire un sujet religieux ou politique qui pourrait inviter Ã  un dÃ©bat houleux. Par\r\ncontre, dÃ©battre est tout Ã  fait possible sur des sujets plus lÃ©gers comme la meilleur\r\ndestination dâ€™Europe, le plus beau monument du monde ou le film le plus divertissant de\r\nlâ€™annÃ©e. Ce genre de sujets invitent Ã  discuter sur un ton lÃ©ger, Ã  se dÃ©couvrir de maniÃ¨re\r\nludique et Ã  installer une agrÃ©able atmosphÃ¨re.<br><br>', '2018-03-28', '22:16:00');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text NOT NULL,
  `jour_publication` text NOT NULL,
  `jour` text NOT NULL,
  `mois` text NOT NULL,
  `annee` text NOT NULL,
  `heure_publication` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  PRIMARY KEY (`id_comment`),
  KEY `id_utilisateur` (`id_utilisateur`),
  KEY `id_article` (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=73 ;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id_comment`, `contenu`, `jour_publication`, `jour`, `mois`, `annee`, `heure_publication`, `id_utilisateur`, `id_article`) VALUES
(70, 'Merci beaucoup pour cet article ! J\\''ai un peu de mal Ã  comprendre les small-talks quelqu\\''un pourrait m\\''aider ?', '29-03-2018', '29', '03', '2018', '10:43', 79, 11),
(71, 'Super trop bien !', '29-03-2018', '29', '03', '2018', '15:09', 40, 11),
(72, 'J\\''aime', '29-03-2018', '29', '03', '2018', '15:52', 40, 8);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE IF NOT EXISTS `inscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` text NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=83 ;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`id`, `nom`, `prenom`, `pseudo`, `mail`, `mot_de_passe`) VALUES
(40, 'SENILH', 'ThÃ©o', 'titi77', 't.senilh@gmail.com', '24theo08!!!'),
(57, 'YTRA', 'Louis', 'bambou', 'bambou@gmail.com', 'camelias'),
(58, 'AYOUB', 'Samy', 'ayouuu', 'samy.ayoub@gmail.com', 'wearethefuture'),
(59, 'CHARDUS', 'JÃ©rÃ©my', 'jeremius', 'jeremius@gmail.com', 'jeremius'),
(63, 'KERNORE', 'MaitÃ©', 'maÃ¯tÃ©', 'maite.kernore@gmail.com', 'bretagne'),
(65, 'SAZARIN', 'Mathieu', 'msrin', 'mathieu.sazarin@gmail.com', 'msazarin'),
(66, 'MORNAIS', 'Lucas', 'lucz', 'lucas.mornais@gmail.com', 'morsay28'),
(72, 'CHARDON', 'JÃ©rÃ©miah', 'jeremiah', 'jeremiah@chardon.fr', 'scotland'),
(74, 'SAZARIN', 'Marie', 'marie', 'uitr.o@gmail.com', 'outrodeouf'),
(76, 'BLANCHARD', 'Mathieu', 'mattlebeau', 'mathieu.blanchard@bg77.com', 'shinobis'),
(78, 'SUPERKONAR', 'Cyril', 'CYR!L', 'superkonar@gmail.com', 'mythomane'),
(79, 'BOSCO', 'LÃ©a', 'yatiba', 'lea11bosco@gmail.com', 'barbaPaPa2602'),
(80, 'SONEUF', 'Morgane', 'mogolpb', 'morgane.sauneuf@gmail.com', 'so9morgane'),
(81, 'MESTRALETTI', 'Charline', 'Nekoneko', 'charlinenekogirl@gmail.com', 'Detente2.Serenite.'),
(82, 'VACQUIER', 'Benjamin', 'Barba', 'benjaminvacquierkozlowiez@gmail.com', 'barbapapa1');

-- --------------------------------------------------------

--
-- Structure de la table `message_forum`
--

CREATE TABLE IF NOT EXISTS `message_forum` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `texte_publication` text NOT NULL,
  `date_publication` date NOT NULL,
  `heure_publication` time NOT NULL,
  `id_sujet` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id_message`),
  KEY `id_utilisateur` (`id_utilisateur`),
  KEY `id_sujet` (`id_sujet`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `message_forum`
--

INSERT INTO `message_forum` (`id_message`, `texte_publication`, `date_publication`, `heure_publication`, `id_sujet`, `id_utilisateur`) VALUES
(11, 'Bonjour', '2018-01-15', '11:43:00', 1, 40),
(13, 'Yo', '2018-01-15', '11:46:00', 1, 40),
(16, 'J\\''ai des problÃ¨mes. Aidez-moi', '2018-01-18', '14:46:00', 4, 40),
(17, 'Salut', '2018-01-29', '10:43:00', 1, 40),
(21, 'qzmsfjmqjzf', '2018-03-29', '15:57:00', 11, 79),
(22, 'Hello', '2018-03-29', '15:59:00', 14, 40),
(23, '1,2 test', '2018-03-29', '15:59:00', 16, 40),
(24, 'It\\''s me', '2018-03-29', '15:59:00', 14, 40);

-- --------------------------------------------------------

--
-- Structure de la table `rel_forum_tag`
--

CREATE TABLE IF NOT EXISTS `rel_forum_tag` (
  `id_forum` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL,
  KEY `id_forum` (`id_forum`),
  KEY `id_tag` (`id_tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `rel_forum_tag`
--

INSERT INTO `rel_forum_tag` (`id_forum`, `id_tag`) VALUES
(1, 1),
(1, 2),
(4, 1),
(4, 3);

-- --------------------------------------------------------

--
-- Structure de la table `rel_inscription_tag`
--

CREATE TABLE IF NOT EXISTS `rel_inscription_tag` (
  `id_tag` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  KEY `id_tag` (`id_tag`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `rel_inscription_tag`
--

INSERT INTO `rel_inscription_tag` (`id_tag`, `id_utilisateur`) VALUES
(1, 40),
(2, 40),
(3, 57),
(3, 63),
(1, 72),
(1, 76),
(2, 76),
(3, 76);

-- --------------------------------------------------------

--
-- Structure de la table `rel_tag_article`
--

CREATE TABLE IF NOT EXISTS `rel_tag_article` (
  `id_tag` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  KEY `id_tag` (`id_tag`),
  KEY `id_article` (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `rel_tag_article`
--

INSERT INTO `rel_tag_article` (`id_tag`, `id_article`) VALUES
(1, 5),
(1, 7),
(1, 8),
(1, 9),
(2, 10),
(3, 10),
(1, 11);

-- --------------------------------------------------------

--
-- Structure de la table `sujet_forum`
--

CREATE TABLE IF NOT EXISTS `sujet_forum` (
  `id_sujet_forum` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `date_publication` date NOT NULL,
  `heure_publication` time NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id_sujet_forum`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `sujet_forum`
--

INSERT INTO `sujet_forum` (`id_sujet_forum`, `titre`, `date_publication`, `heure_publication`, `id_utilisateur`) VALUES
(1, 'Je suis trop stress&eacute en cours', '2017-12-12', '10:00:00', 40),
(4, 'ProblÃ¨mes Ã  l\\''Ã©cole', '2018-01-18', '14:35:00', 40),
(11, 'Conseil prÃ©paration soutenance', '2018-03-29', '15:45:00', 79),
(14, 'Hello', '2018-03-29', '15:48:00', 40),
(16, 'Test', '2018-03-29', '15:59:00', 40),
(17, 'Bientot les soutenances j\\''ai peur', '2018-03-29', '16:33:00', 40);

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id_tag_important` int(11) NOT NULL AUTO_INCREMENT,
  `nom_tag` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tag_important`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `tag`
--

INSERT INTO `tag` (`id_tag_important`, `nom_tag`) VALUES
(1, 'Stress'),
(2, 'Anxi&eacutet&eacute'),
(3, 'Vid&eacuteo');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `inscription` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `message_forum`
--
ALTER TABLE `message_forum`
  ADD CONSTRAINT `message_forum_ibfk_1` FOREIGN KEY (`id_sujet`) REFERENCES `sujet_forum` (`id_sujet_forum`) ON DELETE CASCADE,
  ADD CONSTRAINT `message_forum_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `inscription` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `rel_forum_tag`
--
ALTER TABLE `rel_forum_tag`
  ADD CONSTRAINT `rel_forum_tag_ibfk_1` FOREIGN KEY (`id_forum`) REFERENCES `sujet_forum` (`id_sujet_forum`),
  ADD CONSTRAINT `rel_forum_tag_ibfk_2` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag_important`);

--
-- Contraintes pour la table `rel_inscription_tag`
--
ALTER TABLE `rel_inscription_tag`
  ADD CONSTRAINT `rel_inscription_tag_ibfk_1` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag_important`),
  ADD CONSTRAINT `rel_inscription_tag_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `inscription` (`id`);

--
-- Contraintes pour la table `rel_tag_article`
--
ALTER TABLE `rel_tag_article`
  ADD CONSTRAINT `rel_tag_article_ibfk_1` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag_important`),
  ADD CONSTRAINT `rel_tag_article_ibfk_2` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`);

--
-- Contraintes pour la table `sujet_forum`
--
ALTER TABLE `sujet_forum`
  ADD CONSTRAINT `sujet_forum_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `inscription` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
