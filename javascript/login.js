class login 
{

    constructor()
    {

        
        this.email ="";
        this.mdp ="";
       

    }


    

    

    ConnectionByCookie()

    {
        var user_infos = UserObject.readCookie("user");
        user_infos = JSON.parse(user_infos);
        if(user_infos!=null)
        {   
            UserObject.setUserId(user_infos.user_id);
            UserObject.setEmail(user_infos.email);
            UserObject.setNom(user_infos.nom);
            UserObject.setAge(user_infos.age);
            UserObject.setPrenom(user_infos.prenom);
            UserObject.setPseudo(user_infos.pseudo);
            UserObject.setSessionID(user_infos.Session_ID)
            console.log(UserObject);
                       
        }
        
    }

    

    check() 
    {

        var result = "";
        if (!LogObject.isEmail(this.email))
            result = result + "<p>email invalid</p>";
        if (!LogObject.isMDP(this.mdp))
            result = result + "<p>MDP invalid</p>";
        return result;

    }

    
    
    

    Connection(LoginObject)
    
    {
        $.ajax({
        url: 'processes/login_signin.php',
        dataType: "text",
        method: 'post',
        data: 'Parameters=' + JSON.stringify(LoginObject)
        })
        .done(function(json_response) {
            if (json_response != 'false') {
                try {
                   
                    var response = JSON.parse(json_response);
                     console.log("done2");
                    if (response.status) 
                    {
                        UserObject.setUserId(response.value.user_id);
                        UserObject.setEmail(response.value.email);
                        UserObject.setNom(response.value.nom);
                        UserObject.setAge(response.value.age);
                        UserObject.setPrenom(response.value.prenom);
                        UserObject.setPseudo(response.value.pseudo);
                        UserObject.setSessionID(response.value.Session_ID)
                        console.log(UserObject);
                        
                        UserObject.eraseCookie("user");
                        UserObject.createCookie("user", JSON.stringify(UserObject), 30);
                        document.location.href="index.php";   
                    } 
                    else 
                    {
                        
                        console.log(response.error);
                        $("#info").val(response.error);
                    }
                } catch (error) {
                    console.log(error);
                }
            }
        })
        .fail(function(err) {
            console.log(err);
        });
      
    }




}


function doConnection()

    {

        
        
        LoginObject.email = $("#email_login").val().trim();
        LoginObject.mdp = $("#mdp_login").val().trim();
        var error_message = LoginObject.check();
        if (error_message.length == 0) {
            var hash = CryptoJS.SHA256(LoginObject.mdp);
            LoginObject.mdp = hash.toString(CryptoJS.enc.Hex);
            console.log("done")
            LoginObject.Connection(LoginObject);

        } else
            console.log(error_message);
    }





















