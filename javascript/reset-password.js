var ResetObject;
var result;


class reset
{

    constructor()
    {

        this.Password = undefined;
        this.Email = UserObject.getEmail();
        this.Confirmation = false;
        this.Token = undefined;

    }


    CheckNewPassword()
    {
        
        this.Password = $("#password1").val().trim();
        var passwordConfirmation= $("#password2").val().trim();
        
        this.tokenSplit();

        if (!this.isMDP(this.Password))
        {
            console.log("erreurpass")
            
        }
        else if(this.Password === passwordConfirmation)
        {

            this.sendNewPassword(this.Password);

        }
        


    }
    isMDP(mdp) 

    {
        
        var regMDP = new RegExp(/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/, 'i');
        return regMDP.test(mdp);
    }

    static initReset()
    {

        ResetObject = new reset();
        ResetObject.CheckNewPassword();

    }


    sendNewPassword()
    {

        var hash = CryptoJS.SHA256(this.Password);
        this.Password = hash.toString(CryptoJS.enc.Hex);

        $.ajax({
            url: 'processes/reset-password.php',
            dataType: "text",
            method: 'post',
            data: 'Parameters=' + JSON.stringify(ResetObject)
            })
        .done(function(json_response) 
        {
            var message = document.getElementById("Message");
            try
            {
                var response = JSON.parse(json_response);
                if(response.status)
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
                        var time = 5;
                        var compteur =  setInterval(() => {
                        time -= 1;
                          message.innerText = "Redirection dans : " +time;
                        }, 1000);

                        setTimeout(() => {
                         clearInterval(compteur);
                         document.location.href="index.php"; 
                        }, 5000);    
                        
              
                }
                else
                {
                    var message = document.getElementById("Message");
                   message.innerText = response.error;
                }}

            catch(error)
            {

                console.log(error);
            
            }
            
        });

    }  

    tokenSplit()
    {
        let url = document.location.href;
       
        url =url.split('validator=');
        this.Token = url[1];     
        


    

    }


}