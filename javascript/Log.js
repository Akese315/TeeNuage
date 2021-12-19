
var RegisterObject
var LogObject

$( document ).ready(function() {
   
    RegisterObject = new Register();
    LogObject = new Log();
    SetWidthOnBtn();

    
});

class Log
{

    constructor()
    {

        this._form_login = document.getElementById('login');
        this._form_register =  document.getElementById('register');
        this._form_btn =  document.getElementById('btn');
        this._form_global =  document.getElementById('_form-box');
        this.informations = document.getElementById('info');
        this.log_btn = document.getElementById('log_btn');
        this.reg_btn = document.getElementById('reg_btn');

    }

    

    isPseudonyme(pseudo) 

    {
        // La 1ère étape consiste à définir l'expression régulière d'une adresse email
        var regName = new RegExp(/^(\s)*[A-Za-z]+((\s)?((\'|\-|\.)?([A-Za-z])+))*(\s)*$/, 'i');
        return regName.test(pseudo);
    }
    isName(name) 

    {
        // La 1ère étape consiste à définir l'expression régulière d'une adresse email
        var regName = new RegExp(/^(\s)*[A-Za-z]+((\s)?((\'|\-|\.)?([A-Za-z])+))*(\s)*$/, 'i');
        return regName.test(name);
    }
    isFirstname(FirstName) 

    {
        // La 1ère étape consiste à définir l'expression régulière d'une adresse email
        var regName = new RegExp(/^(\s)*[A-Za-z]+((\s)?((\'|\-|\.)?([A-Za-z])+))*(\s)*$/, 'i');
        return regName.test(FirstName);
    }
    isEmail(email) 

    {
        // La 1ère étape consiste à définir l'expression régulière d'une adresse email
        var regEmail = new RegExp(/^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$/, 'i');

        return regEmail.test(email);
    }
    isMDP(mdp) 

    {
        // La 1ère étape consiste à définir l'expression régulière d'une adresse email
        var regMDP = new RegExp(/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[&£°§#-+!*$@%_])([&£°§#-+!*$@%_\w]{8,15})$/, 'i');
        return regMDP.test(mdp);
    }


}


function RegisterButton()
{
    console.log("ok");
    $("#info").val("");
    
    LogObject._is_register = false;
    LogObject._form_login.style.left="-100%"; 
    LogObject._form_register.style.left="0%";
    LogObject._form_btn.style.width = LogObject.reg_btn.clientWidth+"px";
    LogObject._form_btn.style.left= LogObject.log_btn.clientWidth+LogObject.log_btn.clientWidth/17+"px";
    LogObject._form_register.style.display='block';
    LogObject._form_login.style.display= 'none';
}
function LoginButton()
{

     
         console.log("ok");
         $("#info").val("");
         
         LogObject._is_register = false;
         LogObject._form_login.style.left="0%";
         LogObject._form_register.style.left='100%';
         LogObject._form_btn.style.width = LogObject.log_btn.clientWidth+"px";
         LogObject._form_btn.style.left="0px";
         LogObject._form_login.style.display= 'block';
         LogObject._form_register.style.display='none';
 
     

}

function SetWidthOnBtn()
{

    LogObject._form_btn.style.width = LogObject.log_btn.clientWidth+"px";

}