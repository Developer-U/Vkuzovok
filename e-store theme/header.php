<?php
/**
 * @package estore
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon.ico"> 
    
    <script src="https://api-maps.yandex.ru/2.1/?apikey=68f9a0ea-6fba-4a6e-9f0a-5a716b0b30d5&lang=ru_RU">
    </script>

	<?php wp_head(); ?>
</head>

<body>    
    <?php
    if( is_front_page() ) {
        get_template_part('template-parts/plashka', 'all');
    } else if( is_page('about') || is_page('drivers') ) {
        get_template_part('template-parts/plashka', 'four');
    } else if( is_page('catalog') || is_page('prices') || is_page('autopark') || is_page('blog') || is_page('reviews')) {
        get_template_part('template-parts/plashka', 'three');
    } else if( is_page('calculator') ) {
        get_template_part('template-parts/plashka', 'two');
    } else if( is_page('faq') || is_page('vacancy') || is_page('site-map')) {
        get_template_part('template-parts/plashka', 'one');
    }
    ?>

    <header class="header">
        <div class="container header__cont row">
            <div class="header__top row align-items-center justify-content-between">
                <div class="header__city col-lg-2 col-4 left-top">
                    <p class="left-top__select">
                        Ваш город: <a class="left-top__link" href="#"><?php echo do_shortcode('[wt_geotargeting get="city"]'); ?></a>

                        <div class="left-top__choose">
                            <button class="popup__close js-cityClose">
                                <svg class="popup__img">
                                    <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#close"></use>                                                   
                                </svg>
                            </button>

                           <div class="left-top__button row align-items-center justify-content-between">
                                <p class="left-top__text">Ваш город<?php echo do_shortcode('[wt_geotargeting get="city"]'); ?>?</p>

                                <button class="left-top__btn">да</button>
                           </div>

                           <form class="bottom-box__form search-box city-box">
                                <input type="text" class="search-box__input search-box__input_city" placeholder="Поиск"> 
                                
                                <button class="search-box__btn" type="submit" aria-label="Найти город"></button>
                            </form>

                            <p class="search-text">
                                Поиск&nbsp;по&nbsp;адресу, назаванию или почтовому&nbsp;индексу
                            </p>

                            <div id="cityList" class="left-top__list city-list js-scroll" data-simplebar="init">
                                <ul >
                                    <?php if( have_rows('add_new_city', 'options') ): ?>
                                    <?php while( have_rows('add_new_city', 'options') ): the_row();
                                        $cityName = get_sub_field('city', 'options');                                                               
                                    ?>

                                        <li class="left-top__item">
                                            <a class="left-top__one" href="/?wt_city_by_default=<?= $cityName ?>"><?= $cityName ?></a>
                                        </li>

                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>                        
                    </p>
                </div>

                <?php estore_primary_menu(); ?>

                <bottom class="header__btn col-2 js-openLogin">Войти</bottom>
            </div>

            <div class="header__bottom header-box">
                <div class="header-box__top row align-items-center justify-content-between">
                    <div class="header-box__left row align-items-center col-xl-8 col-9">

                        <?php 
                        $logoImg = get_field('logo_image', 'options');                                                    
                        ?> 

                        <a href="/" class="header-box__image">
                            <img class="header-box__img" src="<?php echo esc_url($logoImg['url']); ?>" alt="<?php echo esc_attr($logoImg['alt']); ?>">
                        </a>

                        <?php 
                        $worktime = get_field( 'work_time', 'options');
                        if($worktime): ?>    
                            <time class="header-box__text header-box__text_time">
                                <?php echo $worktime; ?>                                                               
                            </time>
                        <?php else: ?>
                            <time class="header-box__text header-box__text_time" style="opacity:0"></time>
                        <?php endif; ?> 
    
                        <?php 
                        $address = get_field( 'address', 'options');
                        if($address): ?>
                            <address class="header-box__text header-box__text_address">                                
                                <?php echo $address; ?>                               
                            </address>
                        <?php else: ?>
                        <time class="header-box__text header-box__text_address" style="opacity:0"></time>
                        <?php endif; ?>
                    </div>                    

                    <div class="header-box__right col-3 row justify-content-between">
                        <a href="tel:+7<?php the_field('phone_link', 'options'); ?>" class="header-box__phone col"><?php the_field('phone_num', 'options'); ?></a>

                        <ul class="header-box__social social-top row justify-content-between">
                            <?php if( get_field( 'telegram_link', 'options' ) ): ?>
                                <li class="social-top__item">
                                    <a href="https://t.me/<?php the_field('telegram_link', 'options'); ?>" class="social-top__link">
                                        <svg class="social-top__img">
                                            <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#telegram"></use>                                                   
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>
    
                            <?php if( get_field( 'whatsapp_link', 'options' ) ): ?>
                                <li class="social-top__item">
                                    <a href="https://api.whatsapp.com/send?phone=7<?php the_field('whatsapp_link', 'options'); ?>" class="social-top__link">
                                        <svg class="social-top__img">
                                            <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#whatsapp"></use>                                                   
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

                <div class="header-box__bottom bottom-box row align-items-center justify-content-between">
                    <div class="bottom-box__left col-xl-8 col-9 row align-items-center justify-content-between">
                        <button class="burger" aria-label="Открыть меню">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                        <a href="/" class="logo-mobile">
                            <img class="header-box__img" src="<?php echo esc_url($logoImg['url']); ?>" alt="<?php echo esc_attr($logoImg['alt']); ?>">
                        </a>
    
                        <?php estore_secondary_menu(); ?>

                        <button class="bottom-box__btn js-calcOpen">                        
                            <span class="btn-inside row align-items-center justify-content-between">
                                <svg class="btn-inside__img">
                                    <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#calculator"></use>                                                   
                                </svg>

                                <p class="btn-inside__text">калькулятор доставки</p>
                            </span>                            
                        </button>

                        <button class="calc-to-open js-calcOpen"> 
                            <svg class="calc-to-open__img">
                                <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#calc-mobile"></use>                                                   
                            </svg>                 
                        </button>
                    </div>

                    <div class="col-md-7 col-12 for-form row justify-content-between">
                        <form class="for-form__form search-box-mobile col js-search" action="<?php echo home_url( '/' ) ?>">
                            <input type="text" class="search-box__input search-box__input_mobile" placeholder="Поиск" value="<?php echo get_search_query(); ?>" name="s" id="s"> 
                            
                            <button class="search-box__btn search-box__btn_mobile" type="submit" aria-label="Найти"></button>
                        </form> 

                        <div class="result-search">
                            <div class="preloader"><img src= "<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/loader.gif" class="loader" /></div>
                            <div class="result-search-list"></div>
                        </div>
    
                        <button class="search-box__close js-closeSearch">
                            <svg class="popup__img">
                                <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#close"></use>                                                   
                            </svg>
                        </button> 
                    </div>

                    <button id="searchOpen" class="search search-box__btn search-to-open" aria-label="Открыть поле поиска"></button> 

                    <form class="bottom-box__form search-box js-search" action="<?php echo home_url( '/' ) ?>">
                        <input type="text" class="search-box__input" placeholder="Поиск" value="<?php echo get_search_query(); ?>" name="s" id="s"> 
                        
                        <button class="search-box__btn" type="submit" aria-label="Найти"></button>

                        <div class="result-search">
                            <div class="preloader"><img src= "<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/loader.gif" class="loader" /></div>
                            <div class="result-search-list"></div>
                        </div>
                    </form>                                      
                </div>
            </div>
        </div>        
    </header>
	


