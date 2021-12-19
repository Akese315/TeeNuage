<!DOCTYPE html>

<html>
<meta>
<link rel="stylesheet" href="css/pourcentage_2nd.css"/>
</meta>

<title> Les pourcentages </title>
<body>

<?php

include '../../menu_nav.php';

?>  

<div class = "main"> 
<h1 class= "titre">Définition </h1>

<div class = "content">
<p>
<a class = "surlignage">Définition :</a> le pourcentage est une manière d'exprimer une proportion.
Un pourcentage n'est rien d'autre qu'une fraction dont le dénominateur est 100.<br><br>
Exemple :  <br><br></p>

<img src = "image/pourcentages.png" alt ="exemple "id="img_1"><br>

<p>
Si l'on divise le numérateur par son dénominateur, on obtient un coefficient multiplicateur.
Une fois ce coefficient obtenu, il va nous donner la valeur du numérateur (une donnée).

<br>
<br>
Exemple:
<br><br></p>

<img src = "image/pourcentage2.png" alt ="exemple_2" id = "img_2">

<br><br><p>
0,73 est donc la valeur du numérateur (33). Et si l'on veut transformer cette valeur en pourcentage (pour avoir une valeur plus concrète), il suffit de la multiplier par 100.
<br><br></p>

<img src = "image/pourcentage3.png" alt ="exemple3" id="img_3">

