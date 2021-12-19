class user
{

    

        user_id = undefined;
        email = undefined;
        pseudo = undefined;
        age = undefined;
        nom = undefined;
        prenom = undefined;
        Session_ID = undefined;

    

    setUserId(userId)
    {

        this.user_id = userId;

    }

    setSessionID(Session_ID)
    {

        this.Session_ID = Session_ID;

    }

    setEmail(email)
    {

        this.email = email;

    }
    setAge(age)
    {

        this.age = age;

    }
    setPseudo(pseudo)
    {

        this.pseudo = pseudo;

    }
    setNom(nom)
    {

        this.nom = nom;

    }
    setPrenom(prenom)
    {

        this.prenom = prenom;

    }
    getSessionID()
    {

       return this.Session_ID;

    }
    
    getUserId()
    {
        
        return this.user_id;

    }

    getEmail()
    {

        return this.email; 

    }
    getAge()
    {
        return this.age; 
    }
    getPseudo()
    {
        return this.pseudo; 
    }
    getNom()
    {
        return this.nom; 
    }
    getPrenom()
    {
        return this.prenom; 
    }

    setPseudoToLoginButton()
    {

         var changeTextOnBaliseLogon = document.getElementById("setpseudoOnBalise");
         var LogoProfil = document.getElementById("logElement");

        if(this.pseudo != null || this.pseudo != undefined)
        {           
            
            changeTextOnBaliseLogon.innerText = this.pseudo;
            changeTextOnBaliseLogon.href = "./profil.php";
        }
        else
        {

            
            changeTextOnBaliseLogon.innerText = "Se connecter";
            LogoProfil.innerHTML = "<p>Se connecter</p>"
            logElement.href = "./Log.php";
            changeTextOnBaliseLogon.href = "./Log.php";


        }
        

    }

    createCookie(nom, valeur, temps) 
    {
        if (temps) {
            var date = new Date();
            date.setTime(date.getTime() + (temps * 24 * 60 * 60 * 1000));
            var expires = "; expires=" + date.toGMTString();
        } else var expires = "";
        document.cookie = nom + "=" + valeur + expires + "; path=/";
    }

    eraseCookie(nom) 
    {

        this.createCookie(nom, "", -1);

    }

    cookieBanner()
    {
        const cookieContainer = document.getElementById("cookie-container");
        const cookieButton = document.getElementById("cookie-btn");
        
        cookieButton.addEventListener("click", ()=> {
        cookieContainer.classList.remove("active");
        localStorage.setItem("cookieBannerDisplayed", "true");
        });     
        
        
        
            setTimeout(function() {
          if (!localStorage.getItem("cookieBannerDisplayed")) {
            cookieContainer.classList.add("active");
          }
        }, 2000);

    }
    
 

    readCookie(nom) 
    {

        var nameEQ = nom + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;

    

    }


    static User_INIT()
  {
      if (UserObject == undefined && LoginObject == undefined)
      {
        UserObject = new user();
        LoginObject = new login();           
        LoginObject.ConnectionByCookie(); 
        UserObject.setPseudoToLoginButton();
        UserObject.cookieBanner();
      }
    
  }

  check_ID()
      {

        $.ajax({
            url: 'processes/Check_ID.php', // La ressource ciblée
            type: 'post', // Le type de la requête HTTP.
            dataType: 'text',
            data: 'Parameters=' + JSON.stringify(ChatObject)
        })
        .done(function(json_response)
        {
            try
            {
                    var response = JSON.parse(json_response);
                    return response;
            }
            catch(error)
            {
                console.log(error);
            }
        });
      }  
}

