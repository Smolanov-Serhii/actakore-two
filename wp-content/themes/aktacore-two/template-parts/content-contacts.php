<?php
$post_id = get_the_ID();
?>
<section class="contacts" id="contacts">
    <div class="contacts__container main-container">
        <h2 class="contacts__title section-title">
            <?php the_field('zagolovok_bloka_kontakty', $post_id)?>
        </h2>
        <div class="contacts__maps" data-aos="fade-up" data-aos-delay="100">
            <?php
            if( have_rows('karty') ):
                ?>
                    <?php
                    while( have_rows('karty') ) : the_row();
                        $map = get_sub_field('kod_google_maps');
                        $phone = get_sub_field('telefon');
                        $adress = get_sub_field('adress');
                        ?>
                        <div class="contacts__item">
                            <a class="contacts__item-row contacts__item-phone" href="tel:<?php echo $phone;?>">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.5">
                                        <path d="M19 17.5V21.5C16.242 21.5 13.93 21.005 12 20.175C8.159 18.523 5.824 15.545 4.5 12.5C3.4 9.972 3 7.398 3 5.5H7L8 9.5L4.5 12.5C5.824 15.545 8.159 18.523 12 20.175L15 16.5L19 17.5Z" fill="white"/>
                                        <path d="M12 20.175C13.93 21.005 16.242 21.5 19 21.5V17.5L15 16.5L12 20.175ZM12 20.175C8.159 18.523 5.824 15.545 4.5 12.5M4.5 12.5C3.4 9.972 3 7.398 3 5.5H7L8 9.5L4.5 12.5ZM14 4.5H14.01M17 4.5H17.01M20 4.5H20.01M14 7.5H14.01M17 7.5H17.01M20 7.5H20.01M14 10.5H14.01M17 10.5H17.01M20 10.5H20.01" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                </svg>
                                <?php echo $phone;?>
                            </a>
                            <div class="contacts__item-row contacts__item-adress">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.5">
                                        <path d="M17.6569 16.6421L12 22.5L6.34311 16.6421C5.2243 15.4835 4.46239 14.0074 4.15371 12.4004C3.84504 10.7934 4.00347 9.12774 4.60898 7.61399C5.21448 6.10025 6.23986 4.80643 7.55545 3.89614C8.87104 2.98586 10.4178 2.5 12 2.5C13.5822 2.5 15.129 2.98586 16.4445 3.89614C17.7601 4.80643 18.7855 6.10025 19.391 7.61399C19.9965 9.12774 20.155 10.7934 19.8463 12.4004C19.5376 14.0074 18.7757 15.4835 17.6569 16.6421ZM12 14.4661C12.943 14.4661 13.8474 14.0782 14.5142 13.3877C15.181 12.6972 15.5556 11.7607 15.5556 10.7842C15.5556 9.8077 15.181 8.87119 14.5142 8.1807C13.8474 7.49021 12.943 7.1023 12 7.1023C11.057 7.1023 10.1526 7.49021 9.48584 8.1807C8.81905 8.87119 8.44445 9.8077 8.44445 10.7842C8.44445 11.7607 8.81905 12.6972 9.48584 13.3877C10.1526 14.0782 11.057 14.4661 12 14.4661ZM12 12.6251C11.5285 12.6251 11.0763 12.4312 10.7429 12.0859C10.4095 11.7407 10.2222 11.2724 10.2222 10.7842C10.2222 10.2959 10.4095 9.8277 10.7429 9.48245C11.0763 9.13721 11.5285 8.94325 12 8.94325C12.4715 8.94325 12.9237 9.13721 13.2571 9.48245C13.5905 9.8277 13.7778 10.2959 13.7778 10.7842C13.7778 11.2724 13.5905 11.7407 13.2571 12.0859C12.9237 12.4312 12.4715 12.6251 12 12.6251Z" fill="white"/>
                                    </g>
                                </svg>
                                <?php echo $adress;?>
                            </div>
                            <div class="contacts__item-map">
                                <?php echo $map;?>
                            </div>
                        </div>
                    <?php
                    endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
