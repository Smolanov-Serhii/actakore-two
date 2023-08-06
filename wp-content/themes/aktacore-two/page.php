<?php
/**
Template Name: Главная
 */


get_header();
?>
	<main id="main" class="main">
        <?php get_template_part( 'template-parts/content', 'banner' ); ?>
        <?php get_template_part( 'template-parts/content', 'about' ); ?>
        <?php get_template_part( 'template-parts/content', 'products' ); ?>
        <?php get_template_part( 'template-parts/content', 'rules' ); ?>
        <?php get_template_part( 'template-parts/content', 'partners' ); ?>
        <?php get_template_part( 'template-parts/content', 'contacts' ); ?>
	</main>
<?php

get_footer();
