<?php
/*
Template Name: Водителям
*/
get_header();
?>

    <section class="hero about-hero drivers">
        <?php
        $carBg = get_field('car_background');
        $driverBg = get_field('driver_background');
        $mainDriveHead = get_field('driver_main_head');
        ?>

        <div class="hero__image drivers__image" style="background-image: url('<?php echo esc_url($carBg['url']); ?>')">
            <div class="drivers__man" style="background-image: url('<?php echo esc_url($driverBg['url']); ?>')"></div>
        </div>

        <div class="container">
            <div class="hero__cont drivers__cont col-md-8 col-12">
                <h1 class="hero__heading head-italic" style="text-transform: none">
                    <?= $mainDriveHead; ?>
                </h1>
            </div>            
        </div>
    </section>

    <section class="post about-post">
        <div class="container ">
            <h2 class="avtopark__heading post__heading">
                <?php the_field('text_drivers_head'); ?> 
            </h2>

            <h3 class="post__subheading">
                <?php the_field('text_drivers_subhead'); ?> 
            </h3>

            <div class="post__cont post-cont row justify-content-between">
                <div class="post-cont__left col-lg-6 col-12">
                    <?php the_field('text_drivers_left'); ?>
                </div>

                <div class="post-cont__right col-lg-6 col-12">
                    <?php the_field('text_drivers_right'); ?>
                </div>
            </div>            
        </div>
    </section>

    <section class="faq">
        <div class="container faq__cont">
            <h2 class="avtopark__heading faq__heading">
                <?php the_field('faq_drivers_heading'); ?>
            </h2>

            <div class="faq__accord col-xl-8 col-lg-10 col-12 js-faqAccord">
                <?php if( have_rows('new_faq_accord_drivers_item' ) ): ?>
                <?php while( have_rows('new_faq_accord_drivers_item') ): the_row();                
                $faqAccordDriversQuest = get_sub_field('faq_accord_drivers_quest');
                $faqAccordDriversAsk = get_sub_field('faq_accord_drivers_ask');
                ?>

                    <!-- Section -->                 

                    <div class="faq-accord__item accordion-item">
                        <div class="accordion-header faq__subheading">
                            <div>
                                <?= $faqAccordDriversQuest; ?>
                            </div>
                        </div>

                        <div>
                            <p>
                                <?= $faqAccordDriversAsk; ?>
                            </p>
                        </div> 
                    </div> 

                <?php endwhile; ?>
                <?php endif; ?>                
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/cta' ); ?>

<script>
    window.addEventListener('DOMContentLoaded', function(){
        $( ".js-faqAccord" ).accordion({
            collapsible: true,      
            heightStyle: 'content',     
            header: '> .accordion-item > .accordion-header',
            animate: { easing: 'linear', duration: 400 }
        });            
    });
</script>


<?php

get_footer(); ?>