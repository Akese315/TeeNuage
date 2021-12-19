<meta charset="utf-8" /> 
<link rel="stylesheet" href="css/css_menunav.css"/>
<link rel="stylesheet" href="css/css_bienvenue.css"/> 
<script src="javascript/jquery-js/jquery-3.5.1.min.js"></script> 
<script src="javascript/jquery-ui-1.12.1/jquery-ui.js"></script>
<script src="javascript/forum_mod.js"></script>
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/Forum.css" />

<script src="https://kit.fontawesome.com/6857fc4fa0.js" crossorigin="anonymous"></script> 
</meta>
  
 
  <title>Tchat</title>

  <?php

include 'menu_nav.php';

?>  

  
    
   

    <div class = "main">
        <div id = "tab-1">
            <div class ="research_bar">
              <input id = "search_forum" placeholder = "Recherchez ici"class = "research_input"><button id = "button_add"class ="research_input"  onclick="forumObject.onglet('#tab-2')" >+</button>
            </div>  
            <div class="filtre">
                    <button onclick="bouton_pertinance.action()" type="button" id='btn1' class="btn_filtre">pertinance</button>
                    <button onclick="bouton_aime.action()" type="button" id='btn2' class="btn_filtre">aimé</button>
                    <button onclick="bouton_amis.action()" type="button" id='btn3' class="btn_filtre">amis</button>
                </div>
            <div id ="accordion">
                
            </div> 
        
        </div> 
         <div id= "tab-2" class = "add-discussion" > 
         <form id="add_forum" class="add_forum">
                    <div class = "cross" onclick = "forumObject.onglet('#tab-1')"><i class="fas fa-times" ></i></div>
                    <label id = "sujet_label">Sujet</label>
                    <input type='text' id='forum_sujet' ></input>                 
                    <label id = "descrip_label">Description</label>                    
                    <textarea id='forum_description' row='5' cols='20'></textarea>
                    <button id = "button_create" onclick='forumObject.addItem()' >créer</button>
                </form>

        </div>  
   
</div>

 
</div>
