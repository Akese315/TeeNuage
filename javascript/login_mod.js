class dataRegister 
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

    isPseudonyme() 

    {
        // La 1ère étape consiste à définir l'expression régulière d'une adresse email
        var regName = new RegExp(/^(\s)*[A-Za-z]+((\s)?((\'|\-|\.)?([A-Za-z])+))*(\s)*$/, 'i');
        return regName.test(this.pseudo_register);
    }
    isName() 
    
    {
        // La 1ère étape consiste à définir l'expression régulière d'une adresse email
        var regName = new RegExp(/^(\s)*[A-Za-z]+((\s)?((\'|\-|\.)?([A-Za-z])+))*(\s)*$/, 'i');
        return regName.test(this.nom_register);
    }
    isFirstname() 
    
    {
        // La 1ère étape consiste à définir l'expression régulière d'une adresse email
        var regName = new RegExp(/^(\s)*[A-Za-z]+((\s)?((\'|\-|\.)?([A-Za-z])+))*(\s)*$/, 'i');
        return regName.test(this.prenom_register);
    }
    isEmail() 
    
    {
        // La 1ère étape consiste à définir l'expression régulière d'une adresse email
        var regEmail = new RegExp(/^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$/, 'i');

        return regEmail.test(this.email_register);
    }
    isMDP() 
    
    {
        // La 1ère étape consiste à définir l'expression régulière d'une adresse email
        var regMDP = new RegExp(/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/, 'i');
        return regMDP.test(this.mdp_register);
    }
    check() 
    
    {
        var result = "";
        if (!this.isPseudonyme())
            result = result + "Pseudonyme invalid</p>";
        if (!this.isEmail())
            result = result + "<p>email invalid</p>";
        if (!this.isName())
            result = result + "<p>Nom invalid</p>";
        if (!this.isFirstname())
            result = result + "<p>prenom invalid</p>";
        if (!this.isMDP())
            result = result + "<p>MDP invalid</p>";
        return result;
    }

}
// fin de la classe DayaRegister


class data_login 
{

    constructor() 
    {

        this.email_login = "";
        this.mdp_login = "";

    }
    isEmail() 

    {
        // La 1ère étape consiste à définir l'expression régulière d'une adresse email
        var regEmail = new RegExp(/^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$/, 'i');

        return regEmail.test(this.email_login);
    }

    isMDP() 
    {

        // La 1ère étape consiste à définir l'expression régulière d'une adresse email
        var regMDP = new RegExp(/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/, 'i');
        return regMDP.test(this.mdp_login);
        //return true;

    }
    check() 
    {

        var result = "";
        if (!this.isEmail())
            result = result + "<p>email invalid</p>";
        if (!this.isMDP())
            result = result + "<p>MDP invalid</p>";
        return result;

    }

}

class User 
{

    constructor() 
    {

        this._is_register = false;
        this._id = 0;
        this._pseudo = "";
        this._form_login = document.getElementById('login');
        this._form_register =  document.getElementById('register');
        this._form_btn =  document.getElementById('btn');
        this._form_global =  document.getElementById('_form-box');

    }
    getId()
     {

        return this._id;
    }

    setId(id) 
    {
        this._id = id;
    }
    setRegistred() 
    {

        this._is_register = true;
        $("#pseudo").text(this._pseudo);
        $("#is_locked").css('display', "inline-block");
        $("#is_unlocked").css('display', "none");
        console.log("register " + $("#pseudo").val() + ":" + this._pseudo)

    }
    setUnregistred() 
    {

        console.log("unregister " + $("#pseudo").val())
        this._is_register = false;
        $("#pseudo").text("");
        $("#is_locked").css("display", "none");
        $("#is_unlocked").css('display', "inline-block");

    }
    setPseudo(pseudo) 
    {

        this._pseudo = pseudo;

    }

    createCookie(name, value, days) 
    {
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            var expires = "; expires=" + date.toGMTString();
        } else var expires = "";
        document.cookie = name + "=" + value + expires + "; path=/";
    }

    readCookie(name) 
    {

        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;

    }

    eraseCookie(name) 
    {

        createCookie(name, "", -1);

    }
    doLogin() 
    {

        console.log("ok");
        $("#info").val("");
        this._form_global.style.height='400px';
        this._is_register = false;
        this._form_login.style.left="50px";
        this._form_register.style.left='450px';
        this._form_btn.style.left="0px";
        this._form_login.style.display= 'block';
        this._form_register.style.display='none';

    }

    doRegister()
    {
        console.log("ok");
        $("#info").val("");
        this._form_global.style.height='700px';
        this._is_register = false;
        this._form_login.style.left="-300px"; 
        this._form_register.style.left="50px";
        this._form_btn.style.left="110px";
        this._form_register.style.display='block';
        this._form_login.style.display= 'none';
    }
    doInscription() 
    {
        var data_inscription = new dataRegister();
        data_inscription.pseudo_register = $("#pseudo_register").val().trim();
        data_inscription.email_register = $("#email_register").val().trim();
        data_inscription.mdp_register = $("#mdp_register").val().trim();
        data_inscription.age_register = $("#age_register").val().trim();
        data_inscription.nom_register = $("#nom_register").val().trim();
        data_inscription.prenom_register = $("#prenom_register").val().trim();
        data_inscription.legal_register = $("#legal_register").val();
        var error_message = data_inscription.check();
        if (error_message.length == 0) {
            var hash = CryptoJS.SHA256(data_inscription.mdp_register);
            data_inscription.mdp_register = hash.toString(CryptoJS.enc.Hex)
            $.ajax({
                    url: 'processes/login_register.php',
                    dataType: "text",
                    method: 'post',
                    data: 'Parameters=' + JSON.stringify(data_inscription)
                })
                .done(function(json_response) {
                    if (json_response != 'false') {
                        try {
                            //
                            var response = JSON.parse(json_response);
                            if (response.status) {
                                var _application = Application.getApplication();
                                _application.getUser().setId(response.value.user_id);
                                _application.getUser().doLogin();
                                $("#email_login").val($("#email_register").val().trim());
                                var data_sigin = new data_login();
                                data_sigin.email_login = $("#email_register").val().trim();
                                data_sigin.mdp_login = $("#mdp_register").val().trim();
                                _application.getUser().createCookie("user", JSON.stringify(Data_sign), 30); 
                            }
                        } catch (error) {
                            Application.getApplication().copyDebug(error.message);
                        }
                    } else {
                        $("#info").val(response.error);
                    }
                })
                .fail(function(err) {
                    console.log(err);
                });
        } else
            $('#info').val(error_message);
    }

    doConnection()

    {

        this.setUnregistred();
        var data_sigin = new data_login();
        data_sigin.email_login = $("#email_login").val().trim();
        data_sigin.mdp_login = $("#mdp_login").val().trim();
        var error_message = data_sigin.check();
        if (error_message.length == 0) {
            var hash = CryptoJS.SHA256(data_sigin.mdp_login);
            data_sigin.mdp_login = hash.toString(CryptoJS.enc.Hex);
            this.Connection(data_sigin);
        } else
            $('#info').val(error_message);
    }


    Connection(Data_sign)
    
    {
        $.ajax({
        url: 'processes/login_signin.php',
        dataType: "text",
        method: 'post',
        data: 'Parameters=' + JSON.stringify(Data_sign)
        })
        .done(function(json_response) {
            if (json_response != 'false') {
                try {
                    var response = JSON.parse(json_response);
                    if (response.status) {
                        var _application = Application.getApplication();
                        _application.getUser().setId(response.value.user_id);
                        _application.getUser().setPseudo(response.value.pseudo);
                        _application.getUser().setRegistred();
                        var data_sigin = new data_login();
                        data_sigin.email_login = $("#email_login").val().trim();
                        data_sigin.mdp_login = $("#mdp_login").val().trim();
                        _application.getUser().createCookie("user", JSON.stringify(Data_sign), 30); 
                        _application.getModule("index_mod");
                    } else {
                        Application.getApplication().getUser().setUnregistred();
                        Application.getApplication().copyDebug(response.error);
                        $("#info").val(response.error);
                    }
                } catch (error) {
                    Application.getApplication().copyDebug(error.message);
                }
            }
        })
        .fail(function(err) {
            console.log(err);
        });
      
    }
    
    ConnectionByCookie()

    {
        var user_infos = this.readCookie("user")
        if(user_infos!=null)
        {   
            console.log(user_infos.mdp_login);
           this.Connection(user_infos);
            
        }    
    }

}



login_mod_init = function() 
{
  if(Application.getApplication().getUser()==null)
  {  
  Application.getApplication().setUser(new User());  
  }
  Application.getApplication().getUser().ConnectionByCookie();
  if (Application.getApplication().getUser().is_register)
  {
 Application.getApplication().getUser().doRegister();
  }
       
    else
    {
       Application.getApplication().getUser().doLogin(); 
    }
        
 
}

 