<!DOCTYPE html>    
<html> 


<meta charset="utf-8" />
 <meta> 
 <link rel="stylesheet" href="css/css_menunav.css"/>
 <script src="javascript/jquery-js/jquery-3.5.1.min.js"></script> 
<script src="javascript/jquery-ui-1.12.1/jquery-ui.js"></script>  
<script src="javascript/reset-password.js"></script> 
<script type="text/javascript" src="javascript/crypto/core.js"></script>  
<script type="text/javascript" src="javascript/crypto/sha256.js"></script>  
 <link rel="stylesheet" href="css/reset-password.css">
  <title>Réinitialisation du mot de passe.</title>
</meta>   
 
<body>   

<?php



include 'menu_nav.php';



?> 
  

  <div class ="main">
    <h1>Réinitialisation du mot de passe.</h1><br>    
   <div class= "reset-password">
   <br>
   <p class="explication"> Le mot de passe doit comporter 8 caractères (chiffres, lettres, caractères spéciaux).</p><br>
  <p class="explication"id="Message"></p>
    <br>
   <input type="password"class="password" id="password1" placeholder="Nouveau mot de passe"><br>
   <input type="password"class="password" id="password2" placeholder="Confirmation mot de passe"> <br> 
   <button id="sendNewPassword" onclick = "reset.initReset()">Réinitialiser</button>

    </div>
    <?php



include 'footer.php';



?> 
</div>
 



</body>

</html>