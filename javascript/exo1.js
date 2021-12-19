function function1()
{

    var nombre_romain = "XIV";
    var tableau = nombre_romain.split('');
    var element=tableau.pop();
    tableau.unshift(element)
    var chiffre_romain =[1,5,10,50,100,500,1000];
    var lettre_romaine = ["I","V","X","L","C","D","M"];
    var nouveau_tableau = [];
    var resultat = 0;
    for(var x=0; x<tableau.length;x++)
    {
       for(var i=0;i < chiffre_romain.length;i++)
       {
            if(tableau[x] == lettre_romaine[i])
            {
                nouveau_tableau.push(chiffre_romain[i]);
                break;
            }
    
       }
    
       
    
    }
    
    for(var t=0; t <nouveau_tableau.length; t++)

    {
        if(t != nouveau_tableau.length-1)
        {
            if(nouveau_tableau[t]>nouveau_tableau[t+1]||nouveau_tableau[t]==nouveau_tableau[t+1])
            {
                resultat +=  nouveau_tableau[t];
            }
            else
            {
        
                resultat -=  nouveau_tableau[t];
        
            }
        
           
        
       
        }
        else
        {
            resultat += nouveau_tableau[t];
        }
     }     
    
    console.log(resultat)

}

