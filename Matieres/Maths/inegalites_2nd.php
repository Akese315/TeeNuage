<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="../../css/css_menunav.css"/>
<link rel="stylesheet" href="css/inegalites_2nd.css"/>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://kit.fontawesome.com/6857fc4fa0.js" crossorigin="anonymous"></script>
</head>

<body>

<?php

include '../../menu_nav.php';

?>  

<div class = "main">
<h1 class = "titre">Les Inégalités </h1>


<ul class = "index"> <p id = "index"> index : <p><br>
<li><i class="fas fa-caret-right"></i><a href = "#intervalle_bornés">Les intervalles bornés</a></li>
<li><i class="fas fa-caret-right"></i><a href = "#intervalle_non_bornés">Les intervalles non-bornés</a></li>
<li><i class="fas fa-caret-right"></i><a href = #inequation>Poser une inéquation</a></li>
<li><i class="fas fa-caret-right"></i><a href = #Resov_inequation>Résoudre une inéquation</a></li>
</ul>

<h2 id ="intervalle_bornés" class = "titre">Les intervalles bornés</h2>
<div   class = "content">
<p>
Définition : En Mathématique, un intervalle est un ensemble de nombres se trouvant entre 2 bornes.
</p>
<p>
exemple : x appartient à [ 5 ; 6 [
</p>
<p>
Examinons ensemble cet intervalle...
On peut remarquer les nombres 5 et 6, donc logiquement l'ensemble des nombres de cet intervalle est de 5 à 6.
Mais il ne faut pas oublier les crochets qui sont dans différentes positions. </p> <br>

<p> <a>-Le crochet ouvert </a>, celui qui se tourne vers l'extérieur de l'intervalle, signifie que le nombres qui le suit ou le précède, 
ne sera pas compris dans l'ensemble des nombres de l'intervalle.
</p>
<p> <a>-Le crochet fermé </a>, celui qui se tourne vers l'intérieur de l'intervalle, signifie que le nombres qui le suit ou le précède, 
sera compris dans l'ensemble des nombres de l'intervalle.
</p>

<p><a>Note</a>:  les chiffres les plus petits se mettent toujours à gauche tandis que les chiffres les plus grands se mettent à droite.</p>
<p>
<a>Qu'est ce qu'un Ensemble de nombres dans un intervalle?</a>
</p>
<p>
Ce sont tout les nombres entre les deux chiffres de l'intervalle.
Combien y'en a t'il? une infinité car il ne faut pas oublier les nombres décimaux.
</p>
<p>
exemple : x = / appartient à [ 2 ; 3] , x peut être égale à 2 ou à 3 mais aussi 2,3333333 mais encore 2.9 suivi de 22chiffres après la virgule .
</p>

</div>
<h3 id ="intervalle_non_bornés" class = "titre">Les intervalles non-bornés</h3>
<div class = "content">
<p>Un intervalle non-borné est un intervalle possédant tout simplement l'infini sur une de ses bornes.
Ainsi, on appelle un intervalle non-borné car on ne peut pas borner l'infini puis ce qu'il s'agît de l'infini.
Contrairement à un intervalle borné qui est limité par deux nombres.
</p>
<p> 
 -Exemple d'un intervalle borné : [ 5 ; 6 [ .
 </p>
 <p> 
 -Exemple d'un intervalle non-borné : ] -l'infini ; 6 ].
 </p>
 <p><a>Note</a>:  on met toujours un crochet ouvert du côté de l'infini</p>
</div>

<h4 id = "inequation" class = "titre">Les inéquations</h4>
<div class = "content">
<p> Lors d'un problème comportant une inéquation, il faut commencer par trouver ce que l'on cherche. </p>
<p> Exemple :  le prix minimum et le prix maximum pour un menu quelconque chez Macdo. </p>
<p> Si l'on prend cet exemple, le prix minimum d'un menu est de 6€10 et le prix maximum d'un menu est de 8€10. </p>
<p> Donc on sait que <a>x (le prix à payer ou le prix du menu)</a> sera plus petit ou égal à 8€10 et sera plus grand ou égal à 6€10. En mathématique on le note comme cela :</p><br>

<p> x <span class = "less_or_equal">&#8804;</span> 8€10 .<br>  6€10  <span class = "less_or_equal">&#8804;</span> x <br> et cela se transforme en 6€10  <span class = "less_or_equal">&#8804;</span> x  <span class = "less_or_equal">&#8804;</span> 8€10
<p> <a> Remarque :</a> vous remarquerez que j'ai mis le x à droite dans la deuxième inégalité. C'est pour préserver le sens des opérateurs.


<p class = "titre"> tuer le moins par le moins<p>

<p>Imaginons que Macdo a eu des problèmes informatiques et que tout les prix sont devenus négatifs et se sont multiplié par 2 (sacrée réduction pour le client).
Comment l'informaticien de Macdo va devoirs résoudre son problème... Quel opération va t'il devoir faire pour que les prix redeviennent normal et positifs?</p>

<p> voici le bug : -12€20<span class = "greater_or_equal">&#8805;</span> -2x  <span class = "greater_or_equal">&#8805;</span> -16€20 </p>

<p> Pour isoler le x je vais devoirs, diviser par -2. Pourquoi -2 et pas juste 2 ?<br> Car si je divise par 2 je vais obtenir les bons prix mais ils seront toujours négatifs. Et 
et vous savez aussi que -1 x -1 = 1 car moins par moins = plus. Donc je vais bel et bien devoir diviser -2x par -2.</p>

<p> (-12€20) / -2 <span class = "greater_or_equal">&#8805;</span> (-2x) / -2  <span class = "greater_or_equal">&#8805;</span> (-16€20) /-2</p>
<p><a> ==> </a>  6€10 <span class = "greater_or_equal">&#8805;</span> x  <span class = "greater_or_equal">&#8805;</span> 8€10</p>

<p> <a>Remarque : </a> Cherchez l'erreur... 6€10 est plus grand que x qui lui même est plus grand que 8€10 ????<br>
<a> Règle</a>Si l'on divise ou on multiplie par un nombre réel négatif alors le sens des opérateurs change (s'inverse) </p>

