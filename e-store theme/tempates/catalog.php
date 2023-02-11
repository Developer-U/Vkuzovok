<?php
/*
Template Name: Каталог
*/
get_header();
?>

    <section class="hero-section services">
        <div class="container services__cont">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
            ?> 
            
            <div class="types__bg services__bg"></div>
            <div class="types__bg services__bg services__bg_left"></div>
            <div class="types__bg services__bg services__bg_third"></div>

            <h1 class="avtopark__heading services__heading">
                <?php the_field('services_head'); ?>
            </h1>

            <ul class="services__tabs services-tabs row">
                <li class="services-tabs__item col-auto">
                    <a class="services-tabs__link" href="#" data-pathcat="one">Перевозки</a>
                </li>

                <li class="services-tabs__item col-auto">
                    <a class="services-tabs__link" href="#" data-pathcat="two">Аренда</a>
                </li>

                <li class="services-tabs__item col-auto">
                    <a class="services-tabs__link" href="#" data-pathcat="three">Для бизнеса</a>
                </li>
            </ul>

            <article class="services__article services-article row" data-targetcat="one">
                <h2 class="avtopark__heading visually-hidden" style="position: relative; z-index:99">
                    Первый Таб
                </h2>

                <?php
                    // выведем из типа постов works только первый - Перевозки
                    $perevoz = get_posts( array(
                        'numberposts' => 20,
                        'category'    => 0,
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'include'     => array(),
                        'exclude'     => array(),
                        'meta_key'    => '',
                        'meta_value'  => 'Перевозки',
                        'post_type'   => 'works',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                global $post; ?>

                <?php if( $perevoz) { ?>
                <?php foreach( $perevoz as $post ){
                    setup_postdata( $post );
                ?>

                <div class="types-list__item services-article__item">
                    <div class="types-list__up services-article__up">
                        <?php $article_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>

                        <div class="services-article__image" style="background-image: url(<?= $article_img_url; ?>)"></div>
    
                        <a class="services-article__heading catalog-link" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                                              
                        <p class="services-article__price">от <?php the_field( 'main_price_service', $post->ID ); ?> ₽</p>
                    </div>
    
                    <div class="types-list__under services-article__under">   
                        <div class="services-article__white" style="background: #fff url(<?= $article_img_url; ?> ) no-repeat right -20px bottom -10px/59% auto; filter: grayscale() opacity(0.22)"></div>                     
                    </div>                               
                </div>

                <?php }                         
                    
                    } else { ?>
                        <p class="news__subheading">Перевозки не добавлены</p>
                    <?php }                  
                    
                    wp_reset_postdata(); // сброс
                    ?>                
            </article>

            <article class="services__article services-article row" data-targetcat="two">
                <h2 class="avtopark__heading visually-hidden" style="position: relative; z-index:99">
                    Второй Таб
                </h2>

                <?php
                    // выведем из типа постов works только первый - Перевозки
                    $arenda = get_posts( array(
                        'numberposts' => 20,
                        'category'    => 0,
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'include'     => array(),
                        'exclude'     => array(),
                        'meta_key'    => '',
                        'meta_value'  => 'Аренда',
                        'post_type'   => 'works',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                global $post; ?>

                <?php if( $arenda) { ?>
                <?php foreach( $arenda as $post ){
                    setup_postdata( $post );
                ?>

                <div class="types-list__item services-article__item">
                    <div class="types-list__up services-article__up">
                        <?php $article_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>

                        <div class="services-article__image" style="background-image: url(<?= $article_img_url; ?>)"></div>
    
                        <a class="services-article__heading catalog-link" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                                              
                        <p class="services-article__price">от <?php the_field( 'main_price_service', $post->ID ); ?> ₽</p>
                    </div>
    
                    <div class="types-list__under services-article__under">   
                        <div class="services-article__white" style="background: #fff url(<?= $article_img_url; ?> ) no-repeat right -20px bottom -10px/59% auto; filter: grayscale() opacity(0.22)"></div>                     
                    </div>                               
                </div>

                <?php }                         
                    
                    } else { ?>
                        <p class="news__subheading">Услуги аренды не добавлены</p>
                    <?php }                  
                    
                    wp_reset_postdata(); // сброс
                    ?>                
            </article>

            <article class="services__article services-article row" data-targetcat="three">
                <h2 class="avtopark__heading visually-hidden" style="position: relative; z-index:99">
                    Третий Таб
                </h2>

                <?php
                    // выведем из типа постов works только первый - Перевозки
                    $business = get_posts( array(
                        'numberposts' => 20,
                        'category'    => 0,
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'include'     => array(),
                        'exclude'     => array(),
                        'meta_key'    => '',
                        'meta_value'  => 'Для бизнеса',
                        'post_type'   => 'works',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                global $post; ?>

                <?php if( $business) { ?>
                <?php foreach( $business as $post ){
                    setup_postdata( $post );
                ?>

                <div class="types-list__item services-article__item">
                    <div class="types-list__up services-article__up">
                        <?php $article_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>

                        <div class="services-article__image" style="background-image: url(<?= $article_img_url; ?>)"></div>
    
                        <a class="services-article__heading catalog-link" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                                              
                        <p class="services-article__price">от <?php the_field( 'main_price_service', $post->ID ); ?> ₽</p>
                    </div>
    
                    <div class="types-list__under services-article__under">   
                        <div class="services-article__white" style="background: #fff url(<?= $article_img_url; ?> ) no-repeat right -20px bottom -10px/59% auto; filter: grayscale() opacity(0.22)"></div>                     
                    </div>                               
                </div>

                <?php }                         
                    
                    } else { ?>
                        <p class="news__subheading">Услуги lkz ,bpytcf не добавлены</p>
                    <?php }                  
                    
                    wp_reset_postdata(); // сброс
                    ?>                
            </article>
        </div>
    </section>

    <section class="faq">
        <div class="container faq__cont">
            <h2 class="avtopark__heading faq__heading">
                <?php the_field('faq_services_heading'); ?>
            </h2>

            <div class="faq__accord col-xl-8 col-lg-10 col-12 js-faqAccord">
                <?php if( have_rows('new_faq_accord_services_item' ) ): ?>
                <?php while( have_rows('new_faq_accord_services_item') ): the_row();                
                $faqAccordServicesQuest = get_sub_field('faq_accord_services_quest');
                $faqAccordServicesAsk = get_sub_field('faq_accord_services_ask');
                ?>
                    <div class="faq-accord__item accordion-item">
                        <div class="accordion-header faq__subheading">
                            <div>
                                <?= $faqAccordServicesQuest; ?>
                            </div>
                        </div>

                        <div>
                            <p>
                                <?= $faqAccordServicesAsk; ?>
                            </p>
                        </div> 
                    </div>                    

                <?php endwhile; ?>
                <?php endif; ?>                
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/cta' ); ?>

    <section class="post">
        <div class="container ">
            <h2 class="avtopark__heading post__heading">
                <?php the_field('cat_two_col_block_head'); ?>
            </h2>

            <h3 class="post__subheading">
                <?php the_field('cat_two_col_block_subhead'); ?>
            </h3>

            <div class="post__cont post-cont row justify-content-between">
                <div class="post-cont__left col-lg-6 col-12">                    
                    <?php the_field('cat_two_col_block_left_text'); ?>                    
                </div>

                <div class="post-cont__right col-lg-6 col-12">
                    <?php the_field('cat_two_col_block_right_text'); ?>
                </div>
            </div>            
        </div>
    </section>

<script>
    window.addEventListener('DOMContentLoaded', function(){
        // Табы переключения типов отзывов на странице Отзывы

        // Зададим в переменную первую ссылку
        var firstRewLink = document.querySelector('.services-tabs__item:first-of-type .services-tabs__link');
             
        firstRewLink.classList.add('tabs-link-active');

        document.querySelectorAll('.services-tabs__item .services-tabs__link').forEach(function(tabsBtn){
            tabsBtn.addEventListener('click', function(event){
                event.preventDefault();
                const pathcat = event.currentTarget.dataset.pathcat;

                document.querySelectorAll('.services-tabs__item .services-tabs__link').forEach(function(oneTab){
                    oneTab.classList.remove('tabs-link-active');

                    firstRewLink.classList.remove('tabs-link-active');
                });

                // Определим текущую ссылку
                var currentLink =  document.querySelector(`[data-pathcat='${pathcat}']`);                             
                
                // И сразу при клике сделаем её активной
                currentLink.classList.add('tabs-link-active');
                
                // Зададим условие: если текущая ссылка равна первой, то первую делаем активной      
                if(currentLink.getAttribute('data-pathcat') == firstRewLink.getAttribute('data-pathcat')) {
                    firstRewLink.classList.add('tabs-link-active');
                }

                // Итерируем табы и закрываем все открытые табы
                document.querySelectorAll('.services-article').forEach(function(tabContent3){
                    tabContent3.classList.remove('services-article-active');

                    // Зададим в переменную первый Таб (в стилях делаем первый элемент открытым)        
                    var firstRevTab = document.querySelector('.services-article:first-of-type');  

                    // Соответственно при клике на любую кнопку его сразу закрываем
                    firstRevTab.style.display = 'none';

                    // Закинем в переменную текущий Таб с соответствующим атрибутом data-target       
                    var currentTab = document.querySelector(`[data-targetcat="${pathcat}"]`);

                    // Зададим условие: если атрибут data-target текущего таба соответствует первому Табу, то есть
                    // если это и есть первый Таб, открываем его, если нет - держим закрытым и открываем соответствующий
                    if(currentTab.getAttribute('data-targetcat') == firstRevTab.getAttribute('data-targetcat')) {
                        firstRevTab.style.display = 'flex';
                    } else {
                        firstRevTab.style.display = 'none';
                
                        currentTab.classList.add('services-article-active');
                    }         

                }); 
            });
        });

        $( ".js-faqAccord" ).accordion({
            collapsible: true,      
            heightStyle: 'content',     
            header: '> .accordion-item > .accordion-header',
            animate: { easing: 'linear', duration: 400 }
        });

        var catalogEl = $('.services-article'),
        greyPlashkaTwo = $('.services__bg_left'),
        greyPlashkaThree = $('.services__bg_third');
        
        var elHeight = catalogEl.height();
        console.log(elHeight);
        if(elHeight >= 1608 ) {
            greyPlashkaTwo.show();
        } else {
            greyPlashkaTwo.hide();
        }

        if(elHeight >= 2340 ) {
            greyPlashkaThree.show();
        } else {
            greyPlashkaThree.hide();
        }
    });
</script>

<?php get_footer(); ?>