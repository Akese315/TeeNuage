
$('document').ready(function(){

bouton_pertinance = new bouton('btn1');
bouton_aime = new bouton('btn2');
bouton_amis = new bouton('btn3');
forumObject = new Forum();
forumObject.getListItem();

});




class bouton {
    static m_active_button = null;
    constructor(id) {
        this._id = id;
        this._the_button = document.getElementById(id);
        this._is_color = true;
        this._the_button.style.backgroundColor = '#fff';
        this._the_button.style.color = '#A6FFF3';
    }

    action() {

        if (!this._is_color && bouton.m_active_button == this) {
            this._the_button.style.backgroundColor = '#A6FFF3';
            this._the_button.style.color = '#fff';
            console.log("tout bon");
            this._is_color = true;
           

        } else if (this._is_color && bouton.m_active_button == this) {
            this._the_button.style.backgroundColor = '#fff';
            this._the_button.style.color = '#A6FFF3';
            console.log("couleur");
            this._is_color = false;
         
        } else {
            this._the_button.style.backgroundColor = '#A6FFF3';
            this._the_button.style.color = '#fff';
            if (bouton.m_active_button == null)
                bouton.m_active_button = this;
            else {
                bouton.m_active_button._the_button.style.backgroundColor = '#fff';
                bouton.m_active_button._the_button.style.color = '#A6FFF3';
            }
            console.log("RIEN");
            this._is_color = true;
            bouton.m_active_button = this;
        }
    }
}

var bouton_pertinance;
var bouton_aime;
var bouton_amis;


function pertinance() {
    bouton_pertinance.action();
};

function aime() {
    bouton_aime.action();
};

function amis() {
    bouton_amis.action();
};
class Item_forum {
    constructor(sujet, description, Session_ID, Pseudo) 
    {
        this.Sujet = sujet;
        this.Session_ID = Session_ID;
        this.Pseudo = Pseudo;
        this.Description = description;
    }
    is_valid() {
        return (this.Sujet.length != 0) && (this.Description.length != 0);
    }
}
class chatData
{

    constructor(forum,user_id, user)
    {

        this.Forum_ID = forum;
        this.User_ID = user_id;
        this.Pseudo = user;

    }

}
class Forum {

    constructor() 
    {

        this.previous_onglet ="#tab-1" ;
        this._id = 0;
        this._netItems = null;

    }
    setItems(items) {
        this._netItems = items;
    }
    getItems() {

        return this._netItems;
    }
    getId() {
        return this._id;
    }
    setId(id) {
        this._id = id;
    }
    searchItem() {
        var _forum_look = document.getElementById('search_forum').value.trim();
        var _option = 0;

        if (typeof(this._netItems[_forum_look]) != 'undefined') {
            this._id = this._netItems[_forum_look];
            $('#accordion').find("h3").each(function(index, item) {
                if (_forum_look.localeCompare(item.innerText) == 0) {
                    $("#accordion").accordion({
                        active: index
                    });
                }
            });
        }
    }
    addItem() {
        var validation = true;
        var item_forum = new Item_forum(
        document.getElementById("forum_sujet").value.trim(),
        document.getElementById("forum_description").value.trim(),
        UserObject.getSessionID() ,
        UserObject.getPseudo());                   
        var my_container = document.getElementById("myContainer");
        if (item_forum.is_valid()) {
            $.ajax({
                    url: 'processes/forum_add_item.php', // La ressource ciblée
                    type: 'post', // Le type de la requête HTTP.
                    dataType: 'text',
                    data: 'Parameters=' + JSON.stringify(item_forum)
                    })
                .done(function(json_response, statut) {
                    if (json_response != 'false') 
                    {
                        try {
                            var response = JSON.parse(json_response);
                            if (!response.status) 
                            {
                                console.log(response.error);
                            } 
                            else 
                            {
                                this._id = response.value;
                                forumObject.getListItem();                               
                                console.log(response.status);
                                console.log("Chat demarré");
                            }
                        } catch (error) {
                            console.log(json_response);
                        }
                    } 
                    else 
                    {
                        console.error(statut);
                    }

                })


            .fail(function(responseat, statut, erreur) {
                $("#debug").prepend(responseat.responseText);
                console.log("erreur ajax");
            });
        }
        return this;
    }

    onglet(tab){
         console.log("hey");  
        if (tab != this.previous_onglet){
              $(this.previous_onglet).css("display","none");
        $(tab).css("display", "block");
        this.previous_onglet = tab;
        }  
      
    }

    DoChat(id_forum)
    {

        var ChatObject = new chatData(id_forum,UserObject.getUserId(), UserObject.getPseudo());
        UserObject.eraseCookie("forum");
        UserObject.createCookie("forum", JSON.stringify(ChatObject), 1);
        
        var Forum_info = UserObject.readCookie("forum");
        console.log(Forum_info);
        if ( Forum_info != null || Forum_info != undefined)
        {            
         
            
            document.location.href = "Tchat.php";
        }
        else
        {

            document.location.href = "liste_chat.php" 

        }        

          
        
        
        

    }


    getListItem() {
        var validation = true;
        console.log("GetListItem done");
        $.ajax({
                url: 'processes/forum_list_item.php', // La ressource ciblée
                type: 'post', // Le type de la requête HTTP.
                dataType: 'text',
                data: 'Parameters={}'
            })
            .done(function(json_response, statut) {
                if (json_response != 'false') {
                    try {
                        var response = JSON.parse(json_response);
                        if (!response.status) {
                            console.log(response.error);
                        } else {
                          
                            var div_accordeon = document.getElementById("accordion");            
                            response.value.forEach(function(item) 
                            {

                                
                                var MainDiv = document.createElement("div");

                                MainDiv.onclick = chooseChat;
                                MainDiv.className= "Items";  
                                MainDiv.setAttribute('id', item.ID);  
                                
                                var FirstDiv = document.createElement("div");
                                FirstDiv.className= "first";  
                                

                                var p = document.createElement("p");                                
                                p.innerText = item.Nom;
                                p.className = "Items_Titre";

                                var p2 = document.createElement("p");
                                p2.innerText = item.Description;
                                p2.className= "Items_description";

                                var SecondDiv = document.createElement("div");
                                SecondDiv.className= "second";  

                                var pSecond = document.createElement("p");
                                pSecond.onclick = Ilike;
                                pSecond.className= "heart"; 
                                
                                var i = document.createElement("i");
                                i.className = "fas fa-heart";
                                
                                var p2Second = document.createElement("p");
                                p2Second.className= "lock";  

                                var i2 = document.createElement("i");
                                i2.className = "fas fa-lock";

                               
                                
                                FirstDiv.appendChild(p);
                                FirstDiv.appendChild(p2);
                                MainDiv.appendChild(FirstDiv);
                                pSecond.appendChild(i);
                                p2Second.appendChild(i2);
                                SecondDiv.appendChild(pSecond);
                                SecondDiv.appendChild(p2Second); 
                                MainDiv.appendChild(SecondDiv);          
                                div_accordeon.appendChild(MainDiv);               
                 
                            });                           
                        }
                    } 
                    catch (error) 
                    {
                      console.log( error);
                    }
                } 
                else 
                {
                    console.error(statut);
                }
            })
        .fail(function(responseat, statut, erreur) {
            console.log(responseat.responseText);
            console.log("erreur ajax");
        });
    }

    

   
}
function Ilike()
    {

        console.log("i love this one")

    }
    
       
function chooseChat(ev)
    {

    var id_chat = ev.currentTarget.id;
    console.log("l'id de ce forum est :"+id_chat);
    forumObject.DoChat(id_chat);


    }

       
        
    


