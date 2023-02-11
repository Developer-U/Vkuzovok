<?php
/*
Template Name: Контакты
*/
get_header();
?>
    
    <section class="hero-section contacts">
        <div class="container">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
            ?>

            <h1 class="avtopark__heading price-page__heading">
                <?php the_title(); ?>
            </h1>

            <div class="contacts__cont contacts-cont contacts-cont-first">
                <div class="contacts-cont__text contacts-cont__text_first">
                    <?php the_content(); ?>
                </div>
            </div>

            <div class="contacts__cont contacts-cont row justify-content-between">
                <div class="contacts-cont__item col-md-4 col-12">
                    <h2 class="contacts-cont__heading">
                        Линия консультаций
                    </h2>

                    <p class="contacts-cont__text">
                        <?php the_field('consult_text', 'options'); ?>
                    </p>

                    <ul class="contacts-cont__social cont-social row justify-content-between">
                        <?php if(get_field('telegram_link', 'options')): ?>
                            <li class="cont-social__item">
                                <a href="https://t.me/<?php the_field('telegram_link', 'options'); ?>" class="cont-social__link">
                                    <svg class="cont-social__img">
                                        <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#telegram"></use>                                                   
                                    </svg>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if( get_field( 'whatsapp_link', 'options' ) ): ?>
                            <li class="cont-social__item">
                                <a href="https://api.whatsapp.com/send?phone=7<?php the_field('whatsapp_link', 'options'); ?>" class="cont-social__link">
                                    <svg class="cont-social__img">
                                        <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#whatsapp"></use>                                                   
                                    </svg>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if( get_field( 'skype_login', 'options' ) ): ?>
                            <li class="cont-social__item">
                                <a href="Skype:<?php the_field('skype_login', 'options'); ?>?add" class="cont-social__link">
                                    <svg class="cont-social__img">
                                        <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#skype"></use>                                                   
                                    </svg>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>

                <div class="contacts-cont__item col-md-4 col-12">
                    <h2 class="contacts-cont__heading">
                        Обратная связь
                    </h2>

                    <p class="contacts-cont__text">
                        <?php the_field('anketa_text', 'options'); ?>
                    </p>

                    <button class="contacts-cont__btn js-anketaOpen">ЗАПОЛНИТЬ АНКЕТУ</button>
                </div>

                <div class="contacts-cont__item col-md-4 col-12">
                    <h2 class="contacts-cont__heading">
                        Наши страницы в соцсетях
                    </h2>

                    <ul class="contacts-cont__call call-cont row justify-content-between">
                        <?php if( get_field( 'vk_link', 'options' ) ): ?>
                            <li class="call-cont__item">
                                <a href="<?php the_field('vk_link', 'options'); ?>" class="call-cont__link">
                                    <svg class="call-cont__img">
                                        <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#vk-call"></use>                                                   
                                    </svg>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if(get_field('telegram_link', 'options')): ?>
                            <li class="call-cont__item">
                                <a href="https://t.me/<?php the_field('telegram_link', 'options'); ?>" class="call-cont__link">
                                    <svg class="call-cont__img">
                                        <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#telegram"></use>                                                   
                                    </svg>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

            <div class="contacts__cont contacts-cont contacts-cont-third row justify-content-between">
                <div class="contacts-cont__item col-md-4 col-12">
                    <h2 class="contacts-cont__heading">
                        Телефоны
                    </h2>

                    <div class="contacts-cont__phones">
                        <p class="contacts-cont__phone"><a href="tel:+7<?php the_field('phone_hot_link', 'options'); ?>"><?php the_field('phone_hot_num', 'options'); ?></a> - круглосуточно.</p>

                        <p class="contacts-cont__phone"><a href="tel:+7<?php the_field('phone_kanal_link', 'options'); ?>"><?php the_field('phone_kanal_num', 'options'); ?></a> - с 9.00 до 21.00</p>
                    </div>                    

                    <p class="contacts-cont__text">
                        Если звонок по заказу - пожалуйста звоните с номера, который указан как контактный телефон при 
                        оформлении заказа. Это очень ускорит решение вашего вопроса.
                    </p>

                    <p class="contacts-cont__phone">
                        Смс, телеграмм, вибер, воцап - по срокам
                    </p>
                </div>

                <div class="contacts-cont__item col-md-4 col-12">
                    <h2 class="contacts-cont__heading">
                        E-mail
                    </h2>

                    <a class="contacts-cont__mail" href="mailto:<?php the_field('mail_link', 'options'); ?>">mailto:<?php the_field('mail_link', 'options'); ?></a>
                </div>

                <div class="contacts-cont__item col-md-4 col-12">
                    <h2 class="contacts-cont__heading">
                        Back-офис
                    </h2>

                    <p class="contacts-cont__text">
                        <?php the_field('back_office_address', 'options'); ?>
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="map-about">
        <div class="container">
            <h2 class="avtopark__heading price-page__heading">Офис</h2>

            <p class="contacts-cont__text">
                <?php the_field('main_address', 'options'); ?>
            </p>            
        </div>        
    </section>

    <?php get_template_part( 'template-parts/map' ); ?>

    <section class="rekviz contacts">
        <div class="container">
            <h2 class="avtopark__heading price-page__heading">Реквизиты</h2>

            <ul class="rekviz__list">
                <?php if( have_rows('new_rekviz_item', 'options' ) ): ?>
                <?php while( have_rows('new_rekviz_item', 'options') ): the_row();                
                $rekvizItem = get_sub_field('rekviz_item', 'options');                
                ?>

                    <li class="rekviz__item"><?= $rekvizItem; ?></li>

                <?php endwhile; ?>
                <?php endif; ?>                
            </ul>
        </div>        
    </section>

    <!-- Попап заполнить анкету -->
    <div class="popup form-popup js-anketaPopup">
        <div class="js-scroll form-popup__scrolling">          
            <div class="container form-popup__cont">
                <button class="popup__close form-popup__close js-anketaClose">
                    <svg class="popup__img">
                        <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#close"></use>                                                   
                    </svg>
                </button>                                    

                <h3 class="popup__heading">
                    Заполните анкету
                </h3>

                <div id="anketaForm" class="popup__form">
                    <?php echo do_shortcode('[contact-form-7 id="669" title="Форма в попапе Заполнить анкету"]'); ?>
                </div>
            </div>
        </div>
    </div>


