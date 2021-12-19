scroll = function() {
    $(document).ready(function() {
        $("ul.subnav").parent().append("<span></span>"); //Affiche simplement le bouton (ici représenté par une flèche) qui sert à afficher le menu déroulant lorsque le JavaScript est activé.
        $("ul.topnav li span").click(function() { //Lorsque l'on clique sur le bouton (flèche)...

            //Les événements suivants sont appliqués à la sous-navigation (menu déroulant).
            $(this).parent().find("ul.subnav").slideDown('fast').show(); //Ouverture du menu déroulant lorsque l'on clique sur le bouton

            $(this).parent().hover(function() {}, function() {
                $(this).parent().find("ul.subnav").slideUp('slow'); //Lorsque l'on survol à l'extérieur du menu déroulé, le menu déroulant remontra
            });

            //Les événements suivant s'appliquent lors du survol du bouton de la flèche.
        }).hover(function() {
            $(this).addClass("subhover"); //Lorsque l'on survol, ajout de la classe "subhover"
        }, function() { //On Hover Out
            $(this).removeClass("subhover"); //Lorsque l'on survol à l'extérieur, enlève la classe "subhover"
        });
        //Les événements suivant s'appliquent lors du survol du bouton de la flèche.
    }).hover(function() {
        $(this).addClass("subhover"); //Lorsque l'on survol, ajout de la classe "subhover"
    }, function() { //On Hover Out
        $(this).removeClass("subhover"); //Lorsque l'on survol à l'extérieur, enlève la classe "subhover"
    });


    $(document).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.experimentez').css('opacity', '0.75');
            $('.bienvenue').css('opacity', '0.75');
            $('.BamEtRachel').css('opacity', '0.5');
            if ($(this).scrollTop() > 200) {
                $('.experimentez').css('opacity', '1');
                $('.bienvenue').css('opacity', '0.50');
                $('.BamEtRachel').css('opacity', '0');
                $('.BamEtRachel').css('display', 'none');
                $('.erlenmeyer').css('display', 'block');


                $(window).scroll(function() {
                    if ($(this).scrollTop() > 100) {
                        $('.experimentez').css('opacity', '0.75');
                        $('.bienvenue').css('opacity', '0.75');
                        $('.BamEtRachel').css('opacity', '0.5');
                        if ($(this).scrollTop() > 200) {
                            $('.experimentez').css('opacity', '1');
                            $('.bienvenue').css('opacity', '0.50');
                            $('.BamEtRachel').css('opacity', '0');
                            $('.BamEtRachel').css('display', 'none');
                            $('.erlenmeyer').css('display', 'block');
                        } else {
                            $('.experimentez').css('opacity', '0.75');
                            $('.bienvenue').css('opacity', '0.75');
                            $('.BamEtRachel').css('opacity', '0.5');
                            $('.BamEtRachel').css('display', 'block');
                            $('.erlenmeyer').css('display', 'none');
                        }
                    } else {
                        $('.experimentez').css('opacity', '0.50');
                        $('.bienvenue').css('opacity', '1');
                        $('.BamEtRachel').css('opacity', '1');
                        $('.erlenmeyer').css('display', 'none');


                    }

                });
            }
        }
    });
}

presentation_mod_init = function() {
    scroll();
}