<head>
<meta charset="utf-8" />
 
 <link rel="stylesheet" href="../css/css_menunav.css"/>
 <link rel="stylesheet" href="../css/main_page_subject.css"/> 
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
 <script src="https://kit.fontawesome.com/6857fc4fa0.js" crossorigin="anonymous"></script>
</meta>
   
  
 
  <title>Matières</title>

</head>


<body>

<?php

include "../menu_nav.php";

?>  
<script src = "https://teenuage.fun/javascript/acceuil.js"></script>

<div class = "main"> 
<h1 class = "Nom_matiere"> Maths </h1>


<ul class = "sommaire">

    <ul>
      <p class = "classe"> 2nd </p>
      <li class ="liens"><a href = "Maths/Quotients_2nd.php">Les calculs de quotient</a></li>
      <li class ="liens"><a href ="Maths/inegalites_2nd.php">Les intervalles et les inéquations</a></li>
      <li class ="liens"><a href ="Maths/Les_fonctions_2nd.php">Les Fonctions</a></li>
      <li class ="liens"><a href ="Maths/pourcentage.php">Les pourcentages</a></li>
      <li class ="liens"><a href ="Maths/equation_2nd.php">Les équations nulles</a></li>
      <li class ="liens"><a href = "Maths/geometrie-plane.php">La géométrie plane</a></li>
      <li class ="liens"><a href = "Maths/vecteurs.php">Les vecteurs</a></li>
      <li class ="liens"><a href = "Maths/equation-cartesiennes.php">Les équations cartésiennes</a></li>
        
    </ul> 

    <hr class = "barre_limite ">
    <div class = "text_limite"><i class="fas fa-exclamation-triangle"></i><p> à partir de là il n'y a pas de contenu </p><i class="fas fa-exclamation-triangle"></i></div>

    <ul>
    <p class = "classe"> 1ère </p>
    <li class ="liens"><a href = "Maths/equation-2-degre.php">Les équations de second degré</a></li>
    <br><br>
    </ul> 

    <ul> <p class = "classe"> Terminale </p>    
          
    <br><br>
        
    </ul> 


</ul>

</div>
<?php

include '../footer.php';

?>  
</body><style>
h1
{

font-size: 60px;
background: linear-gradient(to right top,#F91015, #FFC12B
);
-webkit-text-fill-color: transparent;
-webkit-background-clip: text;


}
.sommaire ul li
{

border : 8px solid #F91015;

}

.sommaire ul li:hover
{

background-color : #FFC12B;

}
.sommaire ul li a
{
  
  
  color : #F91015;

}



</style>
</html>