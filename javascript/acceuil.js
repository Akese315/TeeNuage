
var UserObject;
var LoginObject; 
var isClick = false;
var NavFade = false;

 $(document).ready(()=> 
 {
   googleAnalytics();
   user.User_INIT();
   adaptscreen();
   bannermoveout();
 });
 


var taille_window = 1920;

    function bannermoveout()
    {

      var curentY = 0;
    var y;
    
    var nav = $("#navigation");
    taille = nav.offsetHeight;
    window.addEventListener('scroll', ()=>
    {
     
      if(window.scrollY < curentY)
      {
        if(NavFade == true)
        {

          nav.removeClass("nav_out").addClass("nav_in");
        
        curentY = window.scrollY;
        NavFade = false
        }
        
       
      }
     if(window.scrollY > curentY)
      {
        if(NavFade == false)
        {

          nav.removeClass("nav_in").addClass("nav_out");
       
        curentY = window.scrollY;
        NavFade = true;
        }
        
       }
     curentY = window.scrollY;

    });

    }
    
    

  


function adaptscreen(){
  $(window).resize(function()
   {
 
     taille_window =  $(window).width();
     taille_marge = (taille_window/1920*10)          
      $('.options').css({'margin-left' :  taille_marge+'px','margin-right' :  taille_marge+'px'});     
     if(typeof LogObject != "undefined")
     {

      SetWidthOnBtn();

     }
      
     
 
 
   });
}
  
 


$('nav .links li a').mouseenter(function ()
{
  var taille = $(this).width();
  const Pbalise = $(this).parent();  
  var bhr = Pbalise.children('hr').first();
  bhr.css('display', 'block');
  bhr.animate({width :  taille+"px"},300);
  console.log("hey")
});

    

$('nav .links li ').mouseleave(function (){

 
  var bhr = $(this).children('hr').first();  
  bhr.animate({width : 0+"px"},300,()=>
  {
  bhr.css('display', 'none');
  
});  
 
  
 
  }
  );

  
$('.burger').click(()=>
{
  if(isClick == false)
  {
     $('nav .links').animate({left : "-50%"},500);
    
     setTimeout(500);
     isClick = true;
     NavFade = null;
  }else
  {

    $('nav .links').animate({left : "0%"},500);    
  
    setTimeout(500);
    isClick = false;
    NavFade= false;
  }
 

});

function scrollFunction(idElement)
{

 var targetElement = document.getElementById(idElement);
 $('html,body').animate({scrollTop : targetElement.offsetTop}, "slow");


}






 function googleAnalytics()
 { 
  
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'UA-178389915-1');
 
  

 }


 
 
  
 
 



     
         


    
  



