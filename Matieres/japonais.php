<meta charset="utf-8" />
 
 <link rel="stylesheet" href="../css/css_menunav.css"/>
 <link rel="stylesheet" href="../css/main_page_subject.css"/> 
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
 <script src="https://kit.fontawesome.com/6857fc4fa0.js" crossorigin="anonymous"></script>
</meta>
   
  
 
  <title>Japonais</title>

</head>


<body class='body'>

<?php

include '../menu_nav.php';

?>  
<script src = "../javascript/acceuil.js"></script>

<div class = "main"> 
<h1 class = "Nom_matiere"><i class="fas fa-book"></i> Japonais </h1>


<ul class = "sommaire">

    <ul>
      <p class = "classe"> N5 </p>
      
      <ul><i class="fas fa-book"></i><p p class="categories">Grammaire</p>
        <li><a href="Japonais/la-forme-en-TE.php"  class="sous-liste">La forme ~TE </a></li>
    </ul>    
    <ul><i class="fas fa-book"></i><p class="categories">Vocabulaire</p>      
        <li><a href="Japonais/Date.php"  class="sous-liste">L'heure en japonais</a></li>
    </ul> 

</ul>

</div>

<style>
h1
{

font-size: 60px;
color :#F91015;


}
.sommaire ul li
{
color :#F91015;
margin : 30px auto;


}
.categories
{
  color :#F91015;
  font-size: 40px;
}

.sous-liste:visited
{
  color : #782224;
}

.sous-liste
{

  color :#d58d8f;

}

</style>
<?php

include '../footer.php';

?>  
</body>
</html>