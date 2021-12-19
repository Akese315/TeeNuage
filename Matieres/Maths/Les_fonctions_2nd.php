<!DOCTYPE html>

<html>
<meta>
<link rel="stylesheet" href="../../css/css_menunav.css"/>
<link rel="stylesheet" href="css/Les_Fonctions_2nd.css"/>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://kit.fontawesome.com/6857fc4fa0.js" crossorigin="anonymous"></script>
</meta>

<title> Les Fonctions </title>
<body>

<?php

include '../../menu_nav.php';

?>  

<div class = "main"> 

    <h1 class = "titre"> Les fonctions </h1>

<ul class = "index"> <p id = "index"> index : <p><br>
<li><i class="fas fa-caret-right"></i><a href = "#quoi_fonction?">Qu'est ce qu'une fonction ? </a></li>
<li><i class="fas fa-caret-right"></i><a href = "#ensemble_defs_fonction">L'ensemble de définition d'une fonction</a></li>
<li><i class="fas fa-caret-right"></i><a href = #Les_types_d_ensembles>Les types d'ensemble</a></li>
<li><i class="fas fa-caret-right"></i><a href = #fonctions_à_probs> Les fonctions posant problèmes </a></li>
</ul>

<h2 id = "quoi_fonction?" class= "sous_titre">Qu'est ce qu'une fonction ? </h1>

<div class = "content">
<p>
<a class = "surlignage"> Définition :</a>En mathématiques, une fonction permet de définir un résultat 
 pour chaque valeur d’un ensemble de définition.
 Ce résultat appelé <a class = "fleche">(image)</a> peut être sous forme de courbe ou alors  de tableau.

<br>
<br>
<a class ="surlignage">Exemple : </a> voici une courbe réalisé en JAVA par la fonction f(x) = 2 x 5<em>x </em>
<br><br><br><br><br><br>

<img src= "image/exemple_de_courbe.png" id = "image1"alt ="exemple de courbe">

<br><br><br><br><br><br>

Tout les points (pixels) sont calculés avec une valeur de x qui augmente de 0.001 à chaques lignes:
<br><br><br><br><br><br>
<img src= "image/Console_log_courbe_exemple.png" id = "image2" alt ="exemple de courbe">
<br><br><br><br><br><br>
<a class = "surlignage">Note : </a> Dans une fonction le résultat de la fonction f <a class = "fleche">("f" est le nom de la fonction)</a> 
par x <a class = "fleche">(l'antécédent )</a> donne y <a class = "fleche">(l'image)</a>.
 <br> <br>
<a class = "surlignage">Exemple :</a>  f(x) = x² <a class = "fleche">--> f(antécédent) = image.</a><br><br>
 On donne à l'antécédent (x) une valeur de 12 :<br> <br>
 <i class="fas fa-caret-right"></i> f(x) = x²
<br><br>
<i class="fas fa-caret-right"></i> f(12) = 12²
<br><br>
<i class="fas fa-caret-right"></i> f(12) = 144
<br><br><br>
On avait dit que le résultat d'une fonction était appelé une image.<br>
<a class = "fleche">"On peut donc en conclure que l'image de la fonction f par 12 est égal à 144."</a><br><br>(cette phrase est indispensable à chaque fin de résolution de fonction) <br> <br>

 
 </p>

 
 
</div>
<h3 id ="ensemble_defs_fonction" class = "sous_titre"> L'ensemble de définition d'une fonction </h3>
<div class ="content">
<p>

<a class = "surlignage">Définition :</a> Un ensemble de définition d'une fonction contient TOUTES les valeurs de X.
<br><br>
<a class = "fleche">Note :</a> L'ensemble de définition d'une fonction f, s'écrit : D<sub>f</sub>.
<br><br>
<a class = "fleche">Exemple :</a> D<sub>f</sub> = [0 ; 5[
<br><br>
Dans ce cas les valeurs de X sont limités de 0 (inclus) à 5 (exclus).<br><br><br>
</p>
</div>
<h4 id = "Les_types_d_ensembles" class = "sous_titre"> Les types d'ensemble </h4>
<div class = "content">
<p>


<i class="fas fa-caret-right"></i>Il existe un ensemble de définition qui prend l'ensemble de tout les nombres réels possible : Il se nomme R.
<br><br>
<i class="fas fa-caret-right"></i>Pour certaine fonctions, une ou plusieurs valeurs de x n'ont pas d'image.<br><br>
<a class ="fleche">Exemple :</a> Si une fonction f quelconque ne peut pas calculer l'image de 3, alors on écrit : <br><br>
 D<sub>f</sub> = R / [3] &ensp;&ensp;&ensp; ou &ensp;&ensp;&ensp;] -l'infini ; 3 [ U ] 3 ; +l'infini [.<br><br>
<a class ="fleche">Traduction :</a>On prend tout les nombres entiers (R) CEPENDANT on exclus 3.<br><br>
<i class="fas fa-caret-right"></i>Aussi, les fonctions ayant une racine carré, ne peuvent pas avoir une image à partir d'un antécédent négatif. <br><br>
<a class =" fleche">Exemple : </a><br><br>f(x) = &radic; x <br><br>
f(-2) = &radic; -2 <br><br>
Cela revient à avoir un ensemble de définition x strictement positif.


</p>
 </div>
 <h5 id = "fonctions_à_probs"class = "sous_titre"> Les fonctions posant problèmes </h5>
 <div class = "content">
 <p>
 Il existe plusieurs expressions posant problèmes :
 <br><br> <br>
 <a class = "surlignage">1er cas :</a> Lorsque<em>f(x) = <sup>D</sup>&frasl;<sub>N</sub> </em><br>
 On ne peut pas diviser un nombre par 0. On peut donc définir f uniquement si N &#x2260; 0.
 <br><br> <br>
 <a class = "surlignage">2ème cas :</a> Lorsque <em>f(x) = &radic;-x </em><br>
 On ne peut pas faire la racine carré d'un nombre strictement négatif. On peut donc définir f uniquement si x <span class = "greater_or_equal">&#8805;</span> 0.
 
 </p>

 </div>
 
</div>
<?php

    include '../../footer.php';

        ?> 
</body>
</html>