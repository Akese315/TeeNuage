<!DOCTYPE html>

<html>
<meta>
<link rel="stylesheet" href="css/equation_2nd.css"/>
</meta>

<title> Les équation nulles </title>
<body>

<?php

include '../../menu_nav.php';

?>  

<div class = "main"> 
<h1 class= "titre">Les équation nulles</h1>
<ul class = "index"> <p id = "index"> index : <p><br>
<li><i class="fas fa-caret-right"></i><a href = "#def">Qu'est ce qu'une équation nulle?</a></li>
<li><i class="fas fa-caret-right"></i><a href = "#produit_nul">Les équations nulles de produit</a></li>
<li><i class="fas fa-caret-right"></i><a href = "#ident_remarquable">Les identités remarquables</a></li>
<li><i class="fas fa-caret-right"></i><a href = "#quotient_nulle"> Les équations nulles de quotient</a></li>
</ul>
<h2 id ="def" class= "sous_titre">Qu'est ce qu'une équation nulle?</h2>
<div class = "content">
<p>
Une équation nulle est équation comme les autres cependant elle est égal à zéro.
<br>
Elle est utile pour résoudre des équation qui contiennent des division ou des multiplication.
<br><br>
<a class="surlignage">Equation de produit :</a><br><br>
<a class= "surlignage">Propriété :</a> Une équation de produit est nul si l'un des deux facteur est égal à 0.
Car : 0 x 1 = 0 et inversèment : 1 x 0 = 0. Si la multiplication n'est pas apparente alors il faut trouver un facteur commun
ou alors une identité remarquable que nous verrons.
<br><br>
<a class="surlignage">Equation de quotient :</a><br><br>
<a class= "surlignage">Propriété :</a> Une équation de quotient est nul si le numérateur (nombre du dessus) est égal à 0.
Attention à la la valeur interdite ! Il faut par précaution faire aussi une équation nulle pour le dénominateur (nombre du bas)car si la valeur
de l'inconnue est la même en haut et en bas cela veut donc dire que le dénominateur est égal à 0 ! Ce qui est interdit car
0 représente à la fois rien et l'infini. La division serait  donc irréalisable.


