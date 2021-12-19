class Data_message {

    constructor(content, Forum_ID, pseudo_id, pseudo, Session_ID) 
    {
        this.Message = content;
        this.Forum_ID = Forum_ID;
        this.Pseudo_ID = pseudo_id;
        this.User_pseudo = pseudo;
        this.Session_ID = Session_ID;
    }


    is_valid() 
    {
        return (this.Message.length != 0);
    }


}
class Resquest_message {
    constructor(Forum_ID, Line) {
        this.Forum_ID = Forum_ID;
        this.Line = Line;
    }
}

var ChatObject;
class Chat {

    constructor(Forum, User_ID) 
    {
        this.number_rows = 0;
        this.Forum = Forum;
        this.User_ID = User_ID;
        
        
    }
    send() {
        var message = document.getElementById("message_textarea");
        var inputMessage = message.value.trim();
        var res = inputMessage.replace(/([\"\'])/g, function (x) { return '\\'+x; });        
        var _message = new Data_message(res, this.Forum, this.User_ID,UserObject.getPseudo(), UserObject.getSessionID());
        if (_message.is_valid()) {

            $.ajax({
                    url: 'processes/forum_add_message.php', // La ressource ciblée
                    type: 'post', // Le type de la requête HTTP.
                    dataType: 'text',
                    data: 'Parameters=' + JSON.stringify(_message)
                })
                .done(function(json_response, statut) {
                    if (json_response != 'false') {
                        try {
                            var data_received = JSON.parse(json_response);
                            if (data_received['status'] == 'true') {}
                            message.value = "";
                        } catch (error) {
                            console.log(json_response);
                        }
                    } else {
                        console.log("Sending message failed");
                    }
                })
                .fail(function(resultat, statut, erreur) {
                    console.log(resultat);
                });
        }
    }

    static VerificationObject(forumObject)
    {
        var erreur = true;
        if (forumObject == null || forumObject == undefined)
        {
            erreur = false;
        }
        else if (forumObject.Forum_ID == null || forumObject.Forum_ID == undefined)
        {
            erreur = false;
        }
        else if (forumObject.User_ID == null || forumObject.User_ID == undefined)
        {

            erreur = false;

        }
        return erreur;

    }

    static getCookieForum()
    {
    try{
        console.log(UserObject.readCookie("forum"));
        var Forum_info = UserObject.readCookie("forum");
        Forum_info = JSON.parse(Forum_info);
        if (Chat.VerificationObject(Forum_info))
        {

            ChatObject = new Chat(Forum_info.Forum_ID,Forum_info.User_ID, Forum_info.Pseudo);
            console.log(ChatObject);

        }
        else
        {
            document.location.href ="liste_tchat.php";
        }
    }catch(error)
    {
        console.log(error);
    }
        
       
    }

    setTimer()
    {
        setInterval( this.getMessageList,1000,this);
    }

    getMessageList(vobject) {
        console.log('ping');
        var _request_message = new Resquest_message(vobject.Forum, parseInt(vobject.number_rows,10));
        $.ajax({
                url: 'processes/forum_check_message.php',
                dataType: "text",
                method: 'post',
                data: 'Parameters=' + JSON.stringify(_request_message)
            })
            .done(function(json_response) {
                if (json_response != 'false') {
                    try {
                        var response = JSON.parse(json_response);
                        if (response.status) {
                            var forum = document.getElementById('chat_area');       
                            
                            var id = vobject.User_ID;
                            //Content	Pseudo_ID	Forum_ID	ID	Date	
                            
                            $(response.value).each(function(index, emp) {
                                var div = document.createElement('div');
                                div.setAttribute('id' , emp.ID);
                                var base_class;
                                if (emp.Pseudo_ID == id) {
                                    base_class = 'Mymessage';
                                } else {
                                    base_class = 'message';
                                }
                               

                               
                                div.setAttribute('class', base_class);
                                td = document.createElement('span');   
                                td.setAttribute('class', 'pseudo');                       
                                td.textContent = emp.Pseudo;
                                div.appendChild(td);
                                td = document.createElement('br');   
                                div.appendChild(td);
                                td = document.createElement('br');   
                                div.appendChild(td);
                                td = document.createElement('p');
                                td.setAttribute('class', "content");
                                td.textContent = emp.Content;
                                div.appendChild(td);
                                
                                var td = document.createElement('p');   
                                td.setAttribute('class', "heure");                            
                                td.textContent = emp.Date;
                                div.appendChild(td);
                                td = document.createElement('br');   
                                div.appendChild(td);
                                

                                forum.appendChild(div);
                                document.location.href="#"+emp.ID;
                                if (parseInt(vobject.number_rows,10) < parseInt(emp.ID,10))
                                vobject.number_rows = emp.ID;
                            });
                        }
                    } catch (error) {
                       console.log(error);
                    }
                } else {
                    console.log("Getting messages failed");
                }
            })
            .fail(function(err) {
                alert(err);
            });
    }
}

$("document").ready(()=>
{ 
    user.User_INIT();
    Chat.getCookieForum();
    ChatObject.setTimer();   
    
});

    





