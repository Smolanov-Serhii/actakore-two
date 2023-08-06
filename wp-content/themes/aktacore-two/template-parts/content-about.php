<?php
$post_id = get_the_ID();
?>
<section class="about" id="company">
    <div class="about__container main-container">
        <h2 class="about__title section-title left-part" data-aos="fade-up" data-aos-delay="100">
            <?php the_field('zagolovok_bloka_pro_nas', $post_id)?>
        </h2>
        <div class="about__content right-part"  data-aos="fade-up" data-aos-delay="300">
            <?php the_field('opisanie_bloka_pro_nas', $post_id)?>
        </div>
    </div>
</section>
