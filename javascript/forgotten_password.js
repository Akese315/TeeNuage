var ForgotPasswordObject;
$('document').ready(()=>
{

    ForgotPasswordObject = new forgotpassword();


});


class forgotpassword
{

constructor()

{

this.email;
this.isEmailSent;

}


CheckRecoveryRequest()
{
    var input_email = document.getElementById("Email");
    var info_element = document.getElementById("info");
    input_email = input_email.value.trim();
    if(this.isEmail(input_email))
        {
        console.log("ok");
        this.sendRecoveryRequest(input_email);

        }
    else
        {   
        info_element.value = "Veuillez entrer un email";
        }

}
sendRecoveryRequest(email)
{
var info_element = document.getElementById("info");
    $.ajax({
        url: 'processes/forgotten_password.php',
        dataType: "text",
        method: 'post',
        data: 'Parameters=' + email
        })
    .done(function(json_response) {

        if(json_response != false)
        {
            var response = JSON.parse(json_response);
            if (response.status)
            {
                var message = document.getElementById("info");
                message.innerText = response.value;

            }
            else
            {

                message.innerText = response.error;

            }

        }


        })
    .fail(function(error)
    {

        console.log(error);
    
    })
        
    

}




isEmail(email) 

    {
        // La 1ère étape consiste à définir l'expression régulière d'une adresse email
        var regEmail = new RegExp(/^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$/, 'i');

        return regEmail.test(email);
    }



}