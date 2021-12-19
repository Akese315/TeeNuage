<meta charset="utf-8" />
 
 <link rel="stylesheet" href="../css/css_menunav.css"/>
 <link rel="stylesheet" href="../css/main_page_subject.css"/> 
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
 <script src="https://kit.fontawesome.com/6857fc4fa0.js" crossorigin="anonymous"></script>
 
</meta>
   
  
 
  <title>matières</title>

</head>


<body class='body'>

<?php

include '../menu_nav.php';

?>  
<script src = "../javascript/acceuil.js"></script>

<div class = "main"> 
<h1 class = "Nom_matiere"><i class="fas fa-flag"></i> Français </h1>

<div class = "content">

<ul class = "sommaire">

    <ul>
      <p class = "classe"> 2nd </p>
      
      <li class ="liens"><a href ="Francais/paragraphe_argumente.php">Le paragraphe argumenté !</a></li>
      <li class ="liens"><a href ="Francais/Vocabulaire_Paragraphe_argumente.php">Le vocabulaire du paragraphe argumenté !</a></li>
      <li class ="liens"><a href ="Francais/Description_personnage.php">Description d'un personnage</a></li>
        
    </ul> 

   
    <ul>
    <p class = "classe"> 1ère </p>
        <li class="liens"><a  href ="Francais/Lecture-lineaire-Albatros.php">Lecture linéaire : L'albatros</a></li>
        <li class="liens"><a  href ="Francais/Lecture-lineaire-Le-Soleil.php">Lecture linéaire : Le soleil</a></li>
        <li class="liens"><a  href ="Francais/Lecture-lineaire-Spleen.php">Lecture linéaire : Spleen</a></li>
        <li class="liens"><a  href ="Francais/Lecture-lineaire-Le-crapaud.php">Lecture linéaire : Le crapaud</a></li>
        <li class="liens"><a  href ="Francais/Lecture-lineaire-Ode-inachevee-a-la-boue.php">Lecture linéaire : L'Ode inachevée à la boue</a></li>
    </ul> 
    <hr class = "barre_limite ">
    <div class = "text_limite"><i class="fas fa-exclamation-triangle"></i><p> à partir de là il n'y a pas de contenu </p><i class="fas fa-exclamation-triangle"></i></div>
    <ul> <p class = "classe"> Terminale </p>    
          
      <br><br>
        
    </ul> 


</ul>

</div>
</div>
<style>
h1
{

font-size: 60px;
background: linear-gradient(to right top,#4153A0
, #6783F9);
-webkit-text-fill-color: transparent;
-webkit-background-clip: text;


}
.sommaire ul li
{
background: linear-gradient(to right top,#4153A0
, #6783F9);
-webkit-text-fill-color: transparent;
-webkit-background-clip: text;
margin : 30px auto;


}

</style>
<?php

include '../footer.php';

?>  
</body>
</html>