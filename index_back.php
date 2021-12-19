<!DOCTYPE html>

<html>

<head>

<meta name = "Description" content = "TeeNuage est un siteweb qui a pour objectif de 
proposer du contenu instructif et facile à comprendre. Mais c'est aussi et surtout une communauté
ouverte aux jeunes">
<meta name="robots" content="index,follow" />
<meta name="copyright" content="© TeeNuage.fun | 2021" />
<meta name="Author" content="Axel Rhelimi, Bunnkhov Thy" />
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html">
<meta name="Language" CONTENT="fr" />
<link rel="stylesheet" href="css/css_menunav.css"/>
<link rel="stylesheet" href="css/css_bienvenue.css"/> 

<script src="http://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="http://kit.fontawesome.com/6857fc4fa0.js" crossorigin="anonymous"></script>


  
 
  <title>TeeNuage</title>

</head>


<body class='body'>

<?php

include 'menu_nav.php';

?>  

<div class="main">
  <div class = "content">
    <section id="section1">
    
    <h1 class = "bienvenue"><strong>Bienvenue<br>sur TeeNuage</strong></h1>

      <img  class = "Welcome_image" src = "images/bam_rachel2.gif" alt ='Welcome_TeeNuage'>
      <div class= "bloc"></div>
    </section>

    <section id="section2">

          <h2 class ="Revisez"><strong>Parlez des leçons avec vos amis</strong></h2>    
          <div class = "first_section"> 
                              
                              
                 
                      
                  
                  <div> <img  class = "Learn_image" src = "images/Nuage_learning.png" alt ='Learning_TeeNuage'></div>   
                  
            <p class = "text_section2">Révisez tout vos cours !<br><br>
                  <span style ="color : #F0474C"><i class="fas fa-calculator"></i>Maths</span><br>
                  <span style ="color : #47A6F0"><i class="fas fa-atom"></i>Physique</span><br>
                  <span style ="color : #2816B5"><i class="fas fa-flag"></i>Français</span><br>
                  <span style ="color : rgb(85, 213, 230)"><i class="fas fa-user-cog"></i>SES</span><br>
                  <span style ="color : #F5BF07"><i class="fas fa-book"></i>Histoire</span><br>
                  <span style ="color : #0BB518"><i class="fas fa-leaf"></i>SVT</span><br>
          </div>
         
</p>
      </section>
      <section id="section3">
        <h2 class ="Nouveaute" ><strong>Nouveautés</strong></h2>
        
          <ul class ="list">
            <li>Ajout d'un système de connexion</li>
            <li>Ajout d'un Tchat</li>
          </ul>
         <h3 class="Les_cours"><strong>Nouveaux cours</strong></h3>
          <ul class ="list">
            <li class ="liens"><a href ="Matieres/Maths/geometrie-plane.php">La géométrie plane</a></li>
            <li class ="liens"><a href ="Matieres/Maths/vecteurs.php">Les vecteurs</a></li>             
            <li class ="liens"><a href ="Matieres/Francais/Description_personnage.php">La description d'un personnage</a></li>
            
          </ul>
          </p>
        

      </section>  
  </div>
  <?php



include 'footer.php';



?> 
</div>

  <script src="javascript/bienvenue.js"></script>

 

</body>
</html>

