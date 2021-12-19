<head>
<meta charset="utf-8" /> 
<link rel="stylesheet" href="css/css_menunav.css"/>
<link rel="stylesheet" href="css/css_bienvenue.css"/> 
<script src="javascript/jquery-js/jquery-3.5.1.min.js"></script> 
<script src="javascript/jquery-ui-1.12.1/jquery-ui.js"></script>
<script src="javascript/profil.js"></script>
<link rel="stylesheet" href="css/profil.css"/>
<meta name = "Description" content = "Cette page vous permet de prendre connaissance de vos informations personnelles
sur le site, de les modifier ou de se déconnecter">
<meta name="robots" content="index,follow" />
<meta name="copyright" content="© TeeNuage.fun | 2021" />
<meta name="Author" content="Axel Rhelimi, Bunnkhov Thy" />
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html">
<meta name="Language" CONTENT="fr" />
<script src="https://kit.fontawesome.com/6857fc4fa0.js" crossorigin="anonymous"></script> 
</head>
  
 
  <title>Profil</title>

  <?php

include 'menu_nav.php';

?>  

<div class = "main">


<h1 id ="HelloPseudo">Bonjour</h1>
<br><br>
<h2 id="compte">compte :</h2>
<ul class="personal-field">
  <li><label>Nom :</label><input id="name"></li>
  <li><label>Prénom :</label><input id="first-name"></li>
  <li><label>Age :</label><input id="age"></li>
  <li><label>Email :</label><input id="email"></li>
</ul>
<button class = "logout" onclick = "profilObject.logOut()"> Se déconnecter </button>



</div>