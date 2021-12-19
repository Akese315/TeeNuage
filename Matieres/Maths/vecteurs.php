<!DOCTYPE html>

<html>
<head>
<meta name="robots" content="index,follow" />
<meta name="copyright" content="© TeeNuage.fun | 2021" />
<meta name="Author" content="Axel Rhelimi, Bunnkhov Thy" />
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html">
<meta name="Language" CONTENT="fr" />
<meta name="description" content="Cette page explique les vecteurs !" />
<link rel="stylesheet" href ="css/vecteurs.css">
</head>

<title> Les vecteurs </title>
<body>

<?php

include '../../menu_nav.php';

?>  

<div class = "main"> 
<h1 class= "titre">Les vecteurs</h1>
<ul class = "index"> <p id = "index"> index : <p><br>
<li><i class="fas fa-caret-right"></i><a href = "#Vecteur">Le vecteur</a></li>
<li><i class="fas fa-caret-right"></i><a href = "#Vecteur-egaux">Les vecteurs égaux</a></li>
<li><i class="fas fa-caret-right"></i><a href = "#Somme-vecteur">Somme de deux vecteurs</a></li>
<li><i class="fas fa-caret-right"></i><a href = "#Differenc-vecteur">Différence de deux vecteurs</a></li>
<li><i class="fas fa-caret-right"></i><a href = "#Produit-vecteur">Produit d'un vecteur par un réel</a></li>


</ul>
<h2 class="sous_titre" id="Vecteur"> Le vecteur</h2>
<div class = "content">
<p>
Un vecteur est une translation qui transforme un point A en un point B.
Un vecteur possède :</p><br>
<ul class ="list">
<li>Une direction (un angle)</li>
<li>Un sens</li>
<li>Une norme (longueur)</li>
</ul>
<img src ="image/Vecteur1.png" id="img1" alt="Vecteur">
</div>
<h3 class="sous_titre" id="Vecteur-egaux">Les vecteur égaux</h3>
<div class="content">
    <p>Deux vecteur son égaux si et seulement si ils possèdent la même norme, le même sens et la même direction.
    <br>Exemple : </p>
    <img src="image/Vecteur-egaux.png" id="img2" alt="Vecteurs égaux">
    <br><br>
    Si plusieurs vecteurs sont égaux alors ils peuvent devenir un représentant d'un même vecteur que l'on peut noter
    par une lettre : u,v.
</div>
<h4 class="sous_titre" id="Somme-vecteur">Somme de deux vecteurs</h4>
<div class="content">
<p>
Pour additionner plusieurs vecteurs, nous devons placer les vecteurs les uns à la suite des autres.<br>
Voici deux vecteurs :
<br>
<img src="image/Somme-vecteurs1.png" id="img3" alt="Somme de deux vecteurs"><br>
Voici la somme des deux vecteurs :<br>
<img src="image/Somme-vecteurs2.png" id="img4" alt="Somme de deux vecteurs">
<br><br>
<a class="surlignage">Remarque :</a> attention à l'ordre de l'addition! Car selon l'ordre, les vecteurs n'auront pas la
même trajectoire. Cependant le point d'arriver sera le même.<br>
Exemple :<br>
<img src="image/Somme-vecteurs3.png" id="img5" alt="Somme de deux vecteurs">
</p>
</div>
<h5 class="sous_titre" id="Differenc-vecteur">Différence de deux vecteurs</h5>
<div class="content">
<p>
Lorsqu'un vecteur est négatif, son sens change par rapport à l'original   :
<br><br>
<img src="image/Difference-vecteurs1.png" id="img6" alt="Somme de deux vecteurs">
<br><br>
Nous allons maintenant voir à quoi ressemble la soustraction d'un vecteur et d'un autre.<br>
Voici deux vecteurs :
<br><br>
<img src="image/Difference-vecteurs2.png" id="img7" alt="Somme de deux vecteurs">
<br><br>
Voici la soustraction du vecteur <span style="color : black">a</span> par le vecteur <span  style="color : black">b</span> :
<br><br>
<img src="image/Difference-vecteurs3.png" id="img8" alt="Somme de deux vecteurs"><BR>
<a class="surlignage">Remarque :</a> Si la norme du vecteur à est égal à celle du vecteur b et qu'il y a une soustraction, alors
la translation sera nulle et la soustraction sera égal au vecteur 0.<br><br>

</p>
</div>
<h6 class="sous_titre" id="Produit-vecteur">Produit d'un vecteur par un réel </h6>
<div class="content">
<p>
Lors d'une multiplication de vecteurs, la norme est multiplié par l'entier et s'il est négatif alors le sens du vecteur
devient son opposé.<br><br>
Prenons par exemple le vecteur <span style = "color : black">a</span> et multiplions le par 5 :<BR>
<img src="image/Produit-vecteur.png" id="img9" alt="Produit d'un vecteur par un réel"><BR><br>
<a class="surlignage">Remarque :</a> Si la norme du vecteur à est égal à 0 ou que le nombre entier est égal 0 alors le vecteur aura une
translation nulle ( 0 ).<br>
</p>
</div>


 </div>
 <?php

    include '../../footer.php';

        ?> 
</body>

</html>