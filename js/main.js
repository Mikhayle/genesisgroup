$(document).ready(function () {

    //Плавный скролл
        $(function(){
            $("a[href^='#']").click(function(){
                var _href = $(this).attr("href");
                $("html, body").animate({scrollTop: $(_href).offset().top+"px"}, 800);
                return false;
            });
        });

        $(`.header__burger`).click(function (event) {
            $(`.header__burger, .header__menu`).toggleClass(`active`);            
        });
    
        if ($(window).width() < 992) {
            $(`.nav__link-js`).click(function (event) {
                $(`.header__burger, .header__menu`).toggleClass(`active`);
            });
        };

        if ($(window).scrollTop() > 40 && $(window).width() < 992) {
            $('.btn_up').css('display', 'block');
        };
});