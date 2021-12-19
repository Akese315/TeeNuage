<!DOCTYPE html>

<html>
<meta>
<link rel="stylesheet" href="../../css/css_menunav.css"/>
<link rel="stylesheet" href="css/Chiffres_significatifs_2nd.css"/>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://kit.fontawesome.com/6857fc4fa0.js" crossorigin="anonymous"></script>
</meta>
<head>
 
  <title>Les Chiffres_significatifs_2nd</title>

</head>

<body>

<?php

include '../../menu_nav.php';

?>  
<div class = "main">
<h1 class = "titre">Les Inégalités </h1>


<ul class = "index"> <p id = "index"> index : <p><br>
<li><i class="fas fa-caret-right"></i><a href = "#Def_chiffre_signifi">Chiffre Significatif</a></li>
<li><i class="fas fa-caret-right"></i><a href = "#Recoco_un_chiffre_signifi">Comment savoir quand zéro est significatif ?</a></li>
<li><i class="fas fa-caret-right"></i><a href = #multi&divi>Lors de multiplications et de divisions</a></li>
<li><i class="fas fa-caret-right"></i><a href = #sous&add>Lors de soustractions et d'additions</a></li>
</ul>

<h2 id ="Def_chiffre_signifi" class = "titre">Chiffre Significatif</h2>
<div   class = "content">
<p>
<a class = "surlignage">Définition</a> : Un chiffre est dit significatif si il correspond à la réalité / si l'on peut faire confiance à sa valeur.

</p>
<br>
<br>
<br>
</div>
<h3 id ="Recoco_un_chiffre_signifi" class = "titre">Comment savoir quand zéro est significatif ?</h3>
<div class = "content">

<p>Si il n'y a que des zéros à gauche alors, on les compte pas comme significatifs.
Tous les autres, oui.</p>
<p>Exemple :</p> <p> <br>0,0035 <a class = "fleche"> ==></a> 2 chiffres significatifs.</p>
<p>          3.04 <a class = "fleche"> ==></a> 3 chiffres significatifs.</p>
</div>
<h4 id ="multi&divi" class = "titre">Lors de multiplications et de divisions :</h4>
<div class = "content">
    <p>Le résultat doit comporter autant de chiffres significatifs que le facteur en ayant le moins dans l'opération </p>
    <p>Exemple :</p> <p> <br>5.032 x 2.30  <a class = "fleche"> ==></a> 11.6 (2.30 ayant le moins de chiffres significatifs en possède 3 donc le résultat en aura autant).</p>
    
</div>
<h5 id ="sous&add" class = "titre">Lors de soustractions et d'additions :</h5>
<div class = "content">
    <p> Le résultat doit contenir autant de chiffres significatifs après la virgule que le chiffre en ayant le moins dans l'opération.</p>
    <p>Exemple :</p> <p> <br>5.4-2.42<a class = "fleche"> ==></a> 3.0 .</p>
    <p>5.4 est le chiffre en possèdant le moins après la virgule (1) donc le résultat comportera qu'un seul chiffre significatif après la virgule. </p>
</div>

</div>
<?php

include '../../footer.php';

?>  
</body>
</html>