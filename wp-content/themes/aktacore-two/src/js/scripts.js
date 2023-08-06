$(document).ready(function () {

    function MobMenuInit(){
        if ($(".header__mob").length){
            $( ".header__burger" ).on( "click", function() {
                $(this).toggleClass('active');
                $('.start__decoration-top').toggleClass('burger-active').css({transition: "all 1s", 'transition-delay': "0.5s"});
                setTimeout(function() {
                    $('.header__mob').fadeToggle(300);
                }, 700);
            } );
        }
    }
    MobMenuInit();

    $(".header__nav, .footer__nav").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top - 100}, 1000);
    });

    function AosStart(){

    }
    AosStart()
    function HeaderMove(){
        if ($("header").length){
            let $menu = $("header");
            $(window).scroll(function() {
                let winScrollTop = $(this).scrollTop();
                if ( winScrollTop > 100 && $menu.hasClass("default")){
                    $menu.removeClass("default").addClass("moved");
                    $('.start__decoration-top').addClass("moved");
                } else if(winScrollTop <= 100 && $menu.hasClass("moved")) {
                    $menu.removeClass("moved").addClass("default");
                } else if(winScrollTop <= 80 && $('.start__decoration-top').hasClass("moved")) {
                    $('.start__decoration-top').removeClass("moved");
                }
            });
        }
    }
    HeaderMove();

    if ($('.banner').length) {
        var swiper = new Swiper(".banner .swiper", {
            speed: 500,
            slidesPerView: 1,
            spaceBetween: 0,
            loop: 'true',
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    }

});

