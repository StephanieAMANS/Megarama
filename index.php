<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mégarama Bordeaux</title>
    <link rel="stylesheet" href="style.css" />
    <title>Mégarama Bordeaux</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
    </style>
</head>
<body>

<?php require 'items.php' ?>

  <nav class="navbar open-mode" role="navigation">
    <div class="navbar-logo"><img class="logo" src="img/logo-megarama-bordeaux-bastide.png" alt="logo"></div>    
    <ul class="navbar-links">
      <li class="navbar-link"><a class="link" href=".sectionAffiche">Film à l'affiche</a></li>
      <li class="navbar-link"><a class="link" href="#">Prochainement</a></li>
      <li class="navbar-link"><a class="link" href="#contact">Contact</a></li>
    </ul>
    <button class="burger">
      <span class="bar"></span>  
    </button>   
  </nav>

  <section class="sectionAffiche">
      <h1> Bienvenue au Mégarama de Bordeaux</h1>
      <h2 class = "actual-movies-title">à l'affiche</h2>
      <div class = "actual-movies">
          <?php foreach ($actualMovies as $key => $movieDetails): ?>
          <div class="content">
          <a class="link-movies" href="<?= $movieDetails['synopsis']?>" target="_blank">
              <div class="content-overlay"></div>
              <img class="films" src="<?= $movieDetails['img']?>" alt="<?= $movieDetails['title']?>">
              <div class="content-details fadeIn-bottom">
                  <h3 class="content-title">+ d'infos</h3>
              </div>
          </a>
          </div>
          <?php endforeach; ?>
      </div>
  </section>

<section id="contact">
    
      <div class="container">
        <div id="left-part"> 
          <h2 class="title-important">Contactez votre cinéma</h2>
  

       
          <form id="contactForm">

            <label class="contact-Form" for="name">Nom:</label><br>
             <input class="contact-Form" type="text" id="name" name="name" /><br>
            <label class="contact-Form" for="email">Adresse email:</label><br>
             <input class="contact-Form"
               type="email"
                id="email"
                name="email"
              /><br>
            <label class="contact-Form" for="message">Message:</label><br />
             <textarea class="contact-Form" id="message" name="message"></textarea>
              <br /><br>

           <button id="button" class="button">Envoyer</button>

          </form>
        </div>

      <div id="right-part">

         <div id="adress">
           <h3 class="title">Adresse<br>Megarama Bordeaux</h3>

            <ul class="information">
               <li>7 Quai des Queyries<br>33100 Bordeaux</li>
               <li>Téléphone : 05 56 40 66 70</li>   
               <li>Moyens d'accés :</li>
                 <ul class="acces">
                  <li>Accés tramway Ligne A, arrêt Stalingrad</li>
                  <li>Batcub arrêt Pont de Pierre</li>
                  <li>Stations Vcub et BlueCub à proximité</li>
                  <li>Lignes de bus 10/16/27/28/45/80/91/92, arrêt Stalingrad</li>
               </ul>
             </ul>
      
        <img src="img/plan-megarama-bordeaux.jpg" alt="map" class="map" />

         </div> 
      </div>

    </div>

  </section>

<script src ="script.js"></script>


<footer>
   
    <div class="footerContainer">
        <div class="logoFooter">
            <img class="logoMegarama" src="img/logoFooter.png"/>
        </div>
       
        <div class="footerNavLeft"> 
            <ul class="footerUl">
            <li class="footerLi"><a class="lien" href="">Films à l'affiche</a></li>
            <li class="footerLi"><a class="lien" href="">Réservation</a></li>
            <li class="footerLi"><a class="lien" href="">Prochainement ?</a></li>
            </ul>
        </div>

        <div class="footerNavRight">
            <ul class="footerUl">
            <li class="footerLi"><a class="lien" href="">Mentions légales</a></li>
            <li class="footerLi"><a class="lien" href="">Contacts</a></li>
            <li class="footerLi"><a class="lien" href="">Accès au cinéma</a></li>
            </ul>


        </div>

        <div class="logoReseauxSociaux">
            <ul class="footerUl">
            <li class="footerLi"><a class="lien" href="https://www.facebook.com/MegaramaBordeauxBastide/"><img class="logoFacebook" src="img/logoFacebook.png"/></a></li>
            <li class="footerLi"><a class="lien" href="https://twitter.com/MegaramaBdx"><img class="logoTwitter" src="img/logoTwitter.png"/></a></li>
            <li class="footerLi"><a class="lien" href="https://www.instagram.com/megarama_bordeaux_officiel/"><img class="logoInstagram" src="img/logoInstagram.png"/></a></li>
            <li class="footerLi"><a class="lien" href="https://www.youtube.com/channel/UCBJPvdQWqdHyFici-JW4Q2g"><img class="logoYoutube" src="img/logoYoutube.png"/></a></li>
            </ul>   
        </div>
        </div>
    </footer>
</body>
</html>