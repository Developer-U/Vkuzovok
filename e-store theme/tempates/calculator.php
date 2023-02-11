<?php
/*
Template Name: Калькулятор
*/
get_header();
?>

    <section class="hero-section calculator">
        <div class="container">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
            ?>
        </div>
    </section>

    <section class="zayavka">
        <div class="container zayavka__cont zayavka-main__cont">
            <h2 class="avtopark__heading zayavka__heading">
                Калькулятор перевозок
            </h2>

            <?php get_template_part( 'template-parts/block', 'calculator' ); ?>
        </div>
    </section>

    <section class="faq">
        <div class="container faq__cont">
            <h2 class="avtopark__heading faq__heading">
                <?php the_field('faq_calc_heading'); ?>
            </h2>

            <div class="faq__accord col-xl-8 col-lg-10 col-12 js-faqAccord">
                <?php if( have_rows('new_faq_accord_calc_item' ) ): ?>
                <?php while( have_rows('new_faq_accord_calc_item') ): the_row();                
                $faqAccordCalcQuest = get_sub_field('faq_accord_calc_quest');
                $faqAccordCalcAsk = get_sub_field('faq_accord_calc_ask');
                ?>

                    <!-- Section -->
                    <div class="faq-accord__item accordion-item">
                        <div class="accordion-header faq__subheading">
                            <div>
                            <?= $faqAccordCalcQuest; ?>
                            </div>
                        </div>

                        <div>
                            <p>
                                <?= $faqAccordCalcAsk; ?>
                            </p>
                        </div>        
                    </div>

                <?php endwhile; ?>
                <?php endif; ?>                
            </div>
        </div>
    </section>

    <section class="post">
        <div class="container ">
            <h2 class="avtopark__heading post__heading">
                <?php the_field('calc_two_col_block_head'); ?>
            </h2>

            <h3 class="post__subheading">
                <?php the_field('calc_two_col_block_subhead'); ?>
            </h3>

            <div class="post__cont post-cont row justify-content-between">
                <div class="post-cont__left col-lg-6 col-12">                    
                    <?php the_field('calc_two_col_block_left_text'); ?>                    
                </div>

                <div class="post-cont__right col-lg-6 col-12">
                    <?php the_field('calc_two_col_block_right_text'); ?>
                </div>
            </div>            
        </div>
    </section>

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

<?php get_footer(); ?>