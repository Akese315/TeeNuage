<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="../../css/css_menunav.css"/>
<link rel="stylesheet" href="css/densite_2nd.css"/>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://kit.fontawesome.com/6857fc4fa0.js" crossorigin="anonymous"></script>
<meta name="robots" content="index,follow" />
<meta name="copyright" content="© TeeNuage.fun | 2021" />
<meta name="Author" content="Axel Rhelimi, Bunnkhov Thy" />
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html">
<meta name="Language" CONTENT="fr" />
<meta name="description" content="Cette page vous donne un résumé sur la densité !" />
</head>

<body>

<?php

include '../../menu_nav.php';

?>  

<div class = "main">
<h1 class = "titre">Densité, Masse/Volumique et Proportions</h1>


<ul class = "index"> <p id = "index"> index : <p><br>
<li><i class="fas fa-caret-right"></i><a href = "#Formule_masse_volumique">Formule de la masse volumique</a></li>
<li><i class="fas fa-caret-right"></i><a href = "#proportions_masse_volume">Les proportions de masse et de volume</a></li>
<li><i class="fas fa-caret-right"></i><a href = #densite_liquide_solide>La densité d'un liquide ou d'un solide</a></li>
<li><i class="fas fa-caret-right"></i><a href = #densite_gaz>La densité d'un gaz</a></li>
</ul>
<div class = "content">
<h2 id = "Formule_masse_volumique" class = "titre"> Formule de la masse volumique </h2>

<p> pour calculer la masse volumique il faut diviser la masse par le volume.
 <br>  Exemple : nous avons une bouteille de coca qui pèse 2,072kg et un volume de 2L.
</p>
<p> Masse/Volumique = <sup>Masse</sup>&frasl;<sub>Volume</sub> </p>
<p> <a class = "fleche"> ==> </a> Masse/Volumique = <sup>2,072kg</sup>&frasl;<sub>2L</sub> </p>
<p> <a class = "fleche"> ==> </a> Masse/Volumique = 1,036kg/L </p>

</div>
<h3 id= "proportions_masse_volume" class = "titre"> Les proportions de masse et de volume</h3>
<div class = "content">
<p> Pour calculer la proportion d'une masse ou d'un volume, il faut diviser la masse de l'espèce par la masse du mélange.<br>
Exemple : On veut connaître la proportion de la masse du sucre dans une bouteille de coca  </p>
<p> Proportion = <sup>Masse de l'espèce</sup>&frasl;<sub>Masse du mélange</sub> 
<p> <a class = "fleche"> ==> </a> Proportion = <sup>212g</sup>&frasl;<sub>2072g</sub> </p>
<p> <a class = "fleche"> ==> </a> Proportion = 0.10 <a class = "fleche"> ==> </a> 10%</p>
<p><a class = "fleche">Il y a donc 10% de sucre dans une bouteille de coca. </a></p>
<p> Exemple : on veut connaître la proportion du volume de lait dans un verre de Milkshake. </p>
<p> Proportion = <sup>Volume de l'espèce</sup>&frasl;<sub>Volume du mélange</sub> 
<p> <a class = "fleche"> ==> </a> Proportion = <sup>0.125L</sup>&frasl;<sub>0.2L</sub> </p>
<p> <a class = "fleche"> ==> </a> Proportion = 0.6 <a class = "fleche"> ==> </a> 60%</p>
<p><a class = "fleche">Il y a donc 60% de lait dans un verre de Milkshake. </a></p>
</div>
<h4 id = "densite_liquide_solide" class ="titre"> La densité d'un liquide ou d'un solide</h4>
<div class = "content">

<p>Pour connaître la densité d'un liquide ou d'un solide, il faut diviser la masse volumique du solide ou du liquide par la masse volumique de l'eau.<br>
<a class = "surlignage"> Note :</a> La masse volumique de l'eau est égal à 1. </p>
<p> densité =  <sup>Masse volumique de la substance</sup>&frasl;<sub>Masse volumique de l'eau</sub> </p>
<p> d =  <sup>P</sup>&frasl;<sub>P eau</sub> </p>
<p> Exemple : on veut trouver la densité d'un hamburger </p> 
<p> densité =  <sup>Masse volumique de la substance</sup>&frasl;<sub>Masse volumique de l'eau</sub> </p>
<p>  <a class = "fleche"> ==> </a>densité =  <sup>0.2kg/L</sup>&frasl;<sub>1kg/L</sub> </p>
<p>  <a class = "fleche"> ==> </a>densité =  0.2 </p>
</div>
<h4 id = "densite_gaz" class ="titre"> La densité d'un gaz</h4>
<div class = "content">

<p>Pour connaître la densité d'un gaz, il faut diviser la masse volumique du gaz par la masse volumique de l'air.<br>
<a class = "surlignage"> Note :</a> La masse volumique de l'air est égal à 1,225 kg/L. </p>
<p> densité =  <sup>Masse volumique de la substance</sup>&frasl;<sub>Masse volumique de l'air</sub> </p>
<p> d =  <sup>P</sup>&frasl;<sub>P air</sub> </p>
<p> Exemple : on veut trouver la densité du Radon (un élément chimique)</p> 
<p> densité =  <sup>Masse volumique de la substance</sup>&frasl;<sub>Masse volumique de l'air</sub> </p>
<p>  <a class = "fleche"> ==> </a>densité =  <sup>9,73 kg/L</sup>&frasl;<sub>1,225kg/L</sub> </p>
<p>  <a class = "fleche"> ==> </a>densité =  7,94kg/L </p>
<br>
<p> Voilà c'en est fini pour ce cours !!</p>
</div>



</div><?php

include '../../footer.php';

?>  
</body>
</html>