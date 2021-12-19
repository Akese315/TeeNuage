<!DOCTYPE html>

<html>
<meta>
<link rel="stylesheet" href="../../css/css_menunav.css"/>
<link rel="stylesheet" href="css/Francais.css"/>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://kit.fontawesome.com/6857fc4fa0.js" crossorigin="anonymous"></script>
<meta name="robots" content="index,follow" />
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html">
<meta name="Language" CONTENT="fr" />
<meta name="description" content="Cette page explique comment décrire un personnage de Roman" />
</meta>
<head>
<title> Le paragraphe argumenté !!</title>
</head>

<body>

<?php

include '../../menu_nav.php';

?>  

<div class ="main">
<h1 class = "titre">Description d'un personnage</h1>

<ul class = "index"> <p id = "index"> index : <p><br>
<li onclick="scrollFunction('physique')"><i class="fas fa-caret-right"></i>Plan physique</li>
<li onclick="scrollFunction('moral')"><i class="fas fa-caret-right"></i>Plan morale</li>
<li onclick="scrollFunction('environnement')"><i class="fas fa-caret-right"></i>L'environnement</li>


</ul>
<h2 class = "sous_titre">introduction</h2>
<div class ="content">
<p>
Pour écrire un roman ou développer un personnage, il nous faut des
 personnages ressemblant des humains. Nous verrons quels aspects peuvent apparaître.
</p>
</div>
<h3 class = "sous_titre" id="physique">Le plan physique</h3>
<div class ="content">
Le plan moral concerne tout ce qui fait un individu une personne unique.
<br><br>
<table>
<tr class = "first">
<td>Caratèristiques</td>
<td>Descriptions /exemples</td>
</tr>
<tr class = "autre">
<td>Son allure</td>
<td>nonchallante, vive</td>

</tr>
<tr class = "autre">
<td>sa posture</td>
<td>courbé, posture comique, droit, naturelle</td>

</tr>
<tr class = "autre">
<td>ses habits</td>
<td>sales, déchiré, soyeux</td>

</tr>
<tr class = "autre">
<td>son visage</td>
<td>pâle, rond, gras</td>

</tr>
<tr class = "autre">
<td>-ses mouvements</td>
<td>violents, mous, lents</td>

</tr>
<tr class = "autre">
<td>son expressivité</td>
<td>qui exprime par son visage des sentiment</td>

</tr>
</table>
</div>
<h4 class = "sous_titre" id = "moral">Le plan moral </h4>
<div class ="content">
<p>
Le plan moral concerne tout ce qui fait un individu une personne unique.
</p>
<br><br>
<table>
<tr class = "first">
<td>caractéristique </td>
<td>Descriptions /exemples</td>

</tr>
<tr class = "autre">
<td>Son caractère </td>
<td>Romantique, arrogant, asocial, à l’écoute</td>

</tr>
<tr class = "autre">
<td>habitudes</td>
<td>se doucher le matin / le soir, faire son lit</td>
</tr>
</tr>
<tr class = "autre">
<td>émotions</td>
<td>Joie. Tristesse. Peur. Colère. Dégoût. Surprise.</td>
</tr>
<tr class = "autre">
<td>ses pensées</td>
<td>une pensée logique, positive</td>
</tr>
<tr class = "autre">
<td>sensation<br>-visuelle<br>-olfactive<br>-auditive<br>-tactile<br>-gustative</td>
<td><br>-éblouissement<br>-doux parfum <br>-un cri assourdissant<br> -un gateau moelleux
<br>-épicé</td>
</tr>
</table>
</div>
<h5 class = "sous_titre" id ="environnement">L'environnement</h5>
<div class ="content">
<p>
Le contexte dans lequel vie et a vécu le personnage est aussi très important car il nous donne
des indications sur ce qu'il est et sur sa façon de penser.
</p>
<br><br>
<table>
<tr class = "first">
<td>caractéristique </td>
<td>Descriptions /exemples</td>
</tr>
<tr class = "autre">
<td>Spation-temporel </td>
<td>Il s'agit du lieu et de l'époque dans laquelle vit le personnage.</td>
</tr>
<tr class = "autre">
<td>Culturel </td>
<td>il s’agit des connaissance intellectuelle.</td>
</tr>
<tr class = "autre">
<td>Professionnel </td>
<td>Il s’agit des conditions de travail du héro</td>
</tr>
<tr class = "autre">
<td>Économique  </td>
<td>Il s’agit de la richesse du milieu où le protagoniste vit.</td>
</tr>
<tr class = "autre">
<td>Familial  </td>
<td> il s’agit de la relation entre proches.</td>
</tr>
<tr class = "autre">
<td>Son passé  </td>
<td> Il s’agit de l'histoire du protagoniste.</td>
</tr>
<tr class = "autre">
<td>Conjugale   </td>
<td> Il s’agit de la relation entre amant.</td>
</tr>
</table>
</div>
</div>
<?php

include '../../footer.php';

?> 
</body>
</html>