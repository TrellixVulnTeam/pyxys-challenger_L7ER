jQuery(function($){

    // Função que controla as animações do Header
    $(window).scroll(function(e){
        e.preventDefault();

        let top = $(this).scrollTop();
        let menu = $('.menu');
        let btn = menu.children('#abreMenu');
        let header = $('.main-header');


        if(top > 200) {

            menu.animate({
                'top': '-430px'
            }, 300);
            btn.animate({
                'margin-bottom': '-40px'
            }, 300);
            header.animate({
                'height': '60px'
            }, 300);

        } else {
            menu.animate({
                'top': '-350px'
            }, 300);
            btn.animate({
                'margin-bottom': '0px'
            }, 300);
            header.animate({
                'height': '70px'
            }, 300);
        }

        menu.clearQueue();
        btn.clearQueue();
        header.clearQueue();

    });

});