<br><br><p>
On peut donc comprendre que le numérateur possède 73% de la valeur du dénominateur.
</p>
</div>
<h3 class = "sous_titre">L'évolution de valeur en pourcentage </h3>
<div class="content">
<p>
Dans un magasin à Tokyo, le prix des Takoyakis <a class ="fleche" href ="https://www.japancentre.com/fr/recipes/22-takoyaki">(click moi pour voir ce que c'est)</a> a augmenté depuis la Covid19.
Son prix était de 3€ la barquette de 6 et est passé à 3,50€.
Quel est son coefficient multiplicateur et son augmentation en pourcentage?
<br><br>
On veut connaître le coefficient multiplicateur entre le nouveau et l'ancien prix. 
<br><br></p>

<img src="image/pourcentage4.png" id ="img_4">

<br><br><p>
1,16 est la valeur des Takoyakis après la Covid19. Si l'on multiplie ce coefficient avec le prix des anciens Takoyakis on obtiendra le prix des nouveaux Takoykis.
<br><br>3€ x 1.16 = 3.5€
<br>
<br>
Maintenant nous voulons connaître l'augmentation des nouveaux Takoyakis "EN POURCENTAGE".<br>
Voici la formule :
    <br><br></p>
    
    <img src="image/pourcentage5.png" id = "img_5">
    
    <br>
    <br><p>
Si nous suivons cette formule cela donne :
<br><br>

<a class ="fleche">Pourcentage</a> = 1.16 x 100 -100
<br> <a class ="fleche">Pourcentage</a> = 116 -100
<br><a class ="fleche">Pourcentage</a> = 16
<br><br>
Notons que si le CM aurait été de 0.84 et non 1.16, le résultat aurait été de -16.
<br><br>
<a class ="fleche">Pourcentage</a> = 0.84 x 100 -100
<br> <a class ="fleche">Pourcentage</a> = 84 -100
<br><a class ="fleche">Pourcentage</a> = -16
<br><br>
On peut donc en conclure que le pourcentage a augmenté de 16%. Si le résultat avait été de -16 on aurait dit que 
les takoyakis ont baissé de 16%.<br><br>
<a class = "surlignement">Autre cas...</a>

Un autre restaurant japonais propose des yakisobas <a class ="fleche" href = "https://www.cuisine-japon.fr/yakisoba/">(click moi pour voir ce que c'est)</a>
à 13€ et voit son nombre de clients augmenter. Il décide de monter le prix de tous ses plats de 5%.
Nous souhaitons donc connaître le prix des yakisobas après ce changement.
Comme vu précédemment nous devons transformer ce pourcentage en un Coefficient multiplicateur.
<br><br>
<img src ="image/pourcentage7.png" alt = "exemple_7" id = "img_7">
<br>
<br>
<a class = "surlignage">Explication :</a>
<br><br>
Pourquoi dans ma formule ai-je additionné ma proportion avec un 1?
Parce que dans la consigne, je remarque que <a class = "fleche">MES YAKISOBAS</a> ont <a class = "fleche">AUGMENTE</a> de <a class = "fleche">15%</a>.
<BR>On pourrait le traduire par :<br><br>
<img src ="image/pourcentage9.png" alt = "exemple_9" id = "img_9"><br><br>
<a class ="surlignage">Note:</a> si dans la consigne il avait été dit <a class = "fleche">MES YAKISOBAS</a> ont <a class = "fleche">BAISSE</a> de <a class = "fleche">15%</a>
Il faudrait alors le traduire ainsi :
<br><br>

<img src ="image/pourcentage14.png" alt = "exemple_14" id = "img_14"><br><br>
<br><br>
On parle de l'augmentation des yakisobas cela veut dire que mes yakisobas ont une valeur?
Comment transformer en coefficient multiplicateur 1 Yakisoba? 
Combien vaut 1 yakisoba? 13€ et à quoi le compare t-on? A un autre Yakisoba donc 13€ encore.<br><br>
<img src ="image/pourcentage8.png" alt = "exemple_8" id = "img_8">
<br><br>
Nous avons donc compris d'où venait ce 1

</p>
</div>
<h4 class = "sous_titre">Les évolutions successives</h4>
<div class = "content">
<p>
La Takoyakis était donc à 3€ et ont augmenté de 50 centimes puis aujourd'hui, ils ont perdus 20 centimes.
Nous souhaitons connaître le coefficient multiplicateur général de ces évolutions. Il suffit de multiplier les deux CM.<br>
Formule :<br><br>
<img src="image/pourcentage6.png" alt = "exemple6"id = "img_6">

    <br><br>
Retournons vers notre Restaurant de Yakisoba...
Le gérant avait décidé d'augmenter les prix de ses plats de 5%. Cependant, il s'avère que son nombre de clients a diminué depuis.
Il décide donc de baisser le prix de ses plats pour que ses anciens clients reviennent.
Calculons ensemble le coefficient multiplicateur général.
<br><br>
<img src="image/pourcentage10.png" alt = "exemple6"id = "img_10"><br><br>
Le coefficient multiplicateur est inférieur à 0 ce qui veut dire que le nouveau prix est en dessous de 13€.
Nous avons donc prouvé que pour retrouver le prix originel, il nous fallait une autre méthode.

</p>
</div>
<h5 class = "sous_titre">Evolution réciproque</h5>
<div class="content">
<p>

L'évolution réciproque est l'inverse d'une évolution. Elle a pour but de faire passer une valeur V<sub>1</sub> à une valeur V<sub>0</sub>
Pour obtenir le coefficient multiplicateur réciproque, il faut faire l'inverse du coefficient multiplicateur soit : 

<br><br>
<img src="image/pourcentage12.png" alt = "exemple12"id = "img_12"><br><br>
Maintenant que l'on a trouvé le coefficient multiplicateur réciproque, nous pouvons le multiplier la valeur 1 pour retrouver la valeur initiale.
<br><br>
<img src="image/pourcentage13.png" alt = "exemple13"id = "img_13"><br><br>
Maintenant si le gérant souhaite que ses prix reviennent tous à l'origine, au lieu de baisser de 5%, il devra effectuer ce
calcul et multiplier son coefficient multiplicateur réciproque :
<br><br>
<img src="image/pourcentage11.png" alt = "exemple11"id = "img_11"><br><br>
</p>
</div>

</div>
 <?php

    include '../../footer.php';

        ?>   
</body>
</html>