<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aktacore-two
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js" defer></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<script>
    window.onload = function () {
        document.body.classList.add('loaded_hiding');
        window.setTimeout(function () {
            document.body.classList.add('loaded');
            document.body.classList.remove('loaded_hiding');
            AOS.init({
                // Global settings:
                disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
                startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
                initClassName: 'aos-init', // class applied after initialization
                animatedClassName: 'aos-animate', // class applied on animation
                useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
                disableMutationObserver: false, // disables automatic mutations' detections (advanced)
                debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
                throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
                // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
                offset: 120, // offset (in px) from the original trigger point
                delay: 0, // values from 0 to 3000, with step 50ms
                duration: 1000, // values from 0 to 3000, with step 50ms
                easing: 'ease', // default easing for AOS animations
                once: true, // whether animation should happen only once - while scrolling down
                mirror: false, // whether elements should animate out while scrolling past them
                anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

            });
        }, 500);
    }
</script>
<body>
    <div class="preloader">
        <div class="preloader__row">
            <div class="preloader__item"></div>
            <div class="preloader__item"></div>
        </div>
    </div>
	<header class="header default">
        <div class="header__container main-container">
            <div class="header__logo">
                <svg width="50" height="36" viewBox="0 0 50 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M42.4471 36H50L33.6693 2.35539C32.9676 0.910037 31.5514 0 30.0077 0H22.4547L27.3412 10.0639C28.0174 11.4424 27.4943 13.142 26.1674 13.8513C24.8405 14.5606 23.2202 14.0119 22.5568 12.6201C21.8551 11.1747 20.4389 10.2647 18.8951 10.2647H11.3422L18.6527 25.3204C19.3289 26.7123 18.8058 28.4119 17.479 29.1212C16.1521 29.8305 14.5318 29.2818 13.8556 27.89L11.2146 22.4431C10.5129 20.9978 9.09671 20.0877 7.55295 20.0877H0L6.58331 33.6312C7.28502 35.0766 8.7012 35.9866 10.245 35.9866H17.7979L17.3769 35.1033C16.7007 33.7115 17.2238 32.0119 18.5507 31.3026C19.8775 30.5933 21.4978 31.142 22.174 32.5338L22.7099 33.6312C23.4116 35.0766 24.8278 35.9866 26.3715 35.9866H33.9245L26.0653 19.8201C25.3891 18.4416 25.9122 16.742 27.2391 16.0327C28.566 15.3234 30.1863 15.8721 30.8497 17.2639L38.7982 33.6312C39.4999 35.0766 40.916 35.9866 42.4598 35.9866L42.4471 36Z" fill="white"/>
                </svg>
            </div>
            <nav class="header__nav">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu',
                        'menu_id'        => 'main-menu',
                    )
                );
                ?>
            </nav>
            <div class="header__language">
                <?php
                qtranxf_generateLanguageSelectCode('short');
                ?>
            </div>
        </div>
	</header>
