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

<title> Les Fonctions </title>

<body>

    <?php

    include '../../menu_nav.php';

    ?>

    <div class="main">
        <h1 class="titre">Les équations cartésiennes</h1>
        <ul class="index">
            <li onclick="scrollFunction('definition')"><i class="fas fa-caret-right"></i>Définition</li>
            <li onclick="scrollFunction('vecteur-directeur')"><i class="fas fa-caret-right"></i>Déterminer le vecteur directeur</li>
            <li onclick="scrollFunction('trouver-c')"><i class="fas fa-caret-right"></i>Déterminer c</li>
            <li onclick="scrollFunction('determiner-equation-cartesiennne')"><i class="fas fa-caret-right"></i>Déterminer une équation cartésienne à partir de 2 points.</li>
        </ul>
        <br><br>
        <h2 class="sous_titre" id="definition">Définition</h2>
        <div class="content">
            <p>


            <div class="definition">
                <p>
                    Une équation cartésienne est utilisé pour définir une droite dans un repère orthornomé.
                    <br><br>
                    elle est de la forme : <strong><em>ax</em> + <em>by</em> + <em>c</em> = 0</strong>
                </p>
            </div>
            <br><br>
            La forme la plus connue est la forme réduite :  <strong><em> y</em> = <em>ax</em> + <em>c</em></strong>
            </p>
        </div>
        <h3 class="sous_titre" id="vecteur-directeur">Déterminer le vecteur directeur
        </h3>
        <div class="content">
            <p>
            Pour tracer une droite à partir d'une équation cartésienne, il faut tout d'abord déterminer le vecteur directeur.<br><br>
            <strong>La formule est : ( <em>-b</em> ; <em>a</em>)</strong>
            <br><br> Exemple : <br>            
                
            <em>5x</em> + <em>3y</em> + <em>c</em> = 0&#160;&#160;<i class="fas fa-arrow-right"></i>&#160;&#160;u(-3;5)
        
       
            </p>
        </div>
        <h3 class="sous_titre" id="trouver-c">Déterminer <strong>c</strong>
        </h3>
        <div class="content">
            <p>
                Pour déterminer c, il nous faut un point de la droite + son vercteur directeur.
                Exemple : A(1;4) u(-3.9)
                <br><br>
                <ul class="list">
                    <li>&#160;<b>ax + by + c = 0</b></li>
                    <li>&#160;<b>(a*x)+(b*y) + c = 0</b></li>
                    <li>&#160;<b>(9*1)+(-3*4) + c = 0</b></li>
                    <li>&#160;<b>9 - 12 + c = 0</b></li>
                    <li>&#160;<b>-3 + c = 0</b></li>
                    <li>&#160;<b>c = 3</b></li>
                </ul>
            </p>
        </div>
        <h5 class="sous_titre" id="determiner-equation-cartesiennne">Déterminer une équation cartésienne à partir de 2 points.</h5>
        <div class="content">
            <p>
                Il nous faut connaître les coordonnées de deux points. <br><br>
                <a class="fleche">Exemple :</a> A(5;3) et B(1;-3)<br><br>
                Ensuite il faut son vecteur directeur : <br><br>
                <ul class="list">
                    <li>A-B</li>
                    <li>(1-5;-3-3)</li>
                    <li>(-4;-6)</li>
                </ul>

                Nous avons donc un vecteur directeur :<b> (4;-6)</b><br> et une équation cartésienne égal à :
                <b>-6x + -4y + c = 0</b>
                <br><br>
                <a class="fleche">Cependant il manque c</a>. Pour trouver c, il suffit de remplacer x et y par les coordonnée d'un des points (ex : A).
                <br><br>
                <ul class="list">
                    <li>-6x + 4y + c = 0</li>
                    <li>(-6*5) + (4*3) + c = 0</li>
                    <li>-30 + 12 + c = 0</li>
                    <li>18 + c = 0</li>
                    <li> c = -18</li>
                </ul>
                C'est tout !! notre équation <a class="fleche">cartésienne complète</a> est égal à : <br><br>
                <b>-6x + -4y + -18 = 0</b>
                <br><br><br>

            </p>
        </div>
    </div>
    <?php

    include '../../footer.php';

    ?>
</body>

</html>