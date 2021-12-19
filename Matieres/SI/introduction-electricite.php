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
    <link rel="stylesheet" href="css/SI.css" />
</head>

<title> Électricité : introduction </title>

<body>

    <?php

    include '../../menu_nav.php';

    ?>

    <div class="main">
        <h1 class="titre"> Électricité : introduction </h1>




        <div class="content">
            <p>
            <ul class="index">
            <li onclick="scrollFunction('unités')"><i class="fas fa-caret-right"></i>Les unités électriques</li>
                <li onclick="scrollFunction('noeud')"><i class="fas fa-caret-right"></i>Les noeuds</li>
                <li onclick="scrollFunction('potentiel')"><i class="fas fa-caret-right"></i>Le potentiel</li>
                <li onclick="scrollFunction('resistances')"><i class="fas fa-caret-right"></i>La resistance</li>
                <li onclick="scrollFunction('masse')"><i class="fas fa-caret-right"></i>La masse et la terre</li>
            </ul>
            </p>
        </div>
        <h2 class="sous_titre" id="unités"> Les unités électriques </h2>
        <div class="content">
            <p>
                Les principales unités en électricités sont : 
                <ul class="list">
                    <li><b>Les Watts :</b>C'est la puissance qu'un appareil électroniques a besoin.</li>
                    <li><b>Les Volts :</b> il s'agit de la tension du courant électrique. C'est <a class="fleche"><b>la différence de potentiel</b></a> entre deux point d'un circuit.</li>
                    <li><b>Les Ampères :</b>L'ampère est l'intensité d'un courant électrique. C'est le transport <a class="fleche"><b>d'une charge électrique en seconde</b></a>. (1A = 6.2 milliard d'électrons par secondes)</b></li>
                    <li><b>Les ohm :</b> c'est l'unité qu'on attribu pour caractériser les isolants électriques. Plus la valeur est grande, plus la résistance est grande.</b></li>
                </ul>
            </p>
        </div>
        <h3 class="sous_titre" id ="noeud" >Les noeuds</h3>
        <div class ="content">
            Si un fil se sépare ou se divise en deux fils il y a plusieurs branches.
            S'il y a plusieurs branches, il y a plusieurs mailles. Un noeud est le point qui relie au moin 3 fils comme ceci :<br>
            <img src="images/noeud.png" alt="noeud">
        </div>
        <h4 class="sous_titre" id="lois"> Les lois électriques </h4>
        <div class="content">
            <ul class="list">
                <li>La loi d'ohm :<span class="division">
                    <span class="top">U</span><hr><span class="bottom">I</span></span> = R</li>
                <li>La loi des mailles (kirchhoff) : la somme des courrants qui arrivent est la somme des courant qui sortent.<br>
            <br>i1 + i2 = i3 + i4<br>
            De la même façon, la somme des tensions est égal à 0.
            Exemple :</li>
            </ul>
        </div>
        <h4 class="sous_titre" id="potentiel">Le potentiel</h4>
        <div class="content">
            L'électricité circulent dans des conducteurs (métaux, carbonne pur, eau salé ect...). <br><a class="surlignage">Mais comment circulent t-il?</a><br>
            Il circulent car il existe une différence de potentiel. cette différence de potentiel est causé par une pile, générateur par exemple.
            Les atomes du conducteurs sont électriquement neutre, mais la pile va attirer les électrons de ces derniers. Ainsi les électrons circulent par
            réactions en chaîne. La pile prend un électron à un atome, l'atome est électriquement positifs et demande un électrons voisins pour devenir neutre et ainsi de suite.
            <img src="images/potentiel.png" alt="potentiel électrique"><br><br>
            Pour conclure le potentiel permet de créer le courant électrique.
        </div>
        <h5 class="sous_titre" id="resistances">La resistance</h5>
        <div class="content">
            Le rôle de la resistance est de réduire l'intensité (ampère). La resitance est constitué d'isolants tel que (le verre, le bois, l'eau pure ect...).
            Sa valeur en ohm est toujours positive et superieur à 1 (sinon la resitance produirait de l'énergie).
            <br>
            Exemple : <br>
            <img src="images/resistance.png" alt ="resistance">
            <br><br>
            Pour calculer la résistance équivalente de toutes les résistances dans un circuit en série, il faut simplement les additionner:
            <br>
            <br>
            ResEq = Res1 + Res2 + Res3 + Res4...<br><br>
            Dans le cas d'un circuit en parrallèle :
            <br>
            <span class="division"><span class="top">1</span><hr><span class="bottom">ResEq</span></span> = 
            <span class="division"><span class="top">1</span><hr><span class="bottom">Res1</span></span>
            <span class="division"><span class="top">1</span><hr><span class="bottom">Res2</span></span>
            <span class="division"><span class="top">1</span><hr><span class="bottom">Res3</span></span>
        </div>
        <h6 class="sous_titre" id="masse">La masse et la terre</h6>
        <div class="content">
            La masse est une partie conductrice qui peut être touché par une personne car elle n'est pas mise sous tension.
            Elle possède donc un potentiel de 0.
            <br><br>
            La terre possède aussi un potentiel de 0 et permet d'en cas de surtension ou de problème relatif à l'appareil de décharger son courrant dans la terre
            pour éviter une électrocution.
            <br><br>
            <img src="images/masse_terre.png" alt="masse et terre">
        </div>
    </div>
    <?php

    include '../../footer.php';

    ?>
</body>

</html>