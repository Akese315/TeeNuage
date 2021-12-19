<!DOCTYPE html>

<html>
<head>
<link> 
<meta name="robots" content="index,follow" />
<meta name="copyright" content="© TeeNuage.fun | 2021" />
<meta name="Author" content="Axel Rhelimi, Bunnkhov Thy" />
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html">
<meta name="Language" CONTENT="fr" />
<meta name="description" content="Cette page vous donne un résumé sur le son !" />
<script src="https://kit.fontawesome.com/6857fc4fa0.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/le-son.css"/>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>

</head>

<title> Le son </title>
<body>

<?php

include '../../menu_nav.php';

?>  

<div class = "main"> 
<h1 class= "titre">Le son</h1>
<ul class = "index"> <p id = "index"> index : <p><br>
<li><i class="fas fa-caret-right"></i><a href = "#Definition">Définition du son</a></li>
<li><i class="fas fa-caret-right"></i><a href = "#vitesse-propagation">La vitesse de propagation du son</a></li>
<li><i class="fas fa-caret-right"></i><a href = "#"></a></li>
</ul>
<h2 class="sous_titre" id="Definition">Définition du son</h2>
<div class="content">
<p>

Pour commencer, le son est une vibration de matière dans un espace(l'eau, l'air etc...).
Cette vibration créer une surpréssion puis une dépression des molécule de l'espace en question.<br><br>
<img src="images/Pression-depression-son.png" id="img1">


</p>
</div>
<h3 class="sous_titre" id="vitesse-propagation">La vitesse de propagation du son</h3>
<div class="content">
<p>
La vitesse du son peut varier selon son milieu, par exemple : 
<table>
<tr class="first">
<td>L'air</td>
<td>L'eau</td>
<td>L'acier solide</td>
</tr>
<tr class="autre">
<td>345m/s</td>
<td>1500m/s</td>
<td>5000m/s</td>

</tr>
</table>
<br><br>
Le son dans le vide ne se propage pas ! 
Donc les vaisseaux dans stars wars qui font du bruit c'est faux...
</p>
</div>
<h4 class="sous_titre" id="caracteristique-son">Caractéristique d'une onde sonore</h4>
<div class="content">
<p>
Une onde sonore est caractérisée par une période et par sa fréquence.
<ul class="list">
<li>Une période est une intervalle de temps séparant deux phénomènes vibratoires identiques et qui se répètent.</li><br>
<br><img src="images/periode.png" id="img2"><br><br><br>

<li>Une fréquence d'un signal périodique représente le nombre de fois qu'un phénomène vibratoire se répète en 1 seconde et
    s'exprime en hertz (hz).<br><br> Elle se calcule comme ça :</li><br>
<img src="images/Frequence.png" id="img3">
</ul>


</p>
</div>
<h5 class="sous_titre">Perception d'un son</h5>
<div class="content">
    <p>
    L'oreille humaine ne peut percevoir uniquement des sons allant de 20hz à 20 000hz.<br><br>
    <img src="images/frequence-homme.png" id="img4">
<p>

    
</div>
<h6 class="sous_titre">Timbre et hauteur</h6>
<div class="content">
<p>

<a class="surlignage">La hauteur</a> d'un son est simplement lié à sa fréquence. Plus une note est aigue, plus sa fréquence sera
élevée et au contraire, plus une note est grave et moins sa fréquence sera élevée.<BR><BR>
<a class="surlignage">Le timbre</a> d'un son est la forme du signal. Ce qui va différencié un signal d'un autre 
est surtout son timbre.
</p>
</div>
<h6 class="sous_titre">Niveau d'intensité sonore</h6>
<div class="content">
<p>
Le son est très dangereux en fonction de son intensité ! En 1883, l'eruption du volcan Krakatoa a provoqué 
une explosion allant jusqu'à 272 décibels. Cette onde de choc était si puissante qu'elle a rendu sourd 
toutes les personnes se trouvant à 160km de l'éruption. Et aurait fait 3 fois le tour de la terre !
Les personnes se trouvant à côté sont mortes instantannément.<br><br>
<img src="images/explosion-kakatoa-1883.jpg" id="img5">
<img src="images/limite-db.png" id="img6">
</p>
</div>
</div>
<?php

include '../../footer.php';

?>  
</body>
</html>