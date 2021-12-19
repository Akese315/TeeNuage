<!DOCTYPE html>

<html>
<meta>
<link rel="stylesheet" href="../../css/css_menunav.css"/>
<link rel="stylesheet" href="css/Description_mouvement_mecanique.css"/>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://kit.fontawesome.com/6857fc4fa0.js" crossorigin="anonymous"></script>
</meta>

<body>

<?php

include '../../menu_nav.php';

?>  

<div class ="main">
<h1 class ="titre"> Action mécanique </h1>

<br><br><br>
<h2 class ="sous_titre">Action mécanique sur un système</h2>
<div class = "content">
<p>

<br><br>
Les objects qui nous entourent sont mis en mouvement, sont immobiles ou encore tombe s’ils sont lachés. Ces obeservations nous amène à introduire une nouvelle notion, celle de l’action mécanique.
Chaque action est réprésenté par le vecteur force.<br><br>

Le vecteur force est caractérisé par :<br><br>
<ul class ="list">
<li>La direction de la force</li><br>
<li>Le sens de la force</li><br>
<li>La valeur de la force en N (Newton)</li><br>
</ul>
</p>
</div>
<h3 class = "sous_titre"> Action récyproque</h3>
<div class ="content">
<p>
Il existe des actions récyproque, c’est-à-dire des systèmes qui s’attirent l’un à l’autre<br><br>
Par exemple : La lune et la terre<br><br>
<img src ="images/Force_Recyproque.png"alt = "Force récyproque" id="img1"><br><br>
<a class = "soulignage" >Forme vectorielle :</a> Fterre/Lune = - Flune/Terre
<br><br>
</p>
</div>
<h4 class = "sous_titre">La force gravitationnelle</h4>
<div class ="content">
<p>
<br>
<a class = "surlignage">définition :</a> force d'attraction universelle des corps, liée à leurs masses respectives et à la distance qui les sépare.
Formule pour calculer la force entre deux objets :<br><br>
<img src="images/formule_FORCE_ gravitationnelle.png" alt = "Formule force gravitationnelle" id="img2">
<br><br>
Force gravitationnelle = 6.67 x 10^-11<br>
Masse = Kg<br>
Distance = m<br>
</p>
</div>
<h5 class ="sous_titre">Le poids </h5>
<div class ="content">
    <p>
Quand on parle du poids d’un individu on parle en réalité de l’attraction terrestre exercé sur un individu.<br>
Et la valeur n’est pas en Kg mais en Newton.<br><br>

La formule étant : Poids = Masse x gTerre<br><br>
gTerre = 9.8N/kg (l’intensité de pesanteur sur la terre)<br><br>

<a class="surlignage">Exemple :</a> <br><br>
L’éléphant faisant une demi tonne soit 500kg<br>
Poids = 500kg x 9.8 N/kg<br>
<br>
Notre éléphant fait donc 4900 Newton.
</p>
</div>




</div>
<?php

include '../../footer.php';

?>  
</body>
</html>