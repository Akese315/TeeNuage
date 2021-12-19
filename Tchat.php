<head>
<meta charset="utf-8" /> 
<link rel="stylesheet" href="css/css_menunav.css"/>
<script src="javascript/jquery-js/jquery-3.5.1.min.js"></script> 
<script src="javascript/jquery-ui-1.12.1/jquery-ui.js"></script>
<script src="javascript/chat_mod.js"></script>
<link rel="stylesheet" href="css/chat.css"/> 
<script src="https://kit.fontawesome.com/6857fc4fa0.js" crossorigin="anonymous"></script> 
<meta name = "Description" content = "Cette page vous permet de discuter dans un groupe de vos expériences, des cours enfin bref de tout">
<meta name="robots" content="index,follow" />
<meta name="copyright" content="© TeeNuage.fun | 2021" />
<meta name="Author" content="Axel Rhelimi, Bunnkhov Thy" />
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html">
<meta name="Language" CONTENT="fr" />
</head>
  
 
  <title>Se connecter</title>

  <?php

include 'menu_nav.php';

?>  


    <div class = "main">

    <div id="chat_area" class="chat_area">   </div> 
   
    <div class="chat_form">
        <input class = "send_bar" type="text" id="message_textarea"  placeholder="écris!" autofocus>
        <button  id = "send_button" onclick="ChatObject.send()" type="button" ><img src = "images/6_social_send_now.png"></button>
    </div>
 
  
</div>