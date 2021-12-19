

const matiere = ["francais" , "maths" , "ses", "sp","svt","geographie","histoire","anglais","espagnol"];
const couleur = ["#97acff","#FFB3A3","#A3CDFF","#c0dfdb","#8DDD71","#F1FF7E","#FFEFC1","#A3CDFF","#FFD251"];
var currentColor ="#97acff";
var currentElement = document.getElementById("SES");


function test()
{
    $("body").animate({background : "red"});

}

test();

/*
$('.matiere').mouseenter(function(hey)
{




    var element = hey.currentTarget.id;
    currentElement = document.getElementById(element)
    element = element.toLowerCase();

    for(var i = 0; i<matiere.length;i++)
        {
            if(matiere[i]==element)
            {
                currentColor = couleur[i];            
                 currentElement.animate({backgroundColor : currentColor},500,()=>
                 {

                    currentElement.style.backgroundColor = currentColor;

                 });
                 
                 
                
            }
        }   
}); 
*/



