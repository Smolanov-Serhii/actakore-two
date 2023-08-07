$(document).ready(function () {

    function MobMenuInit(){
        if ($(".header__burger").length){
            $( ".header__burger" ).on( "click", function() {
                $(this).toggleClass('active');
                $('.header').toggleClass('active-menu');
                $('.header__nav').toggleClass('active');
            } );

            const div = document.querySelector( '.header');

            document.addEventListener( 'click', (e) => {
                const withinBoundaries = e.composedPath().includes(div);

                if ( ! withinBoundaries ) {
                    $('.header__burger').removeClass('active');
                    $('.header').removeClass('active-menu');
                    $('.header__nav').removeClass('active');
                }
            })
        }
    }
    MobMenuInit();

    $(".header__nav, .footer__nav").on("click","a", function (event) {
        event.preventDefault();
        $('.header__burger').removeClass('active');
        $('.header').removeClass('active-menu');
        $('.header__nav').removeClass('active');
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

