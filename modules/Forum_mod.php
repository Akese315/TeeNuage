<div id="module">
    <link rel="stylesheet" href="css/Forum.css" />
    <script src="https://kit.fontawesome.com/6857fc4fa0.js" crossorigin="anonymous"></script> 
   

    <div class = "Forum">
        <div id = "tab-1">
            <div class ="research_bar">
              <input id = "search_forum" class = "research_input"><button id = "button_add"class ="research_input" onclick="Application.getApplication().getForum().addItem().onglet('#tab-2')" >+</button>
            </div>  
            <div class="filtre">
                    <button onclick="bouton_pertinance.action()" type="button" id='btn1' class="btn_filtre">pertinance</button>
                    <button onclick="bouton_aime.action()" type="button" id='btn2' class="btn_filtre">aimé</button>
                    <button onclick="bouton_amis.action()" type="button" id='btn3' class="btn_filtre">amis</button>
                </div>
            <div id ="accordion"> </div> 
        
        </div> 
         <div id= "tab-2" class = "add-discussion" > 
         <form id="add_forum" class="add_forum">
                    <div class = "cross" onclick = "Application.getApplication().getForum().addItem().onglet('#tab-1')"><i class="fas fa-times"  style="color:green"></i></div>
                    <label id = "sujet_label">Sujet</label>
                    <input type='text' id='forum_sujet' ></input>                 
                    <label id = "descrip_label">Description</label>                    
                    <textarea id='forum_description' row='5' cols='20'></textarea>
                    <button id = "button_create" onclick='Application.getApplication().getForum().addItem()' >créer</button>
                </form>

        </div>  
   
</div>

    <img src onerror="forum_mod_init();"></img>
</div>
