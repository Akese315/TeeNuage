<!DOCTYPE html>



<html>



<head>



<meta charset="utf-8" />

 

 

<link rel="stylesheet" href="css/css_menunav.css"/> 
 <link rel="stylesheet" href="css/matieres.css"/> 
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>

 <script src="https://kit.fontawesome.com/6857fc4fa0.js" crossorigin="anonymous"></script>



   

  <meta>

 

  <title>matières</title>



</head>





<body class='body'>



<?php



include 'menu_nav.php';



?>  





<div class = "main">

<div class = "sommaire">
  <div  class="littéraire">
    <div class ="matiere" id="francais"><a href = "Matieres/Francais.php"><b>Français</b></a><br><i class="fas fa-flag"></i></div><br>
    <div class ="matiere" id ="anglais"><a href = "Matieres/Anglais.php"><b>Anglais</b></a><br><i class="fas fa-flag-usa"></i></div><br>
    <div class ="matiere" id ="espagnol"><a href = "Matieres/Espagnol.php"><b>Espagnol</b></a><br><i class="fas fa-flag"></i></div><br>
    <div class ="matiere" id ="japonais"><a href = "Matieres/japonais.php"><b>Japonais</b></a><br><img src="images/drapeau-japon.jpg"></div><br>
  </div>
  <div class="scientifique">
    <div class ="matiere" id ="maths"><a href = "Matieres/Maths.php"><b>Maths</b></a><br><i class="fas fa-calculator"></i></div><br>
    <div class ="matiere" id ="sp"><a href = "Matieres/SP.php"><b>Science<br> physique</b></a><br><i class="fas fa-atom"></i></div><br>
    <div class ="matiere" id ="svt"><a href = "Matieres/SVT.php"><b>SVT</b></a><br><i class="fas fa-leaf"></i></div><br>
    <div class ="matiere" id ="si"><a href = "Matieres/SI.php"><b>SI</b></a><br><i class="fas fa-cogs"></i></div><br>
  </div>
  <div class="autres">
    
    <div class ="matiere" id ="histoire"><a href = "Matieres/Histoire.php"><b>Histoire</b></a><br><i class="fas fa-book"></i></div><br>
    <div class ="matiere" id ="SES" ><a href = "Matieres/SES.php" ><b>SES</b></a><br><i class="fas fa-comments-dollar"></i></div><br>
    <div class ="matiere" id ="geographie"><a href = "Matieres/Geographie.php"><b>Géo-<br>graphie</b></a><br><i class="fas fa-globe-americas"></i></div><br>
    
  </div>






</div>

<?php



include 'footer.php';



?> 

</div>



 



</body>

</html>



