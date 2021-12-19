class Register
{

    constructor()
    {
        
        this.email_register = "";
        this.mdp_register = "";
        this.age_register = "";
        this.nom_register = "";
        this.prenom_register = "";
        this.legal_register = "";
        this.pseudo_register = "";
    }


    check() 
    
    {
        var result = "";
        if (!LogObject.isPseudonyme(this.pseudo_register))
            result = result + "Pseudonyme invalid</p>";
        if (!LogObject.isEmail(this.email_register))
            result = result + "<p>email invalid</p>";
        if (!LogObject.isName(this.nom_register))
            result = result + "<p>Nom invalid</p>";
        if (!LogObject.isFirstname(this.prenom_register))
            result = result + "<p>prenom invalid</p>";
        if (!LogObject.isMDP(this.mdp_register))
            result = result + "<p>MDP invalid</p>";
        return result;
    }
    


    Inscription(RegisterObject) 
    {
      console.log(RegisterObject);
            $.ajax({
                    url: 'processes/login_register.php',
                    dataType: "text",
                    method: 'post',
                    data: 'Parameters=' + JSON.stringify(RegisterObject)
                    })
            .done(function(json_response) 
            {
                if (json_response != 'false') 
                {
                    try 
                    {   
                        
                        var response = JSON.parse(json_response);
                        console.log(response.value);
                        if (response.status) 
                        {                           
                            UserObject.setEmail(response.email);
                            UserObject.setNom(response.nom);
                            UserObject.setAge(response.age);
                            UserObject.setPrenom(response.prenom);
                            UserObject.setPseudo(response.pseudo);
                            console.log("done2");                            
                            UserObject.createCookie("user", JSON.stringify(UserObject), 30); 
                            document.location.href ="https://www.teenuage.fun";                            
                        }
                    } 
                    catch (error) 
                    {
                        console.log(error);
                        LogObject.innerHTML = "<p style = 'color:red'>"+error+"</p>"      
                    }
                } 
                else 
                {
                   console.log(response.error);
                   LogObject.innerHTML = "<p style = 'color:red'>"+response.error+"</p>"      
                }
            })
            .fail(function(err) 
            {                
                LogObject.innerHTML = "<p style = 'color:red'>"+err+"</p>"      
                console.log(err);
            });

       
    }


}

    

function doInscription()
{

  
    RegisterObject.pseudo_register = $("#pseudo_register").val().trim();
    RegisterObject.email_register = $("#email_register").val().trim();
    RegisterObject.mdp_register = $("#mdp_register").val().trim();
    RegisterObject.age_register = $("#age_register").val().trim();
    RegisterObject.nom_register = $("#nom_register").val().trim();
    RegisterObject.prenom_register = $("#prenom_register").val().trim();
    RegisterObject.legal_register = $("#legal_register").val();
    var error_message = RegisterObject.check();
    if (error_message.length == 0) {
        var hash = CryptoJS.SHA256(RegisterObject.mdp_register);
        RegisterObject.mdp_register = hash.toString(CryptoJS.enc.Hex)
        RegisterObject.Inscription(RegisterObject);
    }
     else
    {
        document.getElementById('info').innerHTML = error_message;        
        console.log(error_message);
    }
    
}



