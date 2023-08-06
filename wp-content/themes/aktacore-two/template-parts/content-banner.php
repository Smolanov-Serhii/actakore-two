<?php
$post_id = get_the_ID();
?>
<section class="banner">
<?php
    if( have_rows('slider') ):
        ?>
        <div class="banner__container swiper">
            <div class="swiper-wrapper">
                <?php
                while( have_rows('slider') ) : the_row();
                    $sub_image = get_sub_field('izobrazhenie_slajda');
                    ?>
                    <div class="swiper-slide">
                        <img src="<?php echo $sub_image?>">
                    </div>
                    <?php
                endwhile;
                ?>
            </div>
        </div>
        <div class="banner__content">
            <div class="left padding-left" data-aos="fade-right" data-aos-delay="100">
                <h2 class="banner__title"><?php the_field('tekst_sleva', $post_id)?></h2>
            </div>
            <div class="right padding-right" data-aos="fade-left" data-aos-delay="300">
                <h2 class="banner__title"><?php the_field('tekst_sprava', $post_id)?>
                    <div class="banner__desc"><?php the_field('opisanie', $post_id)?></div>
                </h2>
            </div>
        </div>
    <?php
    endif;
?>
</section>
