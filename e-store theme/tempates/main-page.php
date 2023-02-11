<?php
/*
Template Name: Главная страница
*/
get_header();
?>

    <section class="hero">
    <?php $ImgMain = get_field('img_main'); ?>

        <div class="hero__image" style="background-image: url('<?php echo esc_url($ImgMain['url']); ?>')"></div>

        <div class="container">
            <div class="hero__cont col-md-9 col-12">
                <h1 class="hero__heading head-italic">
                    <?php the_field('main_head'); ?>
                </h1>
    
                <h3 class="hero__text">
                    <?php the_field('main_subhead'); ?>
                </h3>
            </div>            
        </div>
    </section>

    <section class="types">
        <div class="types__bg"></div>

        <div class="container types__cont row align-items-center">
            <h2 class="types__heading col-5">
                <?php the_field('main_services_head'); ?>
            </h2>

            <p class="types__text col">ЦЕНА: от <b class="types__price"><?php the_field('main_services_price'); ?> ₽</b></p>
        </div>

        <?php get_template_part( 'template-parts/services', 'block' ); ?>

        <?php echo estore_services_tags_menu(); ?>
    </section>

    <?php get_template_part( 'template-parts/avtopark', 'block' ); ?>
    
    <section class="types video-block">
        <div class="types__bg video-block__bg"></div>
        <div class="video-block__small"></div>

        <div class="container">
            <div class="video-block__cont row align-items-center justify-content-between">
                <div class="video-block__left col-lg-6 col-12">
                    <h2 class="avtopark__heading video-block__heading">
                        <?php the_field('text_vid_block_head'); ?>
                    </h2>
    
                    <p class="video-block__text">
                        <?php the_field('text_vid_block_text'); ?>
                    </p>
                </div>
    
                <figure class="video-block__right col-lg-6 col-sm-9 col-12"> 
                    <?php
                        $mainVideo = get_sub_field('main_video');
                        if(!empty($mainVideo)):                                                                    
                    ?>

                        <video controls class="video-block__img">
                            <source src="<?php echo esc_url($mainVideo['url']); ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>                                      
                                                                                                                                
                    <?php else: ?>  

                        <?php $text_vid_block_video = get_field('text_vid_block_video'); ?>
                        <img class="video-block__img" src="<?php echo esc_url( $text_vid_block_video['url'] ); ?>" alt="<?php echo esc_attr( $text_vid_block_video['alt'] ); ?>">
                    <?php endif; ?>
                </figure>
            </div>
        </div>
    </section>

    <?php if(!empty(get_field('advantages_head'))): ?>
        <section class="advantages">
            <div class="container">
                <h2 class="avtopark__heading advantages__heading">
                    <?php the_field('advantages_head'); ?>
                </h2>

                <ul class="advantages__list row align-items-stretch">

                    <!-- Верхние кнопки -->
                    <?php 
                    // Преимущество 1                                               
                    $advImg1 = get_field('adv_image1');
                    $advName1 = get_field('adv_name1');
                    $advArtDescr1 = get_field('adv_art_descr1');

                    // Преимущество 2                                            
                    $advImg2 = get_field('adv_image2');
                    $advName2 = get_field('adv_name2');
                    $advArtDescr2 = get_field('adv_art_descr2');

                    // Преимущество 3                                          
                    $advImg3 = get_field('adv_image33');
                    $advName3 = get_field('adv_name3');
                    $advArtDescr3 = get_field('adv_art_descr3');

                    // Преимущество 4                                            
                    $advImg4 = get_field('adv_image44');
                    $advName4 = get_field('adv_name4');
                    $advArtDescr4 = get_field('adv_art_descr4');

                    // Преимущество 5                                             
                    $advImg5 = get_field('adv_image5');
                    $advName5 = get_field('adv_name5');
                    $advArtDescr5 = get_field('adv_art_descr5');

                    // Преимущество 6                                          
                    $advImg6 = get_field('adv_image6');
                    $advName6 = get_field('adv_name6');
                    $advArtDescr6 = get_field('adv_art_descr6');
                     
                    // Преимущество 7                                             
                    $advImg7 = get_field('adv_image7');
                    $advName7 = get_field('adv_name7');
                    $advArtDescr7 = get_field('adv_art_descr7');

                    // Преимущество 8                                            
                    $advImg8 = get_field('adv_image8');
                    $advName8 = get_field('adv_name8');
                    $advArtDescr8 = get_field('adv_art_descr8');

                    // Преимущество 9                                    
                    $advImg9 = get_field('adv_image9');
                    $advName9 = get_field('adv_name9');
                    $advArtDescr9 = get_field('adv_art_descr9');

                    // Преимущество 10                                          
                    $advImg10 = get_field('adv_image10');
                    $advName10 = get_field('adv_name10');
                    $advArtDescr10 = get_field('adv_art_descr10');

                    // Преимущество 11                                    
                    $advImg11 = get_field('adv_image11');
                    $advName11 = get_field('adv_name11');
                    $advArtDescr11 = get_field('adv_art_descr11');

                    // Преимущество 12                    
                                            
                    $advImg12 = get_field('adv_image12');
                    $advName12 = get_field('adv_name12');
                    $advArtDescr12 = get_field('adv_art_descr12');                    
                    ?>

                        <?php if(!empty($advName1)): ?>
                            <li class="advantages__under item-active advantages__under_up col-2" data-item3="one">
                                <div class="advantages__item">                                       
                                    <img class="advantages__img" src="<?php echo esc_url($advImg1['url']); ?>" alt="<?php echo esc_attr($advImg1['alt']); ?>" >

                                    <a class="advantages__link" href="#" data-path3="one">
                                        <?= $advName1; ?>
                                    </a>
                                </div>
                            </li>
                        <?php else: ?>
                            <li style="display: none"></li>                    
                        <?php endif; ?>

                        <?php if(!empty($advName2)): ?>
                            <li class="advantages__under advantages__under_up col-2" data-item3="two">
                                <div class="advantages__item">                    
                                    <img class="advantages__img" src="<?php echo esc_url($advImg2['url']); ?>" alt="<?php echo esc_attr($advImg2['alt']); ?>" >

                                    <a class="advantages__link" href="#" data-path3="two">
                                        <?= $advName2; ?>
                                    </a>
                                </div>
                            </li>
                        <?php else: ?>
                            <li style="display: none"></li>                    
                        <?php endif; ?>

                        <?php if(!empty($advName3)): ?>
                            <li class="advantages__under advantages__under_up col-2" data-item3="three">
                                <div class="advantages__item">                    
                                    <img class="advantages__img" src="<?php echo esc_url($advImg3['url']); ?>" alt="<?php echo esc_attr($advImg3['alt']); ?>" >

                                    <a class="advantages__link" href="#" data-path3="three">
                                        <?= $advName3; ?>
                                    </a>
                                </div>
                            </li>
                        <?php else: ?>
                            <li style="display: none"></li>                    
                        <?php endif; ?>

                        <?php if(!empty($advName4)): ?>
                            <li class="advantages__under advantages__under_up col-2" data-item3="four">
                                <div class="advantages__item">                    
                                    <img class="advantages__img" src="<?php echo esc_url($advImg4['url']); ?>" alt="<?php echo esc_attr($advImg4['alt']); ?>" >

                                    <a class="advantages__link" href="#" data-path3="four">
                                        <?= $advName4; ?>
                                    </a>
                                </div>
                            </li>
                        <?php else: ?>
                            <li style="display: none"></li>                    
                        <?php endif; ?>

                        <?php if(!empty($advName5)): ?>
                            <li class="advantages__under advantages__under_up col-2" data-item3="five">
                                <div class="advantages__item ">                    
                                    <img class="advantages__img" src="<?php echo esc_url($advImg5['url']); ?>" alt="<?php echo esc_attr($advImg5['alt']); ?>" >

                                    <a class="advantages__link" href="#" data-path3="five">
                                        <?= $advName5; ?>
                                    </a>
                                </div>
                            </li>
                        <?php else: ?>
                            <li style="display: none"></li>                    
                        <?php endif; ?>

                        <?php if(!empty($advName6)): ?>
                            <li class="advantages__under advantages__under_up col-2" data-item3="six">
                                <div class="advantages__item ">                    
                                    <img class="advantages__img" src="<?php echo esc_url($advImg6['url']); ?>" alt="<?php echo esc_attr($advImg6['alt']); ?>" >

                                    <a class="advantages__link" href="#" data-path3="six">
                                        <?= $advName6; ?>
                                    </a>
                                </div>
                            </li>  
                        <?php else: ?>
                            <li style="display: none"></li>                    
                        <?php endif; ?>              
                </ul>

                <!-- Статьи -->
                <article class="advantages__article advantages__article_first adv-art adv-art-active" data-target3="one">                     
                    <img class="adv-art__img" src="<?php echo esc_url($advImg1['url']); ?>" >

                    <h3 class="adv-art__heading">
                        <?= $advName1; ?>
                    </h3>

                    <?= $advArtDescr1; ?>
                </article> 
                
                <article class="advantages__article advantages__article_first adv-art" data-target3="two">                     
                    <img class="adv-art__img" src="<?php echo esc_url($advImg2['url']); ?>" >

                    <h3 class="adv-art__heading">
                        <?= $advName2; ?>
                    </h3>

                    <?= $advArtDescr2; ?>
                </article> 

                <article class="advantages__article advantages__article_first adv-art" data-target3="three">                     
                    <img class="adv-art__img" src="<?php echo esc_url($advImg3['url']); ?>" >

                    <h3 class="adv-art__heading">
                        <?= $advName3; ?>
                    </h3>

                    <?= $advArtDescr3; ?>
                </article> 

                <article class="advantages__article advantages__article_first adv-art" data-target3="four">                     
                    <img class="adv-art__img" src="<?php echo esc_url($advImg4['url']); ?>" >

                    <h3 class="adv-art__heading">
                        <?= $advName4; ?>
                    </h3>

                    <?= $advArtDescr4; ?>
                </article> 

                <article class="advantages__article advantages__article_first adv-art" data-target3="five">                     
                    <img class="adv-art__img" src="<?php echo esc_url($advImg5['url']); ?>" >

                    <h3 class="adv-art__heading">
                        <?= $advName5; ?>
                    </h3>

                    <?= $advArtDescr5; ?>
                </article> 

                <article class="advantages__article advantages__article_first adv-art" data-target3="six">                     
                    <img class="adv-art__img" src="<?php echo esc_url($advImg6['url']); ?>" >

                    <h3 class="adv-art__heading">
                        <?= $advName6; ?>
                    </h3>

                    <?= $advArtDescr6; ?>
                </article> 

                <article class="advantages__article advantages__article_first adv-art" data-target3="seven">                     
                    <img class="adv-art__img" src="<?php echo esc_url($advImg7['url']); ?>" >

                    <h3 class="adv-art__heading">
                        <?= $advName7; ?>
                    </h3>

                    <?= $advArtDescr7; ?>
                </article> 

                <article class="advantages__article advantages__article_first adv-art" data-target3="eight">                     
                    <img class="adv-art__img" src="<?php echo esc_url($advImg8['url']); ?>" >

                    <h3 class="adv-art__heading">
                        <?= $advName8; ?>
                    </h3>

                    <?= $advArtDescr8; ?>
                </article> 

                <article class="advantages__article advantages__article_first adv-art" data-target3="nine">                     
                    <img class="adv-art__img" src="<?php echo esc_url($advImg9['url']); ?>" >

                    <h3 class="adv-art__heading">
                        <?= $advName9; ?>
                    </h3>

                    <?= $advArtDescr9; ?>
                </article> 

                <article class="advantages__article advantages__article_first adv-art" data-target3="ten">                     
                    <img class="adv-art__img" src="<?php echo esc_url($advImg10['url']); ?>" >

                    <h3 class="adv-art__heading">
                        <?= $advName10; ?>
                    </h3>

                    <?= $advArtDescr10; ?>
                </article> 

                <article class="advantages__article advantages__article_first adv-art" data-target3="elleven">                     
                    <img class="adv-art__img" src="<?php echo esc_url($advImg11['url']); ?>" >

                    <h3 class="adv-art__heading">
                        <?= $advName11; ?>
                    </h3>

                    <?= $advArtDescr11; ?>
                </article> 

                <article class="advantages__article advantages__article_first adv-art" data-target3="twelve">                     
                    <img class="adv-art__img" src="<?php echo esc_url($advImg12['url']); ?>" >

                    <h3 class="adv-art__heading">
                        <?= $advName12; ?>
                    </h3>

                    <?= $advArtDescr12; ?>
                </article> 

                <!-- Нижние кнопки -->
                <ul class="advantages__list row align-items-stretch">                 
                               

                        <?php if(!empty($advName7)): ?>
                            <li class="advantages__under advantages__under_down col-2" data-item3="seven">
                                <div class="advantages__item">                    
                                    <img class="advantages__img" src="<?php echo esc_url($advImg7['url']); ?>" alt="<?php echo esc_attr($advImg7['alt']); ?>" >

                                    <a class="advantages__link" href="#" data-path3="seven">
                                        <?= $advName7; ?>
                                    </a>
                                </div>
                            </li>
                        <?php else: ?>
                            <li style="display: none"></li>                    
                        <?php endif; ?>

                        <?php if(!empty($advName8)): ?>
                            <li class="advantages__under advantages__under_down col-2" data-item3="eight">
                                <div class="advantages__item" >                    
                                    <img class="advantages__img" src="<?php echo esc_url($advImg3['url']); ?>" alt="<?php echo esc_attr($advImg3['alt']); ?>" >

                                    <a class="advantages__link" href="#" data-path3="eight">
                                        <?= $advName3; ?>
                                    </a>
                                </div>
                            </li>
                        <?php else: ?>
                            <li style="display: none"></li>                    
                        <?php endif; ?>

                        <?php if(!empty($advName9)): ?>
                            <li class="advantages__under advantages__under_down col-2" data-item3="nine">
                                <div class="advantages__item">                    
                                    <img class="advantages__img" src="<?php echo esc_url($advImg9['url']); ?>" alt="<?php echo esc_attr($advImg9['alt']); ?>" >

                                    <a class="advantages__link" href="#" data-path3="nine">
                                        <?= $advName9; ?>
                                    </a>
                                </div>
                            </li>
                        <?php else: ?>
                            <li style="display: none"></li>                    
                        <?php endif; ?>

                        <?php if(!empty($advName10)): ?>
                            <li class="advantages__under advantages__under_down col-2" data-item3="ten">
                                <div class="advantages__item ">                    
                                    <img class="advantages__img" src="<?php echo esc_url($advImg10['url']); ?>" alt="<?php echo esc_attr($advImg10['alt']); ?>" >

                                    <a class="advantages__link" href="#" data-path3="ten">
                                        <?= $advName10; ?>
                                    </a>
                                </div>
                            </li>
                        <?php else: ?>
                            <li style="display: none"></li>                    
                        <?php endif; ?>

                        <?php if(!empty($advName11)): ?>
                            <li class="advantages__under advantages__under_down col-2" data-item3="elleven">
                                <div class="advantages__item">                                               
                                    <img class="advantages__img" src="<?php echo esc_url($advImg11['url']); ?>" alt="<?php echo esc_attr($advImg11['alt']); ?>" >

                                    <a class="advantages__link" href="#" data-path3="elleven">
                                        <?= $advName11; ?>
                                    </a>
                                </div>
                            </li>
                        <?php else: ?>
                            <li style="display: none"></li>                    
                        <?php endif; ?>

                        <?php if(!empty($advName12)): ?>
                            <li class="advantages__under advantages__under_down col-2" data-item3="twelve">
                                <div class="advantages__item">                    
                                    <img class="advantages__img" src="<?php echo esc_url($advImg12['url']); ?>" alt="<?php echo esc_attr($advImg12['alt']); ?>" >

                                    <a class="advantages__link" href="#" data-path3="twelve">
                                        <?= $advName12; ?>
                                    </a>
                                </div>
                            </li>  
                        <?php else: ?>
                            <li style="display: none"></li>
                        <?php endif; ?>               
                </ul>           
            </div>
        </section> 
    <?php else: ?>
        <section style="display:none">
        </section> 
    <?php endif; ?>  

    <?php get_template_part( 'template-parts/wework'); ?>

    <?php if(get_field('articles-rev-heading-main')):?> 
        <section class="articles-services">
            <div class="container faq__cont">   
                <article class="services-article reviews-article row js-reviewsArt">
                    <h2 class="avtopark__heading rev-level-heading" style="position: relative; z-index:99">
                        <?php the_field('articles-rev-heading-main'); ?>
                    </h2>

                    <h3 class="reviews__subheading">
                        <?php the_field('articles-rev-subheading-main'); ?>
                    </h3> 

                    <?php if( have_rows('add_text_review_works_main') ): ?>
                    <?php while( have_rows('add_text_review_works_main') ): the_row();
                    $textRevDateWorksMain = get_sub_field('text_rev_date_works_main');
                    $textRevNameWorksMain = get_sub_field('text_rev_name_works_main');
                    $textRevTimeWorksMain = get_sub_field('text_rev_time_works_main');
                    $textRevContWorksMain = get_sub_field('text_rev_cont_works_main');
                    $photoForWorksMain = get_sub_field('photo_for_works_main');
                    $revPhotoWorksMain = get_sub_field('text_rev_photo_works_main');
                    $expertPhotoWorksMain = get_sub_field('text_expert_photo_works_main');
                    $expertNameWorksMain = get_sub_field('expert_name_works_main');
                    $expertDateWorksMain = get_sub_field('expert_date_works_main');
                    $expertTimeWorksMain = get_sub_field('expert_time_works_main');
                    $expertContWorksMain = get_sub_field('expert_cont_works_main');
                    $ratingWorksMain = get_sub_field('rating_works_main');
                    ?>  

                        <div class="reviews__one one-review no-padding-bottom col-xxl-7 col-lg-10 col-12">
                            <div class="one-review__author row">
                                <figure class="one-review__image">
                                    <img class="one-review__img" src="<?php echo esc_url( $revPhotoWorksMain['url'] ); ?>" alt="<?php echo esc_attr( $revPhotoWorksMain['alt'] ); ?>">
                                </figure>

                                <div class="one-review__box col row">
                                    <div class="one-review__top">
                                        <h3 class="one-review__name"><?= $textRevNameWorksMain; ?></h3>

                                        <div class="one-review__time"><?= $textRevDateWorksMain; ?></div>
                                    </div>

                                    <div class="one-review__rating row justify-content-between">
                                        <?= $ratingWorksMain; ?>
                                        
                                    </div>
                                </div>
                            </div>

                            <p class="one-review__text">
                                <?= $textRevContWorksMain; ?>
                            </p>

                            <?php if($photoForWorksMain): ?>
                                <figure class="one-review__preview">
                                    <img class="one-review__img" src="<?php echo esc_url( $photoForWorksMain['url'] ); ?>" alt="<?php echo esc_attr( $photoForWorksMain['alt'] ); ?>">
                                </figure>
                            <?php else: ?>
                                <div style="margin-bottom:20px;"></div>
                            <?php endif; ?>

                            <?php if($expertContWorksMain && $expertNameWorksMain): ?>
                                <div class="one-review__answer rev-answer row">
                                    <figure class="one-review__image rev-answer__image">
                                        <img class="one-review__img" src="<?php echo esc_url( $expertPhotoWorksMain['url'] ); ?>" alt="<?php echo esc_attr( $expertPhotoWorksMain['alt'] ); ?>">
                                    </figure>

                                    <div class="one-review__box col row">
                                        <div class="one-review__top">
                                            <h3 class="one-review__name"><?= $expertNameWorksMain; ?></h3>

                                            <div class="one-review__time"><?= $expertDateWorksMain; ?></div>
                                        </div>

                                        <p class="one-review__text col">
                                            <?= $expertContWorksMain; ?> 
                                        </p>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div style="display: none"></div>
                            <?php endif; ?>
                        </div>

                    <?php endwhile; ?>
                    <?php endif; ?>                    
                </article>

                <a class="reviews__btn" href="/reviews">показать ещё отзывы</a>
            </div>
        </section>
    <? endif; ?>

    <section class="faq">
        <div class="container faq__cont">
            <h2 class="avtopark__heading faq__heading">
                <?php the_field('faq_main_heading'); ?>
            </h2>

            <div class="faq__accord col-lg-8 col-12 js-faqAccord">
                <?php if( have_rows('new_faq_accord_main_item' ) ): ?>
                <?php while( have_rows('new_faq_accord_main_item') ): the_row();                
                $faqAccordMainQuest = get_sub_field('faq_accord_main_quest');
                $faqAccordMainAsk = get_sub_field('faq_accord_main_ask');
                ?>

                    <div class="faq-accord__item accordion-item ">
                        <div class="accordion-header faq__subheading">
                            <div>
                                <?= $faqAccordMainQuest; ?>
                            </div>                    
                        </div>
                        
                        <div>
                            <p>
                                <?= $faqAccordMainAsk; ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>                
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/cta' ); ?>

    <?php get_template_part( 'template-parts/news', 'posts' ); ?>

    <?php get_template_part( 'template-parts/clients', 'slider' ); ?>

    <?php if( get_field('main_two_col_block_head') ): ?>
        <section class="post">
            <div class="container ">
                <h2 class="avtopark__heading post__heading">
                    <?php the_field('main_two_col_block_head'); ?>
                </h2>

                <h3 class="post__subheading">
                    <?php the_field('main_two_col_block_subhead'); ?>
                </h3>

                <div class="post__cont post-cont row justify-content-between">
                    <div class="post-cont__left col-lg-6 col-12">                    
                        <?php the_field('main_two_col_block_left_text'); ?>                    
                    </div>

                    <div class="post-cont__right col-lg-6 col-12">
                        <?php the_field('main_two_col_block_right_text'); ?>
                    </div>
                </div>            
            </div>
        </section>
    <?php else: ?>
        <section style="display: none">
        </section>
    <?php endif; ?>

    <section class="map">
        <div class="container">
            <h2 class="avtopark__heading map__heading">
                География перевозок
            </h2>
        </div>

        <div class="map__cont map-cont row justify-content-between">
            <div id="map" class="map-cont__map">
            </div>
        
            <script type="text/javascript">
                var myMap;
                ymaps.ready(init); // Инициируем карту

                function init() {
                    myMap = new ymaps.Map("map", {
                    center: [55.755863, 37.6177], // Начальные координаты при загрузке
                    zoom: 10, 
                    controls: ["zoomControl"],
            });           

            // Создаем геообъект с типом геометрии "Точка".
            myGeoObject = new ymaps.GeoObject({
                // Описание геометрии.
                geometry: {
                    type: "Point",
                    coordinates: [55.755863, 37.6177]
                },
                // Свойства.
                properties: {
                    balloonContentHeader: '<figure class="map__image"></figure>',
                    balloonContentBody: '<div class="map__text">город</div>'
                }
            }, {
                // Опции.           
                preset: 'islands#redGlyphIcon'          
                }            
            );

            myMap.geoObjects
            .add(myGeoObject);  

            myMap.behaviors.enable("scrollZoom");

            
          }

            // Создаём функцию передвижения по координатам
            function searchCityCoordinates() {
                event.preventDefault();
                var cityName = document.getElementById("citySearch").value;
                var myGeocoder = ymaps.geocode(cityName);
                myGeocoder.then(
                function (res) {
                    setMapCenter(res.geoObjects.get(0).geometry.getCoordinates());
                },
                function (err) {}
                );
            }            

            // Объявим функцию центр координат и содержимое балуна
            function setMapCenter(cityCoordinates, prop) { // задаём 2 аргумента (координаты и содержимое балуна)
                myMap.geoObjects.removeAll();
                myMap.setCenter(cityCoordinates, 10, { duration: 300 });                

                // console.log(cityCoordinates); - что передается в координатах
                // console.log(prop); - что передаётся в балуне
              
                myMap.geoObjects.add(
                    new ymaps.GeoObject({                    
                        geometry: {
                            type: "Point",
                            coordinates: cityCoordinates,
                        },
                        // В свойствах включаем переменную prop[0] - первый аргумент, и prop[1] - второй аргумент
                        properties: {
                            balloonContentHeader: '<figure class="map__image"><img src="' +prop[0]+'"></figure>',
                            balloonContentBody: '<div class="map__text">' +prop[1]+'</div>'
                        }
                    }, {
                        // Опции метки - красная.           
                        preset: 'islands#redGlyphIcon'          
                        },
                        )
                    );

                myMap.geoObjects
                .add(myGeoObject);  
            }          
        </script>

        <div class="map-cont__right map-list ">
            <h3 class="map-cont__heading">в Москве</h3>

            <div class="search_box">
                <form class="map-cont__form search-box map-box" id="frmSearchCity" onsubmit="return searchCityCoordinates();"> 
                    <input type="text" name="search" id="search" class="search-box__input search-box__input_map" placeholder="найти город"/>
                    <span class="search-box__btn" onclick="searchCityCoordinates();" type="submit" aria-label="Найти город"></span>
                </form>
                <div id="search_box-result"></div>
            </div>
            <ul class="map-list__list">
                

                <!-- Задаём цикл на php добавления городов / меток -->
                <?php if( have_rows('add_placemark', 'options') ): ?>
                <?php while( have_rows('add_placemark', 'options') ): the_row();
                $markImg = get_sub_field('mark_img', 'options');
                $markText = get_sub_field('mark_text', 'options');
                $markCity = get_sub_field('mark_city', 'options');
                $markCoords = get_sub_field('mark_coords', 'options');                    
                ?> 
                    <li class="map-list__item">
                        <!-- Здесь применяем функцию, и в месте памаметров включаем координаты, изображение и текст -->
                        <span                            
                            onclick="setMapCenter([<?= $markCoords; ?>], ['<?php echo $markImg['url']; ?>', '<?= $markText; ?>' ])";
                            ><?= $markCity; ?>
                        </span>
                    </li>

                <?php endwhile; ?>
                <?php endif; ?> 
                
            </ul>            
        </div>
    </section>

