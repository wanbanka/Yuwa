<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>YUWA</title>
    <meta name="description" content="Ce site rassemble des articles et des vidéos pour vous aidez à gérer votre stress et votre anciété"/>
    <meta name="keywords" content="stress, anxiété, gérer, combattre, santé, étudiants, articles, vidéos"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styleaccueilv2.css">
    <link rel="stylesheet" type="text/css" href="css/stylegeneral.css">
     
     
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css'>
    
    <link rel="stylesheet" href="css/stylepop.css">

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    
</head>
<body>
   
   <?php include('nav.php');?>
   
   
   <div class="situation">
   <div class="entretien">
       <a href="article.php?id=9" alt="Article avec des conseils pour passer un entretien"> <img src="Images/Entretien.png" alt=""></a>
   </div>
   <div class="parler">
       <a href="article.php?id=8" alt="Article avec des conseils pour parler en public"> <img src="Images/Parler.png" alt=""></a>
   </div>
   <div class="rencontre">
       <a href="article.php?id=11" alt="Article avec des conseils pour rencontrer des gens"> <img src="Images/Rencontre.png" alt=""></a>
   </div>
   </div>
   <div class="presentation"><p><span>Yuwa</span> est là pour t'aider à <span>gérer ton stress et tes angoisses.</span><br> Pour commencer nous te proposons <span>3 solutions</span> à des situations qui te sont peut-être familières</p></div>

     <a href="" ><div class="triangle"></div></a>
   
   
   <a href="#test-popup" class="open-popup-link centered-big">Destressez-moi</a>

<!-- Popup itself -->
<div id="test-popup" class="white-popup mfp-hide">
  <audio src="images/exp_01.mp3" id="hidden-player"></audio>
	<div id="player">
		<p class="coverr">Vous vous apprêtez à écouter un <span class="dark">exercice de sophrologie</span>. <br>Nous vous conseillons de trouver un <span class="dark">endroit calme et isolé</span>. <br>Pour plus d'immersion <span class="dark">utilisez un casque</span>.
         </p>
		<div class="player-song">
			
			<progress value="0" max="1"></progress>
			<div class="timestamps">
				<div class="time-now">0:00:00</div>
				<div class="time-finish">0:00:00</div>
			</div>
			<div class="actions">
				<div class="prev">
					<i class="material-icons">fast_rewind</i>
				</div>
				<div class="play">
					<a class="play-button paused" href="#">
						<div class="left"></div>
						<div class="right"></div>
						<div class="triangle-1"></div>
						<div class="triangle-2"></div>
					</a>
				</div>
				<div class="next">
					<i class="material-icons">fast_forward</i>
				</div>
			</div>
		</div>
	</div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>

  

    <script  src="js/index.js"></script>
   
    <script>
    var hamburger = document.getElementById('hamburger');
       hamburger.addEventListener('click', function() {
          document.querySelector('.menu').classList.toggle('disparition');
           document.querySelector('button').classList.toggle('bleu');
           
       });
    </script>
    <script>
    $(window).on('load', function () { // makes sure the whole site is loaded 
        // $('#status').fadeOut(); // will first fade out the loading animation 
        //$( '.tracking-in-expand' ).removeClass( "tracking-in-expand" );
        $('#preloader1').delay(100).slideUp('slow');
        $('#preloader').delay(1000).slideUp('slow'); // will fade out the white DIV that covers the website. 
        $('body').delay(350).css({
            'overflow': 'visible'
        });
    })
          
    </script>
</body>
</html>