$(document).ready(function(){

var taille_window = 500+ $( window).height();
$('body').css({height : taille_window + "px"});
console.log("la taille de la fenêtre est de " +taille_window + " px");
});

/*scroll = function (){

  
    $(document).ready(function (){

      
  

      $(document).scroll(function(){
        if($(this).scrollTop() > 100){
          $('.experimentez').css('opacity','0.75');
          $('.bienvenue').css('opacity','0.75');
          $('.BamEtRachel').css('opacity','0.5');
          if($(this).scrollTop() >200){
          $('.experimentez').css('opacity','1');
          $('.bienvenue').css('opacity','0.50');
          $('.BamEtRachel').css('opacity','0');
          $('.BamEtRachel').css('display','none');
          $('.erlenmeyer').css('display','block');
          if($(this).scrollTop() >300){
            $('.revisez').css('opacity','1');
            $('.bienvenue').css('opacity','0.50');
            $('.experimentez').css('opacity','0.5');
            $('.erlenmeyer').css('display','none');
            $('.bam_learning').css('display','block');
          }else{
            $('.revisez').css('opacity','0.5');
            $('.bienvenue').css('opacity','0.75');
            $('.bam_learning').css('display','none');
            $('.erlenmeyer').css('display','block');
          }
         

        
          }
          else {
            $('.experimentez').css('opacity','0.75');
            $('.bienvenue').css('opacity','0.75');
            $('.BamEtRachel').css('opacity','0.5');
            $('.BamEtRachel').css('display','block');
            $('.erlenmeyer').css('display','none');
          }
        }else{
          $('.experimentez').css('opacity','0.50');
          $('.bienvenue').css('opacity','1');
          $('.BamEtRachel').css('opacity','1');                                
            $('.erlenmeyer').css('display','none');
         
          
        }


      });
    });                                               
     
    
     
}

*/

scroll();