</p>
    </div>
    <h3 id = "produit_nul"class="sous_titre">Equation nulle de produit</h3>
        <div class ="content">
            <p>
            Comment donnée dans la propriété, pour résoudre une équation nulle d'un produit, l'un des deux facteurs doit être égal à 0.
            <br>
            <br>
            <a class="surlignage">Exemple :</a> 
            <br><br>
            (25 + <em>x</em>) (3 - <em>x</em>) = 0
            <br><br>
            On résoud donc les deux équations (pour chaque facteurs) :
            <br><br>
            <ul class="list"> 1er Facteur<br><br>
                <li>&nbsp;&nbsp;25 + <em>x</em> = 0</li>
                <li>&nbsp;&nbsp;-25 + 25 + <em>x</em> = 0 -25&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  (On isole l'inconnue)</li> 
                <li>&nbsp;&nbsp;x = -25</li>
            </ul>   
            <br><br>
            <ul class="list"> 2ème Facteur<br><br>
                <li>&nbsp;&nbsp;3 - <em>x</em> = 0</li>
                <li>&nbsp;&nbsp;-3 +3 -<em>x</em> = 0 -3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  (On isole l'inconnue)</li> 
                <li>&nbsp;&nbsp;-x = -3</li>
                <li>&nbsp;&nbsp;x = 3</li>
            </ul>   
            <br><br>
            Les solutions sont donc 3 et -25 :
            <br><br>
            S ={-25 ; 3} 
            <br><br><br><br>
            <a class="surlignage">
                Remarque :</a> les plus petits nombres à gauche et les plus grands à droite.<br><br> S = {a&#60;b}
            <br><br>
            </p>
        </div>
        <h4 id ="ident_remarquable"class="sous_titre">Les identités remarquables</h4>
        <div class ="content">
            <p>
                <a class ="surlignage">Définition : </a>Une identité remarquable est utilisée pour
                 accélérer une opération ou la factoriser. Les identités remarquables vont donc nous aider à trouver des 
                 facteurs qui ne sont pas apparents.
                 <br><br>
                <ul class="list">
                    Il existe trois identités remarquables
                    <br><br>
                    <li> a² + 2ab + b² = (a+b)² ou (a+b)x(a+b)</li><br>
                    <li> a² - 2ab + b² = (a-b)² ou (a-b)x(a-b)</li><br>
                    <li> a² - b² = (a-b)x(a+b)</li><br>
                </ul>
                <br><br>
                Exemple d'utilisation lors d'une équation à produit nulle :
                <br><br>
                <ul class="list"><br><br>
                <li>16<em>x</em>² + 16x + 4 = 0</li><br>
                <li>(4<em>x</em> + 2)² = 0</li>
                <li>4<em>x</em> + 2 = 0</li>
                <li><em>x</em> = 0.5 </li>
                </ul>
                <br><br>
                S = {0.5}
                <br><br>
                Explication :   <a class = "fleche">On remarque qu'il s'agit ici de la première identité </a>
                je factorise cette dernière grâce identité remarquable.
                Enfin j'ai deux même facteurs comme ils sont pareil je n'ai pas besoin de faire deux fois la même équation.
                Et j'obtient 0.5 qui est ma solution.

                 



            </p>
        </div>
        <h5 id ="quotient_nulle"class="sous_titre"> Les équations nulles de quotient</h5>
        <div class="content">
            <p>

                Comme expliqué précédamment dans la propriété, pour résoudre une équation de quotient nulle,
                Il nous faut un quotient qui soit égal à 0. Si le quotient n'est pas égal à 0 il faut rassembler
                toutes les valeur du même côté.
                <br><br>
                Exemple : 
                <br><br> 
                <img src ="image/Equation_1" alt ="exemple 1" id ="img_1"><br>
                <img src ="image/Equation_2" alt ="exemple 2"id ="img_2"><br>
                Ne pas oublier de mettre les deux fractions sur le même dénominateur :
                <br><br>
                <img src ="image/Equation_3" alt ="exemple 3"id ="img_3"><br>
                On rassemble tout<br>
                <img src ="image/Equation_4" alt ="exemple 4"id ="img_4"><br>
                <img src ="image/Equation_5" alt ="exemple 5"id ="img_5"><br>
                <br><br>
                Voilà ! Reste plus qu'a factoriser cette dernière sauf 
                qu'on va pas le faire vu qu'elle possède des nombre n'ayant 
                pas de multiple donc c'est galère...
                <br><br>
                Maintenant que nous sommes arrivés à cette étape, nous avons deux options :
                <ul class ="list"><br>
                    <li>Factoriser si il y a un inconnue est au carré.</li><br>
                    <li>Résoudre les équation nulle</li><br>
                </ul>
                    <br><br>
                Exemple :<br><br>
                <img src ="image/Equation_6" alt ="exemple 6"id ="img_6"><br><br>
                Ici je remarque que 64 est le carré de 8 et que 8x est aussi un multiple de 8.
                Je peux donc factoriser par 8.    <br><br>            
                <img src ="image/Equation_7" alt ="exemple 7"id ="img_7"><br><br>
                On avait dis qu'un des facteur était égal à 0.
                Le premier facteur est 8 donc il ne peut pas être égal à 0.
                Le deuxième facteur est x - 8 comme x est un inconnue il y a
                des chance que ce facteur soit égal à 0. Résolvons cette 
                équation pour connaître pour quelle valeur de x le deuxième facteur est
                égal à 0.<br><br>
                <img src ="image/Equation_8" alt ="exemple 8"id ="img_8"><br><br>
                Maintenant résolvons l'équation de la valeur interdite :<br><br>
                <img src ="image/Equation_9" alt ="exemple 9"id ="img_9"><br><br>
                Nous pouvons constater que la valeur de l'inconnue du dénominateur 
                et du numérateur n'est pas la même.<br>
                Donc la division est possible et notre solution est 8.
                <br><br><br>
                S = {8}


                
                

            </p>
        </div>
        </div>
 <?php

    include '../../footer.php';

        ?> 
</body>
</html>