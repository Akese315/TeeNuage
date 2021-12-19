var profilObject;
$("document").ready(()=>
{
        user.User_INIT();
        profilObject = new profil(
        UserObject.getPseudo(),
        UserObject.getNom(),
        UserObject.getPrenom(),
        UserObject.getAge(),
        UserObject.getEmail()
                                    );
            profilObject.fieldTEXT();
         profilObject.HelloPseudo();
         

});


class profil
{

   

    constructor(pseudo,nom,prenom,age,email)
    {

        this.pseudo = pseudo;
        this.nom = nom;
        this.prenom = prenom;
        this.age = age;
        this.email = email;


    }


    changeMDP()
    {



    }

    changePseudo()
    {



    }

    logOut()
    {
        UserObject.eraseCookie("forum");
        UserObject.eraseCookie("user");        
        document.location.href="index.php";

    }

    HelloPseudo()
    {

        var h1 = document.getElementById("HelloPseudo");
        h1.innerText = "Bonjour "+ this.pseudo;

    }

    fieldTEXT()
    {

    
       document.getElementById('name').defaultValue = UserObject.getNom();
       document.getElementById('email').defaultValue = UserObject.getEmail();
       document.getElementById('first-name').defaultValue = UserObject.getPrenom();
       document.getElementById('age').defaultValue = UserObject.getAge();
    }
}

