<!DOCTYPE html>

<html>

<head>
    <meta name="robots" content="index,follow" />
    <meta name="copyright" content="© TeeNuage.fun | 2021" />
    <meta name="Author" content="Axel Rhelimi, Bunnkhov Thy" />
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="Language" CONTENT="fr" />
    <meta name="description" content="Cette page donne du vocabulaire pour réussir son devoirs !" />
    <link rel="stylesheet" href="css/Maths.css" />
</head>

<title> Les équations du second degré </title>

<body>

    <?php

    include '../../menu_nav.php';

    ?>

    <div class="main">
        <h1 class="titre"> Les équations du second degré </h1>




        <div class="content">
            <p>
            <ul class="index">
            <li onclick="scrollFunction('definition')"><i class="fas fa-caret-right"></i>Définition</li>
                <li onclick="scrollFunction('canonique')"><i class="fas fa-caret-right"></i>Forme canonique</li>
                <li onclick="scrollFunction('equation-2-degre-delta')"><i class="fas fa-caret-right"></i>Résoudre une équation de second degré avec Delta</li>
            </ul>
            </p>
        </div>
        <h3 class="sous_titre" id="definition"> Définition </h2>
        <div class="content">
            <p>
                Une fonction est appellée <a class="fleche"><b>polynome du second degré</b></a> lorsqu'il existe 3 nombes "a", "b","c" avec a ≠ 0.<br>
                <br><a class="surlignage">Exemple :</a> f(x) = ax² + ax + c

            </p>
        </div>
        <h3 class="sous_titre" id="canonique"> La forme canonique </h2>
        <div class="content">
            <p>
                La forme canonique permet de trouver la forme factorisé d'une équation du second degré plus facilement.<br><br>
                Elle introduit 2 termes : <a class="fleche"><b>β (beta)</b></a>, <a class="fleche"><b>α (apha)</b></a>,<br><br> qui seront utile pour trouver le sommet d'une fonction du second degré.

                <br><br><a class="surlignage">Exemple d'une forme canonique</a> :ax² +bx + c <i class="fas fa-arrow-right"></i> a(x-α)²+β
                <br><br>
                Pour trouver alpha : - b / 2a
                <br><br>
                Pour trouver beta :<br> f(alpha) = aα² + bα + c<br>
                <a class="fleche">ou</a>
                <a class="fleche">β</a> = -Δ/4a
            </p>
        </div>
        <h4 class="sous_titre">Calculer Delta.</h4>
        <div class="content">
            <p>
                <a class="fleche"><b>Formule pour calculer delta Δ:</b></a> <br><br>
                Δ = b² - 4ac<br><br>
                <ul class="list">
                    Exemple : 2x² + 20x -5
                    <li>Δ = 20² - 4(2<em>x</em>-5)</li>
                    <li>Δ = 400 - 4(-10)</li>
                    <li>Δ = 400 + 40</li>
                    <li>Δ = 440</li>
                </ul>

            </p>
        </div>
        
        <h4 class="sous_titre">Résoudre une équation du second degré.</h4>
        <div class="content">
            <p>
                Pour résoudre une équation du second degré il nous faut déterminer le signe de delta.
                <ul class="list">
                    <li>Si Δ est négatif alors il n'y a pas de solution, du moins pour l'instant...</li>
                    <li>Si Δ est égal à 0 alors il n'y a 1 solution</li>
                    &nbsp; <li>x = -b/2a = α(alpha)</li>&nbsp;
                    <li>Si Δ est positif alors il y a 2 solutions</li>
                    <ul class="list">
                    &nbsp;<li>x<sub>1</sub> = (-b - √Δ )/ 2a</li>
                    &nbsp;<li>x<sub>2</sub> = (-b + √Δ )/ 2a</li>
                    </ul>                </ul>
            </p>
        </div>
        <h5 class="sous_titre">Résoudre une inéquation du second degré</h5>

    </div>
    <?php

    include '../../footer.php';

    ?>
</body>

</html>