<?php
/*
Template Name: Вопрос-ответ
*/
get_header();
?>

    <section class="hero-section faq-page">
        <div class="container">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
            ?> 

            <h2 class="avtopark__heading price-page__heading">
                <?php the_field('main-head'); ?>
            </h2>

            <div class="faq-page__cont faq-container row justify-content-between align-items-start">
                <div class="faq-container__left col-lg-8 col-12">
                    <div class="faq-container__text">
                        <?php the_content(); ?> 
                    </div>                    

                    <div class="faq__accord js-faqAccord">
                        <!-- Section  -->
                        <?php if( have_rows('new_faq_item') ): ?>
                        <?php while( have_rows('new_faq_item') ): the_row();
                            $FaqName = get_sub_field('faq-name');
                            $FaqDescr = get_sub_field('faq-descr');                               
                        ?>
                            <div class="faq-accord__item accordion-item">
                                <div class="accordion-header faq__subheading">
                                    <div>
                                        <?=  $FaqName; ?>
                                    </div>
                                </div>

                                <div>
                                    <p>
                                        <?= $FaqDescr; ?>
                                    </p>
                                </div>        
                            </div>

                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="faq-container__right form-contain col-xxl-3 col-lg-4 col-md-7 col-12">
                    <h3 class="form-contain__heading">Уважаемый посетитель!</h3>

                    <p class="form-contain__text">
                        Если у Вас еще остались вопросы, можете задать их через форму обратной связи. 
                        Мы ответим на указанный e-mail.
                    </p>

                    <?php echo do_shortcode('[contact-form-7 id="610" title="Форма на странице Вопрос-ответ"]'); ?>
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
    
        
        const fadeIn = (el, timeout, display) => {
            el.style.opacity = 0;
            el.style.display = display || 'block';
            el.style.transition = `opacity ${timeout}ms`;
            setTimeout(() => {
            el.style.opacity = 1;
            }, 10);
        }

        // Объявим функцию FadeOut

        const fadeOut = (el, timeout) => {
            el.style.opacity = 1;
            el.style.transition = `opacity ${timeout}ms`;
            el.style.opacity = 0;

            setTimeout(() => {
            el.style.display = 'none';
            }, timeout);
        };

        // Всплытие окна Спасибо после отправки формы
        document.querySelector('#wpcf7-f610-o1').addEventListener( 'wpcf7mailsent', function( event ) {                
            document.querySelector('.popup-thanks').classList.add('thanks-active'); 
                        
            setTimeout(() => {
                document.querySelector('.popup-thanks').classList.remove('thanks-active'); 
            }, 2500 );  

        }, false );
    });
</script>

<?php get_footer(); ?>