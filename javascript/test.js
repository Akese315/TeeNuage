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
    bhr.css('display', 'none');
    bhr.animate({width : 0+"px"},300);  
   
    
   
    }
    );

    var isClick = false;
  $('.burger').click(()=>
  {
    if(isClick == false)
    {
       $('nav .links').animate({left : "-50%"},500);
       isClick = true;
    }else
    {

      $('nav .links').animate({left : "0%"},500);
      isClick = false;
    }
   

  });