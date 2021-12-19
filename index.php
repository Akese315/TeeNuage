

<!DOCTYPE html>

<html>

<head>

<meta name = "Description" content = "TeeNuage est un siteweb qui a pour objectif de 
proposer du contenu instructif et facile à comprendre. Mais c'est aussi et surtout une communauté
ouverte aux jeunes">
<meta name="robots" content="index,follow,nosnippet" />
<meta name="copyright" content="© TeeNuage.fun | 2021" />
<meta name="Author" content="Axel Rhelimi, Bunnkhov Thy" />
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html">
<meta name="Language" CONTENT="fr" />
<link rel="stylesheet" href="css/css_bienvenue.css"/> 
<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://kit.fontawesome.com/6857fc4fa0.js" crossorigin="anonymous"></script>


  
 
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
                              
                              
                 
                      
                  
         
          <div > <img  class = "Learn_image" src = "images/Nuage_learning.png" alt ='Learning_TeeNuage'></div> 
          
                  
            <p class = "text_section2"><strong>Révisez tout vos cours !</strong><br><br>
                  <span style ="color : #F0474C"><i class="fas fa-calculator"></i><strong>Maths</strong></span><br>
                  <span style ="color : #47A6F0"><i class="fas fa-atom"></i><strong>Physique</strong></span><br>
                  <span style ="color : #2816B5"><i class="fas fa-flag"></i><strong>Français</strong></span><br>
                  <span style ="color : rgb(85, 213, 230)"><i class="fas fa-user-cog"></i><strong>SES</strong></span><br>
                  <span style ="color : #F5BF07"><i class="fas fa-book"></i><strong>Histoire</strong></span><br>
                  <span style ="color : #0BB518"><i class="fas fa-leaf"></i><strong>SVT</strong></span><br>
          </div>
         
</p>
      </section>
      <section id="section3">
        <h2 class ="Nouveaute" ><strong>Nouveautés</strong></h2>
        
          <ul class ="list">
            <li>Ajout d'un système de connexion</li>
            <li>Ajout d'un Tchat</li>
            <li>La barre de navigation disparaît lorsque l'utilisateur scroll en bas et apparaît lorsqu'il scroll en haut.</li>
          </ul>
         <h3 class="Les_cours">Nouveaux cours</h3>
          <ul class ="list">
            <li class ="liens"><a href ="Matieres/Geographie/Developpement_inegalite_monde.php">Le développpement et les inégalités dans le monde</a></li>
            
            
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

