<meta charset="utf-8" />
 
 <link rel="stylesheet" href="../css/css_menunav.css"/>
 <link rel="stylesheet" href="../css/main_page_subject.css"/> 
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
 <link rel = "stylesheet" href = "../font_awesome/fontawesome-free-5.14.0-web/css/fontawesome.min.css">
</meta>
   
<head>
 
  <title>matières</title>

</head>


<body class='body'>

<?php

include '../menu_nav.php';

?>  
<script src = "../javascript/acceuil.js"></script>

<div class = "main"> 
<h1 class = "Nom_matiere"> Science physique </h1>


<ul class = "sommaire">

    <ul>
      <p class = "classe"> 2nd </p>     
        
      <li class ="liens"><a href ="SP/Chiffres_significatifs_2nd.php">Les chiffres significatifs</a></li>
      <li class ="liens"><a href ="SP/densite_2nd.php">Densité, Masse/Volumique et Proportions</a></li>
      <li class ="liens"><a href ="SP/Description_mouvement.php">Description d'un mouvement</a></li>
      <li class ="liens"><a href ="SP/Description_mouvement_mecanique.php">Description d'un mouvement mécanique</a></li>
      <li class ="liens"><a href ="SP/Les_atomes.php">Les atomes</a></li>
      <li class ="liens"><a href ="SP/Configuration-electronique.php">La configuration électronique</a></li>
      <li class ="liens"><a href ="SP/le-son.php">Le son</a></li>
          
        
    </ul> 

    <hr class = "barre_limite ">
    <div class = "text_limite"><i class="fas fa-exclamation-triangle"></i><p> à partir de là, il n'y a pas de contenu </p><i class="fas fa-exclamation-triangle"></i></div>

    <ul>
    <p class = "classe"> 1ère </p>
         
    
        
    </ul> 

    <ul> <p class = "classe"> Terminale </p>    
          
    
        
    </ul> 


</ul>

</div>

<?php

include '../footer.php';

?>  
</body>
</html>
<style>
h1
{

font-size: 60px;
background: linear-gradient(to right top,#c0dfdb, rgb(66, 218, 238));
-webkit-text-fill-color: transparent;
-webkit-background-clip: text;


}
.sommaire ul li
{
margin : 30px auto;
}
.sommaire ul li a
{
  color : inherit;
  color : #c0dfdb;
}

</style>