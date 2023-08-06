<?php
$post_id = get_the_ID();
?>
<section class="partners" id="partners">
    <div class="partners__container main-container">
        <div class="left-part" data-aos="fade-right" data-aos-delay="100">
            <h2 class="partners__title section-title">
                <?php the_field('zagolovok_bloka_partnyory', $post_id)?>
            </h2>
        </div>
        <div class="right-part" data-aos="fade-left" data-aos-delay="300">
            <?php
            if( have_rows('partnyory') ):
                ?>
                <div class="partners__list">
                    <?php
                    while( have_rows('partnyory') ) : the_row();
                        $icon = get_sub_field('logotip_partnyora');
                        ?>
                        <div class="partners__item-image">
                            <img src="<?php echo $icon?>">
                        </div>
                    <?php
                    endwhile;
                    ?>
                </div>
            <?php
            endif;
            ?>
        </div>
    </div>
</section>
