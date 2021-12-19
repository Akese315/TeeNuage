<!DOCTYPE html>

<html>



<meta charset="utf-8" />
 <meta>
 <link rel="stylesheet" href="css/css_menunav.css"/>
 <script src="javascript/jquery-js/jquery-3.5.1.min.js"></script> 
<script src="javascript/jquery-ui-1.12.1/jquery-ui.js"></script> 
 <script src="javascript/Register.js"></script>
 <script src="javascript/Log.js"></script>
 <script type="text/javascript" src="javascript/crypto/core.js"></script>  
<script type="text/javascript" src="javascript/crypto/sha256.js"></script>  
<link rel="stylesheet" href="css/login.css"> 
<meta name = "Description" content = "Connectez-vous pour accèder à d'autres fonctionnalités du site !">
<meta name="robots" content="index,follow,nosnippet" />
<meta name="copyright" content="© TeeNuage.fun | 2021" />
<meta name="Author" content="Axel Rhelimi, Bunnkhov Thy" />
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html">
<meta name="Language" CONTENT="fr" />
  <title>Se connecter</title>
</meta>
<head>

<?php

include 'menu_nav.php';
?>
</head>

    <div class = "main">
    <div class = "content">

    
        <div id="_form-box" class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" value="login" id = "log_btn"class="toggle-btn" onclick="LoginButton()" id="btn_login">Log
                    in</button>
                <button type="button" value="register" id = "reg_btn" class="toggle-btn" onclick="RegisterButton()"
                    id="btn_register">Register</button>
            </div>
            <div id="info" class="info"></div>


            <form id="login" class="input-group">
                <input id="email_login" type="type" class="input-field" placeholder="Adresse Mail" required>
                <input id="mdp_login" type="password" class="input-field" placeholder="Mot de passe" required>
                <input type="checkbox" class="check-box"><span id="checkBoxTxt">Se souvenir de moi</span><br>
                <a class ="forgotten_password" href = "password_forgotten.php">Mot de passe oublié ?</a><br>
                <button type="button" class="submit-btn" onclick="doConnection()"> Connexion</button>
            </form>

            
            <form id="register" class="input-group">
            <div id="info" class="info"> 
                <p> Le mot de passe doit comporter 8 caractères (chiffres, lettres, caractères spéciaux).</p>
            </div>                
                <input id="pseudo_register" name="pseudo_register" type="type" class="input-field" placeholder="Pseudonyme" required>
                <input id="email_register" name="email_register" type="type" class="input-field" placeholder="Adresse Mail" required>
                <input id="mdp_register" name="mot_de_passe_register" type="password" class="input-field" placeholder="Mot de passe" required>
                <input id="nom_register" type="text" class="input-field" name="nom_register" placeholder="nom" required />
                <input id="prenom_register" type="text" class="input-field" name="prenom_register" placeholder="prénom" required />
                <input id="age_register" type="number" class="input-field" name="age_register" placeholder="age" required />
                <input id="legal_register" type="checkbox" class="check-box"><span>J'accepte les mentions légales</span>
                <button type="button" class="submit-btn" onclick="doInscription()">Inscription</button>
            </form>
   
       

</div>
</div> 
<?php



include 'footer.php';



?> 


</body>

</html>