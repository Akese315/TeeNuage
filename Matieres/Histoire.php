<meta charset="utf-8" />
 
 <link rel="stylesheet" href="../css/css_menunav.css"/>
 <link rel="stylesheet" href="../css/main_page_subject.css"/> 
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
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
<h1 class = "Nom_matiere"><i class="fas fa-book"></i> Histoire </h1>


<ul class = "sommaire">

    <ul>
      <p class = "classe"> 2nd </p>
      
      
        
    </ul> 

    <hr class = "barre_limite ">
    <div class = "text_limite"><i class="fas fa-exclamation-triangle"></i><p> à partir de là il n'y a pas de contenu </p><i class="fas fa-exclamation-triangle"></i></div>

    <ul>
    <p class = "classe"> 1ère </p>
    <li><i class="fas fa-book"></i><a href = "Histoire/La-Revolution.php">L'europe face aux révolutions</a></li>    
    <li><i class="fas fa-book"></i><a href = "Histoire/Une-nation-dechire.php">Une nation déchiré</a></li>
        
    </ul> 

    <ul> <p class = "classe"> Terminale </p>    
          
        
    </ul> 


</ul>

</div>

<style>
h1
{

font-size: 60px;
background: linear-gradient(to right top,#F6DF90,#F5BF07 );
-webkit-text-fill-color: transparent;
-webkit-background-clip: text;


}
.sommaire ul li
{
background: linear-gradient(to right top,#F6DF90,#F5BF07 );
-webkit-text-fill-color: transparent;
-webkit-background-clip: text;
margin : 30px auto;


}

</style>
<?php

include '../footer.php';

?>  
</body>
</html>