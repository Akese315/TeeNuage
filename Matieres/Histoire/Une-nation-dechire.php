<!DOCTYPE html>

<html>

<head>
    <meta name="robots" content="index,follow" />
    <meta name="copyright" content="© TeeNuage.fun | 2021" />
    <meta name="Author" content="Axel Rhelimi, Bunnkhov Thy" />
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="Language" CONTENT="fr" />
    <meta name="description" content="Cette page est un résumé du deuxième point de la révolutoin française : Une nation déchirée!" />
    <link rel="stylesheet" href="css/Histoire.css" />
</head>

<title> Une nation déchirée </title>

<body>

    <?php

    include '../../menu_nav.php';

    ?>

    <div class="main">
        <h1 class="titre">Une nation déchirée</h1>




        <div class="content">
            <p>
            <ul class="index">
            <li onclick="scrollFunction('contexte')"><i class="fas fa-caret-right"></i>Contexte</li>
                <li onclick="scrollFunction('externe')"><i class="fas fa-caret-right"></i>La france menacés par les pays voisins</li>
                <li onclick="scrollFunction('interne')"><i class="fas fa-caret-right"></i>La france et ses conflits internes</li>
                <li onclick="scrollFunction('conclusion')"><i class="fas fa-caret-right"></i>Conclusion</li>
            </ul>
            </p>
        </div>
        <h2 class="sous_titre" id="contexte"> Contexte </h2>
        <div class="content">
       Suite à la mort du roi, la France est toujours en révolutoin économique et sociale. De plus la mort du roi provoque  des conflit
       interne mais aussi externe à la France. Nous verrons comment les montagnards feront face aux danger menaçant la république.
        </div>
        <h3 class="sous_titre" id="externe">La france menacés par les pays voisins.</h3>
        <div class="content">
            Dans un premier temps, les coalisés (alliance d'état Européens) voit cela comme une opportunité d'annexer la France.
            Les pays concernés sont : la Prusse, la Hollande, l'Angleterre, l'Espagne; l'Autriche et les piémontais. 
            Après cette déclaration de guerre, l'assemblée décrète une levée en masse en février 1793 afin de combattre l'ennemie. Il va y avoir des victoires
            mais aussi des defaites qui coûteront à la France des annexions nottament dans le Nord.
        </div>
        <h4 class="sous_titre" id="interne">La france et ses conflits internes.</h4>
        <div class="content">
            Néanmoins, au même moment, des révoltes se produisent dans le pays tel que les royaliste vendéens.
            Il y aura aussi des zones d'insurrection déféraliste.
            <br><br>
            <img src="images/Vendee-militaire.png" id="vendee">
            <br><br> A la suite l'assemblée lance des mesures pour arrêter les suspects
            ou les personnes s'opposant au système. Un certificat de civisme sera mis en place pour isoler les suspect et les exécuter à la
            baïonnette.<br><br>
            <img src="images/certificat-civisme.jpg" id="certificatIMG">
        </div>
        <h4 class="sous_titre" id="conclusion">Conclusion</h4>
        <div class="content">
          Pour finir, la France sortira vainqueur en repoussant l'ennemie grâce son décret pour arrêter les suspect mais aussi grâce 
          à son effort de guerre. 29 députés girondings seront guillotiné pour contre révolution. Robespierre sera à la tête et installa un
          régime autoritaire (La terreur). Robespierre sera aussi guillotiné pour sa folie en juillet 1794.
        </div>
    </div>
    <?php

    include '../../footer.php';

    ?>
</body>
</html>

<style>
    #certificatIMG
    {
        max-width: 30%;
    }
    #vendee
    {
        max-width: 50%;
    }
    @media screen and (max-width: 1100px)
{

    #certificatIMG
    {
        max-width: 300px;
    } 
    #vendee
    {
        max-width: 300px;
    } 
    
}

</style>