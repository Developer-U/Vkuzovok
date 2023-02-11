<?php
/*
Template Name: О компании
*/
get_header();
?>

    <section class="hero about-hero">
        <?php $ImgMainAbout = get_field('img_main_about'); ?>

        <div class="hero__image" style="background-image: url('<?php echo esc_url($ImgMainAbout['url']); ?>')"></div>

        <div class="container">
            <div class="hero__cont col-12">
                <span style="text-align:left">
                <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                ?>
                </span>            

                <h1 class="col-md-9 col-12 hero__heading head-italic about-head" style="text-transform: none">
                    <?php the_field('about_main_head'); ?>
                </h1>
            </div>            
        </div>
    </section>

    <section class="post about-post">
        <div class="container ">
            <h2 class="avtopark__heading post__heading">
                <?php the_field('about_text_block_head'); ?>
            </h2>

            <h3 class="post__subheading">
                <?php the_field('about_text_block_subhead'); ?>
            </h3>

            <div class="post__cont post-cont row justify-content-between">
                <div class="post-cont__left col-lg-6 col-12">
                    <div class="post-cont__text post-cont__text_right">
                        <?php the_field('about_text_block_left'); ?>
                    </div>                    
                </div>

                <div class="post-cont__right col-lg-6 col-12">
                    <div class="post-cont__text">
                        <?php the_field('about_text_block_right'); ?>
                    </div>
                </div>
            </div>            
        </div>
    </section>

    <section class="types about-types">        
        <div class="video-block__small service-types__small"></div>

        <div class="container">
            <div class="types__cont service-types__cont row align-items-start justify-content-between">
                <div class="service-types__left about-types__left col-lg-6 col-12">
                    <h2 class="about-types__heading">
                        <?php the_field('info_name'); ?>
                    </h2>

                    <?php if( have_rows('new_info_item' ) ): ?>
                    <?php while( have_rows('new_info_item') ): the_row();
                    $infoHead = get_sub_field('info_head');
                    $infoText = get_sub_field('info_text');  
                    ?>
    
                        <div class="about-page__cont">
                            <h3 class="about-page__heading">
                                <?= $infoHead; ?>
                            </h3>

                            <p class="about-page__text">
                                <?= $infoText; ?>
                            </p>
                        </div>

                    <?php endwhile; ?>
                    <?php endif; ?> 
                </div>
    
                <div class="video-block__right service-types__right col-lg-6 col-sm-9 col-12">
                    <?php $infoImg = get_field('info_image') ?>

                    <img src="<?php echo esc_url($infoImg['url']); ?>" alt="<?php echo esc_attr($infoImg['alt']); ?>" class="video-block__video">
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/map'); ?>

<?php

get_footer(); ?>