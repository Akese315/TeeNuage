<head>
<meta charset="utf-8" />
 
 <link rel="stylesheet" href="../css/css_menunav.css"/>
 <link rel="stylesheet" href="../css/main_page_subject.css"/> 
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
 <script src="https://kit.fontawesome.com/6857fc4fa0.js" crossorigin="anonymous"></script>
</meta>
   
  
 
  <title>Matières</title>

</head>


<body>

<?php

include "../menu_nav.php";

?>  
<script src = "https://teenuage.fun/javascript/acceuil.js"></script>

<div class = "main"> 
<h1 class = "Nom_matiere"> Science de l'ingénieur </h1>


<ul class = "sommaire">

    <ul>
      <p class = "classe"> 2nd </p>
      <li class ="liens"><a href = "SI/introduction">Programmation C++</a></li>        
    </ul> 
    <ul>
    <p class = "classe"> 1ère </p>
    <li class ="liens"><a href = "SI/introduction-electricite.php">Les résistances</a></li>
    <br><br>
    </ul> 

    <ul> <p class = "classe"> Terminale </p>    
          
    <br><br>
        
    </ul> 


</ul>

</div>
<?php

include '../footer.php';

?>  
</body><style>
h1
{

font-size: 60px;
background: linear-gradient(to right top,#F91015, #FFC12B
);
-webkit-text-fill-color: transparent;
-webkit-background-clip: text;


}
.sommaire ul li
{

border : 8px solid #F91015;

}

.sommaire ul li:hover
{

background-color : #FFC12B;

}
.sommaire ul li a
{
  
  
  color : #F91015;

}



</style>
</html>