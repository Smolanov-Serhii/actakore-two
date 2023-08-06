<?php
$post_id = get_the_ID();
?>
<section class="rules" id="rules">
    <div class="rules__container main-container">
        <h2 class="rules__title section-title" data-aos="fade-up" data-aos-delay="100">
            <?php the_field('zagolovok_bloka_pravila', $post_id)?>
        </h2>
        <?php
        if( have_rows('perechen_pravil') ):
            ?>
            <div class="rules__list" data-aos="fade-up" data-aos-delay="300">
                <?php
                while( have_rows('perechen_pravil') ) : the_row();
                    $icon = get_sub_field('ikonka');
                    $title = get_sub_field('nazvanie_pravila');
                    $link = get_sub_field('ssylka_na_dokument');
                    $file = get_sub_field('fajl_dokumenta');
                    if($file){
                        ?>
                            <a href="<?php echo $file?>" class="rules__item" download>
                        <?php
                    } else {
                        ?>
                            <a href="<?php echo $link?>" class="rules__item">
                        <?php
                    }
                    ?>
                        <div class="rules__item-image">
                            <img src="<?php echo $icon?>">
                        </div>
                        <h3 class="rules__item-title">
                            <?php echo $title?>
                        </h3>
                    </a>
                <?php
                endwhile;
                ?>
            </div>
        <?php
        endif;
        ?>
    </div>
</section>
