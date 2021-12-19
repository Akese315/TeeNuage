<meta charset="utf-8" />
 
 
 <link rel="stylesheet" href="../css/main_page_subject.css"/> 
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
 <link rel="stylesheet" href="../css/css_menunav.css"/>
 <script src="https://kit.fontawesome.com/6857fc4fa0.js" crossorigin="anonymous"></script>
 </meta>
 

   
  
 
  <title>matières</title>

</head>


<body class='body'>

<?php

include '../menu_nav.php';

?>  
<script src = "../javascript/acceuil.js"></script>

<div class = "main"> 
<h1 class = "Nom_matiere"> Anglais </h1>


<ul class = "sommaire">

    <ul>
      <p class = "classe"> 2nd </p>
      
      <li><i class="fas fa-arrow-right"></i><a href = "Anglais/1semestre_2nd.php">Révision collège</a></li>    
      <li><i class="fas fa-arrow-right"></i><a href = "#">1er trimestre</a></li>  
      <li><i class="fas fa-arrow-right"></i><a href = "#">2ème trimestre</a></li> 
      <li><i class="fas fa-arrow-right"></i><a href = "#">3ème trimestre</a></li> 
        
    </ul> 


    <hr class = "barre_limite ">
    <div class = "text_limite"><i class="fas fa-exclamation-triangle"></i><p> à partir de là il n'y a pas de contenu </p><i class="fas fa-exclamation-triangle"></i></div>

    <ul>
    <p class = "classe"> 1ère </p>
      
      <li>1er trimestre</li>  
      <li>2ème trimestre</li> 
      <li>3ème trimestre</li> 
        
    </ul> 

    <ul> <p class = "classe"> Terminale </p>    
          
      <li>1er trimestre</li>  
      <li>2ème trimestre</li> 
      <li>3ème trimestre</li> 
        
    </ul> 


</ul>

</div>
<style>
h1
{

font-size: 60px;
background: linear-gradient(to right top,#c0dfdb, rgb(66, 218, 238));
-webkit-text-fill-color: transparent;
-webkit-background-clip: text;


}
.sommaire ul li
{
background: linear-gradient(to right top,#c0dfdb, rgb(66, 218, 238));
-webkit-text-fill-color: transparent;
-webkit-background-clip: text;
margin : 30px auto;


}

</style>
<?php

include '/footer.php';

?>
</body>
</html>