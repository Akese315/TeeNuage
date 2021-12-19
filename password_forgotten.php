<!DOCTYPE html>    
<html> 


<meta charset="utf-8" />
 <meta> 
 <link rel="stylesheet" href="css/css_menunav.css"/>
 <script src="javascript/jquery-js/jquery-3.5.1.min.js"></script> 
<script src="javascript/jquery-ui-1.12.1/jquery-ui.js"></script>  
<script src="javascript/forgotten_password.js"></script> 
 <link rel="stylesheet" href="css/password_forgotten.css">
  <title>Mot de passe oublié</title>
</meta>   
 
<body>   

<?php



include 'menu_nav.php';



?> 
  

  <div class ="main">
    <h1>Mot de passe oublié ?</h1><br>    
    <div class="reset">  
    <p class ="explaination"> Donnez nous votre adresse-mail et nous vous pourrez  réinitialiser votre mot de passe !</p>
    <br>
      <p id ="info"> </p><br>
        <label><b>Adresse-email :      
        </b>    
        </label>    
        <br><br>
        <input type="text" name="Email" id="Email" placeholder="exemple@gmail.com"> <br>   
        
        <br><input onclick = "ForgotPasswordObject.CheckRecoveryRequest()"type="button" name="reset" id="resetButton" value="Réinitialiser">    
          
       
       <div class="test"> </div>
</div>
<?php



include 'footer.php';



?>     
 </div>






</body>

</html>