<script>
    window.addEventListener('DOMContentLoaded', function(){
        // Сначала объявим функцию FadeIn

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
        
        // Открытие попапа Заполнить анкету
        var vacField = document.querySelector('.js-anketaPopup');
        var vacFieldOpen = document.querySelector('.js-anketaOpen'); 
        var vacClose = document.querySelector('.js-anketaClose'); 
        var flag = false;  

        vacFieldOpen.addEventListener('click', function(event){ 
            if(!flag) {
            fadeIn(vacField, 300, 'flex');
                    
            document.querySelector('body').classList.add('closed');

            } else {
                fadeOut(vacField, 300);
                
                document.querySelector('body').classList.remove('closed');
            }
            
            vacClose.addEventListener('click', function(){
                fadeOut(vacField, 300);

                document.querySelector('body').classList.remove('closed'); 
            });

            vacField.addEventListener('click', function(event){
                if(this == event.target) {
                    fadeOut(vacField, 300);

                    document.querySelector('body').classList.remove('closed');
                }                     
            }); 
            
            
            // Присвоим форме ID
            var anketaForm = document.querySelector('#anketaForm form');
            anketaForm.setAttribute('id','ankForm');

            // Всплытие окна Спасибо после отправки формы
            document.querySelector('#ankForm').addEventListener( 'wpcf7mailsent', function( event ) {

            document.querySelector('.popup-thanks').classList.add('thanks-active'); 
                    
            fadeOut(vacField, 300);    
                document.querySelector('body').classList.remove('closed');  

            setTimeout(() => {
                document.querySelector('.popup-thanks').classList.remove('thanks-active'); 
            }, 2500 );  

            }, false );
        });

    });
</script>

<?php

get_footer(); ?>