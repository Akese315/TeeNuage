<!DOCTYPE html>

<html>
<meta>
<link rel="stylesheet" href="../../css/css_menunav.css"/>
<link rel="stylesheet" href="css/calcul_lesson.css"/>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://kit.fontawesome.com/6857fc4fa0.js" crossorigin="anonymous"></script>
</meta>

<body>

<?php

include '../../menu_nav.php';

?>  

<div class = "main">
<h1 class = "titre"><strong>Calculer des quotients</strong></h1>
<ul class = "index"> <p id = "index"> index : <p><br>
<li><i class="fas fa-caret-right"></i><a href = "#Addition">Addition d'un quotient</a></li>
<li><i class="fas fa-caret-right"></i><a href = "#Multiplication">Multiplication d'un quotient</a></li>
<li><i class="fas fa-caret-right"></i><a href = #division>Division d'un quotient</a></li>


</ul>

<h2 id ="Addition" class = "titre"> Addition d'un quotient </h2>

<div   class = "content">
<p>
Pour additionner 2 quotients il faut avoir le même dénominateur.</p>
<p id="reduction">Attention !!<a href="#reduction"> avant toute addition il faut voir si il y'a possibilité de réduire les fractions.</a></p>
<p>ex : <sup>27</sup>&frasl;<sub>9</sub></p></p>
<p id = "">Si on le décompose, cela donne <sup>3</sup>&frasl;<sub>1</sub> car on a trouvé que le diviseur commun était 9.</p>
<p>explication : 27/9 = 3 et 9/9 = 1</p>
<br>
<p>-Si les dénominateurs sont les mêmes, alors additionner les deux numérateur (nombres du haut).</p>
<p>-Si les dénominateurs ne sont pas les mêmes, alors il faut leur trouver un multiple qui leur soit commun.</p>
<p>ex : <sup>1</sup>&frasl;<sub>2</sub>  et  <sup>2</sup>&frasl;<sub>4</sub></p>
<p>-1x2 = 2 donc non</p>
<p>-2x2 = 4 oui nous avons deux dénominateurs
le multiple commun ici est le <strong>4</strong></p> <br>
<p> maintenant, plus difficile...</p> <br>
<p><sup>9</sup>&frasl;<sub>7</sub>  et  <sup>8</sup>&frasl;<sub>5</sub></p>
<p>Comme les dénominateurs 5 et 7 ne peuvent pas se décomposer car ce sont des nombres <a href = "#">premiers</a> il suffit de multiplier la 2ème fraction par le dénominateur de la première fraction
    et inversement.
</p>
<p> Cela a pour produit 35 car 7x5 = 35</p>
</div>

<h3  id = "Multiplication" class = "titre">Multiplication d'un quotient</h3>

<div class = "content">

<p> Pour multiplier un quotient, il suffit de multiplier les dénominateurs avec les dénominateurs et les numérateurs avec les numérateurs. </p>
<a href = "#reduction"><p class= "red_text"><i class="fas fa-exclamation-triangle"></i>Attention !! toujours réduire !!</a></p>

<p>ex de multiplication de quotient :</p>
<p> <sup>1</sup>&frasl;<sub>6</sub>  x  <sup>8</sup>&frasl;<sub>7</sub> =  <sup>1</sup>&frasl;<sub>3x2</sub> x <sup>4x2</sup>&frasl;<sub>7</sub></p>
<p> On barre le chiffre en commun qui se trouve au dénominateur de la première fraction et au numérateur de la seconde fraction (2).  Ce qui donne <sup>1</sup>&frasl;<sub>3</sub>  x  <sup>4</sup>&frasl;<sub>7</sub></p>
<p> 1x4 =4 et 3x7 = 21 ce qui donne en fraction <sup>4</sup>&frasl;<sub>21</sub></p>
</div>

<h4  id = "oppose" class = "titre">Division d'un quotient</h4>
<div class = "content">

<p> Pour diviser un quotient, il faut prendre l'inverse  d'une des fractions. Ainsi l'opération à faire n'est plus une division mais une multiplication. </p>
<p> Les étapes :</p> 
 <p>   -Inversion de la fraction du bas.<br>
    -<a href ="#Multiplication">multiplication</a> des fractions.
</p>
<a href = "#reduction"><p class= "red_text"><i class="fas fa-exclamation-triangle"></i>Attention !! toujours réduire !!</a></p>

<p>Exemple : </p>
<div>
     <img src= image/division_fraction.png alt ="fraction">
</div>

<p> <sup>18</sup>&frasl;<sub>21</sub>  x  <sup>15</sup>&frasl;<sub>5</sub> =  <sup>6x3</sup>&frasl;<sub>7x3</sub> x <sup>5x3</sup>&frasl;<sub>5x1</sub></p>
<p> On supprime les nombres en commun. </p>
<p> <sup>3x2</sup>&frasl;<sub>7</sub>  x  <sup>1</sup>&frasl;<sub>3</sub> =  <sup>2</sup>&frasl;<sub>7</sub> </p>

</div>

</div>
 <?php

    include '../../footer.php';

        ?>   
</body>
</html>