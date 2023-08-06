<?php
$post_id = get_the_ID();
?>
<section class="products" id="products">
    <div class="products__container main-container">
        <h2 class="products__title section-title"  data-aos="fade-up" data-aos-delay="100">
            <?php the_field('zagolovok_bloka_products', $post_id)?>
        </h2>
        <?php
        if( have_rows('products') ):
            ?>
            <div class="products__list"  data-aos="fade-up" data-aos-delay="300">
                <?php
                while( have_rows('products') ) : the_row();
                    $image = get_sub_field('izobrazhenie_produkta');
                    $title = get_sub_field('zagolovok_produkta');
                    $desc = get_sub_field('opisanie_produkta');
                    $color = get_sub_field('czvet_bloka');
                    ?>
                    <div class="products__item" style="background-color: <?php echo $color?>">
                        <div class="products__item-image">
                            <img src="<?php echo $image?>">
                        </div>
                        <h3 class="products__item-title">
                            <?php echo $title?>
                        </h3>
                        <div class="products__item-content">
                            <?php echo $desc?>
                        </div>
                    </div>
                <?php
                endwhile;
                ?>
                <div class="products__item" style="background-color: #3B8AFF">
                    <div class="products__item-icon">
                        <img src="<?php the_field('ikonka_v_opisanii', $post_id)?>">
                    </div>
                    <div class="products__item-desc">
                        <?php the_field('opisanie_pod_produktami', $post_id)?>
                    </div>
                </div>
            </div>
        <?php
        endif;
        ?>
    </div>
</section>