<p>La bonne réponse était :    6€10 <span class = "less_or_equal">&#8804;</span> x  <span class = "less_or_equal">&#8804;</span> 8€10 </p>


<p class = "titre"><a> En cas d'inéquation possédant un infini </a><p>


<strong> x < 15</strong>

<p> Cette inéquation contient un infini.<br>
Cette inéquation nous dit qu' "x" est plus petit que le nombre 15, mais ne nous dit pas quand elle cesse d'être plus petite. <br>
on pourrait la remplacer par "moins l'infini" < x < 15 </p>

<p> <a> Note : </a><br> -"moins" l'infini est l'ensemble des nombres qui sont inférieur à "x", une valeure quelconque .<br>
-"plus" l'infini est l'ensemble des nombres qui sont supérieur à "x", une valeure quelconque.<br>
-"l'ensemble R" réunie tout les nombres réels. La réunion de "plus" l'infini et "moins" l'infini.</p>

  <p><a>Exemple :</a> On cherche à trouver l'ensemble des nombres possibles de : x < 150 . </p><br>
<p> On remarque que x est strictement inférieur à 150. Mais on ne sait pas quand il n'est plus inférieur.</p>
<p> X appartient à ]"moins" l'infini ; 150] donc x peut être égale à 99 mais encore à -2210. </p>

    
</div>
<h5 id = "Resov_inequation" class = "titre">Résolution d'une inéquations</h5>
<div class = "content">
    <p> La résolution d'une inéquation est similaire à la résolution d'une équation à une différence près :</p>
    <p>-<a>la présence d'opérateurs </a>"<" et ">".
    Il faut donc veiller au changement de sens des opérateurs.</p>
    

<p>exemple : 12 < 2x < 14 </p>

<p> Comment résoudre cette inéquation??? Et bien la véritable question à se poser est la suivante : </p>
<p> Quelle opération puis-je utiliser pour isoler "x" ? </p>
<p> En l'occurrence ce que je veux supprimer pour isoler x est la multiplication par 2. Pour ce faire je vais devoir utiliser une division pour annuler la multiplication. 
    Cependant les Maths sont comme la Physique, "rien ne se perd, tout se transforme. Il est injuste d'appliquer la division à uniquement "2x". Il faut donc l'appliquer aux autres
    nombres qui font partis de l'inéquation (22 et 14).
</p> 
<p> 12 < 2x < 14 </p>
<p><a>==> </a> (12) / 2 < (2x) / 2 < (14) / 2</p><p> <a> ==> </a> 6 < x < 7 </p><p> <a> ==> </a> x appartient à ] 6 ; 7 [ </p>

<p class = "titre">Nous avons résolu une inéquation!! </p>

<p> Les techniques pour isoler "x" :</p>
<p>-Pour annuler une multiplication, il faut diviser la la multiplication par son même facteur. Ex : 2x <a> ==> </a> (2x) / 2 = x  </p>
<p>-Pour annuler une division, il faut multiplier la division son même diviseur. Ex : x/2 <a> ==> </a> x/2 x 2 = x </p>
<p>-Pour annuler une addition, il faut soustraire l'addition par son même nombre. Ex : 2+x <a> ==> </a> +2-2+x = x </p>
<p>-Pour annuler une soustraction, il faut additioner la soustraction par son même nombre. Ex : -2+x <a> ==> </a> 2-2+x = x</p>
<p>-Pour annuler un carré (²), il faut faire la racine carré de ce carré. Ex : x² <a> ==> </a> √(x²) = x</p>
<p>-Pour annuler une racine carrée, il faut faire le carré de cette racine carrée. Ex : √(x) <a> ==> </a>  (√(x))² = x </p>


</div>

</div>
 
</div><?php

    include '../../footer.php';

        ?> 

</body>
</html>