<?php
/*
Template Name: Стандартная страница
*/
get_header();
?>

    <section class="hero-section contacts">
        <div class="container post">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
            ?>

            <h1 class="avtopark__heading price-page__heading">
                <?php the_title(); ?>
            </h1>

            <?php the_content(); ?>
        </div>
    </section>

<?php

get_footer(); ?>