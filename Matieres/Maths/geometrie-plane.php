<!DOCTYPE html>

<html>
<meta>
<link rel="stylesheet" href="css/geometrie-plane.css"/>
</meta>

<title> La géométrie plane </title>
<body>

<?php

include '../../menu_nav.php';

?> 


<div class = "main"> 
<h1 class= "titre">Géométrie plane</h1>

<ul class = "index"> <p id = "index"> index : <p><br>
<li><i class="fas fa-caret-right"></i><a href = "#projete_orthogonal">Le projeté orthogonal</a></li>
<li><i class="fas fa-caret-right"></i><a href = "#repere">Les repères</a></li>
<li><i class="fas fa-caret-right"></i><a href = "#notation_coordonnee">Comment lire et noter une coordonnée</a></li>
<li><i class="fas fa-caret-right"></i><a href = "#distance2points">Distance entre deux points</a></li>
<li><i class="fas fa-caret-right"></i><a href = "#coordonneeMilieu">Coordonnées du milieu d'un segment</a></li>


</ul>

<h2 class="sous_titre" id ="projete_orthogonal">Le projeté orthogonal</h2>
    <div class="content">
        <p> Imaginons une droite <em> d</em> et un point <em> M</em> :  </p>
        
        <img src = "image/projete-orthogonal.png" id="image1">
        <p>Le moyen le plus court pour le point  <em> M</em> d'arriver à la droite<em> d </em> est de tracer une droite perpendiculaire à  <em> d</em>
        et passant par le point  <em> M</em>.
         </p>
         <img src = "image/projete-orthogonal2.png"id="image2">
         <p>On dit que le point H est le projeté orthogonal de M sur la droite d.</p>
    </div>

    <h3 class="sous_titre" id="repere">Les repères</h3>
    <div class="content">
        <p>
        Définition : Trois points non alignés O,I,J  définissent un repère du plan.
        O est l'origine du repère, (OI) est l'axe des abscisses et (OJ) est l'axe des ordonnées.
        Ce repère est noté (O;I,J).
        </p>
        <br><br>
        <p>Ceci un repère quelconque :</p>
        <img src ="image/Repere-quelconque.png" id="image3">
        <br><br>
        <p>Ceci un repère orthogonale: </p>
        <img src ="image/Repere-orthogonal.png"id="image4">
        <p>Ses axes sont <a class = "surlignage" >perpendiculaires</a>.</p>
        <br><br>
        <p>Ceci un repère orthonormé :</p>
        <img src ="image/Repere-orthonorme.png" id="image5">
        <p>Ses axes sont <a class = "surlignage" >perpendiculaires</a> et les points des deux axes possèdent la même longueur.</p>
        
    
        

    </div>
    <h4 class="sous_titre" id="notation_coordonnee">Comment lire et noter une coordonnée</h4>
    <div class ="content">
        <p>
            une coordonné d'un point est sa position dans un repère : <br>
            <br> P = (6;7)
            <br><br>
            Le point P a pour abscisse "6" et pour ordonnée "7".
            Le premier nombre d'une coordonné correspond à l'abscisse, le deuxième à son ordonné et le 
            troisième correspond à sa profondeur (uniquement dans un repère en 3 dimensions).
            <img src ="image/exemple_coordonne.png" id="image6">
            <br><br>
            Les coordonnés du point F sont :
            <br> F = (4;3)

        </p>
    </div>
    <h5 class="sous_titre" id = "distance2points">Distance entre deux points</h5>
    <div class ="content">
        <p>
             Pour calculer la longueur entre deux points dans un repère on utilise cette formule :<br><br>
             AB = √(<em>x</em><sub>B</sub>-<em>x</em><sub>A</sub>)² + (<em>y</em><sub>B</sub>-<em>y</em><sub>A</sub>)²

        <br><br>
        Exemple :  nous avons deux points :
        <br>A = (5;-3) et B = (2;7)<br>
        <br>
        Appliquons la formule :
        AB = √(2-5)² + (7-(-3))²<br>
        AB = √(-3)² + (10)²<br>
        AB = √9 + 100<br>
        AB = √109
        AB = 10.4
        </p>
        </div>
    <h6 class ="sous_titre" id="coordonneeMilieu">Coordonnées du milieu d'un segment</h6>
            <div class ="content">
            <p>
                Pour calculer le milieu d'un segment [AB] on utilise ce théorème :
                <br>    
        </p>
            <img src ="image/theoreme.png" id="image7">
        <p>
            <a class="surlignage">Exemple :</a>
            soit k le millieu de [AB], A = (5;-3) B = (2;7)
        </p>
        <img src ="image/milieu_segement.png" id="image8"><br>
        <img src ="image/milieu_segement2.png" id="image9">
        <p> Les coordonnées du point K sont donc 3.5 en abscisse et 2 en ordonné.<br><br>
            K = (3.5;2)
            </div>
            </div>
 <?php

    include '../../footer.php';

        ?> 
        </body>
    </html>
    