<script>
    window.addEventListener('DOMContentLoaded', function(){   
        var $result = $('#search_box-result');
        
        $('#search').on('keyup', function(){
            var search = $(this).val();
            if ((search != '') && (search.length > 1)){
                $.ajax({
                    type: "POST",
                    url: "/wp-content/themes/e-store/ajax_search.php",
                    data: {'search': search},
                    success: function(msg){
                        $result.html(msg);
                        if(msg != ''){	
                            $result.fadeIn();
                        } else {
                            $result.fadeOut(100);
                        }
                    }
                });
            } else {
                $result.html('');
                $result.fadeOut(100);
            }
        });
    
        $(document).on('click', function(e){
            if (!$(e.target).closest('.search_box').length){
                $result.html('');
                $result.fadeOut(100);
            }
        });
        
        $(document).on('click', '.search_result-name a', function(){
            $('#search').val($(this).text());
            $result.fadeOut(100);
            return false;
        });
        
        $(document).on('click', function(e){
            if (!$(e.target).closest('.search_box').length){
                $result.html('');
                $result.fadeOut(100);
            }
        });
            
        

        // Табы на главной в разделе Преимущества

        // Открытие табов с верхних кнопок
        document.querySelectorAll('.advantages__link').forEach(function(pagLink3){
            pagLink3.addEventListener('click', function(event3){
            event3.preventDefault();
            const path3 = event3.currentTarget.dataset.path3;       

            document.querySelectorAll('.advantages__under').forEach(function(item3){
                item3.classList.remove('item-active');
            });

            document.querySelector(`[data-item3='${path3}']`).classList.add('item-active');

            document.querySelectorAll('.adv-art').forEach(function(pagArticle){
                pagArticle.classList.remove('adv-art-active');
            });

            document.querySelector(`[data-target3="${path3}"]`).classList.add('adv-art-active');
            });

        });

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