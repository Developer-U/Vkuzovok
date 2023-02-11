<?php
/**
 * The template for displaying the footer
 *
 *
 * @package estore
 */

?>

    <footer class="footer">
        <div class="container footer__inner">
            <div class="footer__top footer-top row align-items-center justify-content-between">
            <?php 
                $logoImg = get_field('logo_image_footer', 'options');                                                    
            ?>

                <a href="/" class="footer-top__logo">
                    <img class="footer-top__img" src="<?php echo esc_url($logoImg['url']); ?>" alt="<?php echo esc_attr($logoImg['alt']); ?>">
                </a>

                <a href="tel:+7<?php the_field('phone_link', 'options'); ?>" class="footer-top__phone col-auto"><?php the_field('phone_num', 'options'); ?></a>

                <button class="footer-top__btn js-zayavkaOpen">оставить заявку</button>

                <ul class="footer-top__social footer-icons row">
                    <?php if(get_field('telegram_link', 'options')): ?>
                        <li class="footer-top__item col-auto">
                            <a href="https://t.me/<?php the_field('telegram_link', 'options'); ?>" class="social-top__link social-top__link_footer">
                                <svg class="footer-top__icon">
                                    <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#telegram-footer"></use>                                                   
                                </svg>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(get_field('vk_link', 'options')): ?>
                        <li class="footer-top__item col-auto">
                            <a href="<?php the_field('vk_link', 'options'); ?>" class="social-top__link social-top__link_footer">
                                <svg class="footer-top__icon">
                                    <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#vk-footer"></use>                                                   
                                </svg>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(get_field('youtube_link', 'options')): ?>
                        <li class="footer-top__item col-auto">
                            <a href="<?php the_field('youtube_link', 'options'); ?>" class="social-top__link social-top__link_footer">
                                <svg class="footer-top__icon">
                                    <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#youtube-footer"></use>                                                   
                                </svg>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(get_field('whatsapp_link', 'options')): ?>
                        <li class="footer-top__item col-auto">
                            <a href="https://api.whatsapp.com/send?phone=7<?php the_field('whatsapp_link', 'options'); ?>" class="social-top__link social-top__link_footer">
                                <svg class="footer-top__icon">
                                    <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#whatsapp-footer"></use>                                                   
                                </svg>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(get_field('viber_link', 'options')): ?>
                        <li class="footer-top__item col-auto">
                            <a href="<?php the_field('viber_link', 'options'); ?>" class="social-top__link social-top__link_footer">
                                <svg class="footer-top__icon">
                                    <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#viber-footer"></use>                                                   
                                </svg>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>

            <div class="footer__main footer-main row">
                <div class="footer-main__left footer-menu row">
                    <div class="footer-main__box col-sm-4 col-12">
                        <h3 class="footer-main__heading js-openFilters" data-path4="one">
                            о компании

                            <svg class="footer-main__open js-iconOpen" data-link4="one">
                                <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#accordion-down"></use>                                                   
                            </svg>
                        </h3>

                        <ul class="footer-menu__list" data-target4="one">              
                            <?php estore_about_menu(); ?>
                        </ul>
                    </div>

                    <div class="footer-main__box col-sm-8 col-12">
                        <h3 class="footer-main__heading js-openFilters" data-path4="two">                            
                            услуги

                            <svg class="footer-main__open js-iconOpen" data-link4="two">
                                <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#accordion-down"></use>                                                   
                            </svg>
                        </h3>

                        <div class="footer-main__block row">
                            <ul class="footer-menu__list col-6" data-target4="two">
                                <?php 
                                    estore_services1_menu();
                                ?>
                            </ul>

                            <ul class="footer-menu__list col-6">
                                <?php estore_services2_menu(); ?>                             
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="footer-main__right right-footer row">
                    <div class="right-footer__left col-sm-6 col-12">
                        <h3 class="footer-main__heading">
                            ГРАФИК РАБОТЫ
                        </h3>

                        <?php if(get_field('rezhim_budni', 'options') ): ?>
                            <time class="right-footer__time"><?php the_field('rezhim_budni', 'options'); ?></time>
                        <?php endif; ?>
                        <?php if(get_field('rezhim_vihod', 'options') ): ?>
                            <time class="right-footer__time"><?php the_field('rezhim_vihod', 'options'); ?></time>
                        <?php endif; ?>

                        <h3 class="footer-main__heading">
                            принимаем
                        </h3>

                        <ul class="right-footer__cards footer-cards row justify-content-between">

                        <?php if( have_rows('add_new_card', 'options') ): ?>
                        <?php while( have_rows('add_new_card', 'options') ): the_row();
                            $cardImg = get_sub_field('card_image', 'options');                                                               
                        ?>

                            <li class="footer-cards__item col-4">
                                <img src="<?php echo esc_url($cardImg['url']); ?>" alt="<?php echo esc_attr($cardImg['alt']); ?>" class="footer-cards__img">
                            </li>
                            
                        <?php endwhile; ?>
                        <?php endif; ?>
                        </ul>
                    </div>

                    <div class="right-footer__right col-sm-6 col-12">
                        <div class="right-footer__box">
                            <h3 class="footer-main__heading">
                                контакты
                            </h3>
    
                            <?php if( get_field('phone_hot_link', 'options')): ?>
                                <p class="right-footer__text">
                                    Бесплатно по России
                                </p>
                            <?php endif; ?>
    
                            <a href="tel:+7<?php the_field('phone_hot_link', 'options'); ?>" class="footer-top__phone"><?php the_field('phone_hot_num', 'options'); ?></a>
                        </div>
                        
                        <div class="right-footer__box">
                            <p class="right-footer__text">
                                Многоканальный
                            </p>
    
                            <a href="tel:+7<?php the_field('phone_kanal_link', 'options'); ?>" class="footer-top__phone"><?php the_field('phone_kanal_num', 'options'); ?></a>
                        </div>

                        <a class="right-footer__mail" href="mailto:<?php the_field('mail_link', 'options'); ?>"><?php the_field('mail_link', 'options'); ?></a>

                        
                    </div>
                </div>
            </div>

            <ul class="footer-icons-mobile row">             
                <?php if( get_field( 'telegram_link' ) ): ?>
                    <li class="footer-top__item col-auto">
                        <a href="https://t.me/<?php the_field('telegram_link', 'options'); ?>" class="social-top__link social-top__link_footer">
                            <svg class="footer-top__icon">
                                <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#telegram-footer"></use>                                                   
                            </svg>
                        </a>
                    </li>            
                <?php endif; ?>

                <?php if( get_field( 'vk_link', 'options' ) ): ?>
                    <li class="footer-top__item col-auto">
                        <a href="<?php the_field('vk_link', 'options'); ?>" class="social-top__link social-top__link_footer">
                            <svg class="footer-top__icon">
                                <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#vk-footer"></use>                                                   
                            </svg>
                        </a>
                    </li>                
                <?php endif; ?>

                <?php if( get_field( 'youtube_link' ) ): ?>
                    <li class="footer-top__item col-auto">
                        <a href="<?php the_field('youtube_link', 'options'); ?>" class="social-top__link social-top__link_footer">
                            <svg class="footer-top__icon">
                                <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#youtube-footer"></use>                                                   
                            </svg>
                        </a>
                    </li>        
                <?php endif; ?>

                <?php if( get_field( 'whatsapp_link', 'options' ) ): ?>
                    <li class="footer-top__item col-auto">
                        <a href="https://api.whatsapp.com/send?phone=7<?php the_field('whatsapp_link', 'options'); ?>" class="social-top__link social-top__link_footer">
                            <svg class="footer-top__icon">
                                <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#whatsapp-footer"></use>                                                   
                            </svg>
                        </a>
                    </li>            
                <?php endif; ?>

                <?php if( get_field( 'viber_link', 'options' ) ): ?>
                    <li class="footer-top__item col-auto">
                        <a href="<?php the_field('viber_link', 'options'); ?>" class="social-top__link social-top__link_footer">
                            <svg class="footer-top__icon">
                                <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#viber-footer"></use>                                                   
                            </svg>
                        </a>
                    </li>            
                <?php endif; ?>
            </ul>

            <p class="footer__copiright">
                © <?php the_field('copyright', 'options'); ?>
            </p>
        </div>
    </footer>

   <!-- Кнопка вверх -->
   <button class="to-top" aria-label="Наверх"></button>

    <!-- Кнопка открыть калькулятор -->
    <button class="calc-open js-calcOpen" aria-label="Открыть калькулятор"></button>

    <!-- Всплывающее окно спасибо -->
    <div class="popup-thanks">
        <div class="popup-thanks__contain">
            <h3 class="popup__heading">
                <?php the_field('thanks_text', 'options'); ?>
            </h3>
        </div>
    </div>
    

    <!-- Всплывающее меню -->
    <section class="main-menu">
        <div class="container">
            <div class="tel-mobile col-10 row justify-content-between">
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

            <ul class="menu-top__list main-menu__mobile row justify-content-between">
                <?php estore_primary_menu(); ?>
            </ul> 

            <ul class="main-menu__items row justify-content-between">
                <li class="main-menu__item col-3">
                    <h3 class="main-menu__heading" data-path="one">перевозки</h3>

                    <ul class="main-menu__sub sub-list" data-target="one">

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

                            <li class="sub-list__item">
                                <a class="sub-list__link" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>                            
                            </li>

                        <?php } 
                        }
                        wp_reset_postdata(); // сброс
                        ?> 
                        
                    </ul>
                </li>

                <li class="main-menu__item col-3">
                    <h3 class="main-menu__heading" data-path="two">аренда</h3>

                    <ul class="main-menu__sub sub-list" data-target="two">

                        <?php                            
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

                            <li class="sub-list__item">
                                <a class="sub-list__link" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>                            
                            </li>

                        <?php } 
                        }
                        wp_reset_postdata(); // сброс
                        ?> 
                    </ul>

                </li>
                <li class="main-menu__item col-3">
                    <h3 class="main-menu__heading" data-path="three">для бизнеса</h3>

                    <ul class="main-menu__sub sub-list" data-target="three">
                        <?php
                            
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

                            <li class="sub-list__item">
                                <a class="sub-list__link" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>                            
                            </li>

                        <?php } 
                        }
                        wp_reset_postdata(); // сброс
                        ?> 
                    </ul>
                </li>
                <li class="main-menu__item col-3">
                    <h3 class="main-menu__heading" data-path="four">другие услуги</h3>

                    <ul class="main-menu__sub sub-list" data-target="four">
                        <li class="sub-list__item">
                            <a href="#" class="sub-list__link">Доставка для интернет-магазинов</a>
                        </li>
                        
                    </ul>
                </li>
            </ul>
        </div> 
    </section>   

    <!-- Всплывающее окно заказать машину -->
    <section class="popup for-zakaz">
        <div class="js-scroll popup__scrolling2">
            <div class="popup__cont popup-zakaz">
                <button class="popup__close js-carClose">
                    <svg class="popup__img">
                        <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#close"></use>                                                   
                    </svg>
                </button>
    
                <h2 class="popup__heading">Заказать машину</h2>

                <?php get_template_part( 'template-parts/block', 'calculator', array('footer'=> true) ); ?>
                
            </div>
        </div>        
    </section>

    <!-- Всплывающее окно калькулятор доставки -->
    <section class="popup for-calc-popup">
        <div class="js-scroll zayavka-main__cont container zayavka-relative"> 
             <button class="popup__close calc-popup-close js-calcClose">
                <svg class="popup__img">
                    <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#close"></use>                                                   
                </svg>
            </button> 

            <div class="container zayavka__cont">
                <h2 class="avtopark__heading zayavka__heading calc-popup-heading">Калькулятор перевозок</h2>

                <?php get_template_part( 'template-parts/block', 'calculator', array('footer'=> true) ); ?>            
            </div>           
        </div>
    </section>

    <!-- Всплывающее окно Оставить заявку -->
    <section class="popup form-popup js-zayavkaPopup">
        <div class="js-scroll form-popup__scrolling">          
            <div class="container form-popup__cont">
                <button class="popup__close form-popup__close js-zayavkaClose">
                    <svg class="popup__img">
                        <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#close"></use>                                                   
                    </svg>
                </button>            
    
                <h2 class="popup__heading">Оставить заявку</h2>

                <p class="popup__subheading">
                    Заполните форму и&nbsp;мы&nbsp;Вам перезвоним 
                </p>
    
                <div class="js-сta-form popup__form popup-form" action="#">
                    <?php echo do_shortcode('[contact-form-7 id="1071" title="POPUP Оставить заявку в футере"]'); ?>
                </div>
            </div>           
        </div>
    </section>

    <!-- Попап Логин/пароль -->
    <div id="consPopup" class="popup js-loginPopup">
        <div class="login-btn__contain js-scroll">
            <button id="consClose" class="login-btn__close js-loginClose">
                <svg class="popup__img">
                    <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#close"></use>                                                   
                </svg>
            </button>

            <div class="login-btn__forms row justify-content-between">
                <div class="col-xl-5 col-md-6 col-12 login-btn__cont">
                    <h2 class="popup__heading">Зарегистрироваться</h2>

                    <?php echo do_shortcode('[user_registration_form id="723"]'); ?>
                </div>
                
                <div class="col-xl-5 col-md-6 col-12 login-btn__cont">
                    <h2 class="popup__heading">Войти</h2>

                    <?php echo do_shortcode('[user_registration_my_account]'); ?>
                </div>
            </div>
                    
        </div>
    </div>

<?php wp_footer(); ?>

</body>
</html>

<script>
    window.addEventListener('DOMContentLoaded', function(){        
    
        function calcAuto(thecontent) {
            
            // Калькулятор в попапе

            // Присвоим форме ID
            var newAvtoparkPopupForm = thecontent.querySelector('#popupCalcFormFor form'); 
            newAvtoparkPopupForm.setAttribute('id', 'readyServicePopupForm');

            // Вначале объявим глобально переменные для итогового подсчёта
            // Выбор машины в калькуляторе       
                      
            var elementP = thecontent.querySelector('#carChoosePopup');   
           
            

           var elementPParent = elementP.closest('.zayavka');           
      
            var basePriceP = thecontent.querySelector('li.js-price').textContent; // Базовая цена в зависимости от машины        
            var kilometrazhP = thecontent.querySelector('input#kilometrazhPopup').value; // Базовый километраж            
            var hourPriceP = thecontent.querySelector('li.js-hours').textContent; // Цена за час по машине
            var val3 = thecontent.querySelector( '#timePopup' ).value; // Количество часов            
            var priceCarP = basePriceP * kilometrazhP // Стоимость машины в зависимости от клилометража            
            var hourPriceTotalP = hourPriceP * val3 // Стоимость по количеству часов
            var priceFree = priceCarP + hourPriceTotalP // Итого (без грузчиков и пассажиров)            

            var gruzchikPriceP = <?php the_field('gruzchik_price', 'options'); ?>;  // Цена за одного грузчика в час
            var gruzchikQtyP = 0;  // Количество грузчиков
            var gruzchikPriceTotalP = gruzchikPriceP * gruzchikQtyP;  // Стоимость всех грузчиков             

            var totalPriceP = priceFree + gruzchikPriceTotalP; // ИТОГО цена           

            var readyPopupBtn = thecontent.querySelector('#readyServicePopup');
        
            readyPopupBtn.value= `успей заказать за ${totalPriceP} ₽ ` // В кнопке значение ИТОГО

            var eachFormP = thecontent.querySelector('#readyServicePopupForm'); 

            // Вычислим значение каждой цены в зависимоти от машины
            // + выбор нужной машины
            elementP.addEventListener('change', function(event){
                var car = this.value;
                
                var parentForm = this.closest('.zayavka__form');
                // console.log(parentForm);

                parentForm.querySelectorAll("[data-params2Popup]").forEach(function(tabContent){
                    tabContent.style.display = 'none'; 
                                     
                });

                needTab = parentForm.querySelector('[data-params2Popup='+car+']');                
                needTab.style.display = 'block';
              

                // Цена за 1 км по машине
                basePriceP = needTab.querySelector('li.js-price').textContent;
                // console.log(basePriceP);

                // Цена за 1 час по машине
                hourPriceP = needTab.querySelector('li.js-hours').textContent;

                priceCarP = basePriceP * kilometrazhP;
                hourPriceTotalP = hourPriceP * val3;
                priceFree = priceCarP + hourPriceTotalP;
                recountP(); 
            });

            

            let btns = thecontent.querySelectorAll('.calc__btn'); // все кнопки в текущем контейнере
                /********************/
            
            btns.forEach(function(btn){
                // 1. Километраж, км  
                btn.addEventListener('click', function(e){
                    e.preventDefault(); 

                    // Переменные для input Километраж
                    let qty0 = thecontent.querySelector( '#kilometrazhPopup' ),               
                    val0 = parseInt( qty0.value ),		
                    min0 = parseInt( qty0.getAttribute( 'min' ) ),
                    max0 = parseInt( qty0.getAttribute( 'max' ) ),
                    step0 = parseInt( qty0.getAttribute( 'step' ) );                     

                    // Переменные для input Грузчики
                    let qty = thecontent.querySelector( '#cornersPopup' ),               
                    val = parseInt( qty.value ),		
                    min = parseInt( qty.getAttribute( 'min' ) ),
                    max = parseInt( qty.getAttribute( 'max' ) ),
                    step = parseInt( qty.getAttribute( 'step' ) );               
                  

                    // Переменные для Продолжительность                        
                    var qty3 = thecontent.querySelector( '#timePopup' ),
                    val3 = parseInt( qty3.value ),		
                    min3 = parseInt( qty3.getAttribute( 'min' ) ),
                    max3 = parseInt( qty3.getAttribute( 'max' ) ),
                    step3 = parseInt( qty3.getAttribute( 'step' ) );


                    // дальше меняем значение количества в зависимости от нажатия кнопки Плюс и минус
                    if(btn.classList.contains('plus') && btn.classList.contains('js-plusKmPopup')) {
                        if ( max0 && ( max0 <= val0 ) ) {
                            qty0.value = max0;
                        } else {				
                            qty0.value = (val0 + step0);  

                            // value - итоговое количество км
                            kilometrazhP = val0 + step0;                                                     
                            priceCarP = basePriceP * kilometrazhP;                            
                            hourPriceTotalP = hourPriceP * val3 // Стоимость по количеству часов
                       
                            priceFree = priceCarP + hourPriceTotalP // Итого (без грузчиков и пассажиров)                    
                            recountP();
                        }
                    } else if(btn.classList.contains('minus') && btn.classList.contains('js-minusKmPopup')) {
                        if ( min0 && ( min0 >= val0 ) ) {
                            qty0.value = min0;
                        } else if ( val0 > 1 ) {
                            qty0.value = ( val0 - step0 );
                            kilometrazhP = val0 - step0;                          
                            priceCarP = basePriceP * kilometrazhP;
                            hourPriceTotalP = hourPriceP * val3 // Стоимость по количеству часов
                            priceFree = priceCarP + hourPriceTotalP // Итого (без грузчиков и пассажиров)                
                            recountP();
                        }
                    } else if(btn.classList.contains('plus') && btn.classList.contains('js-plusPopup1')) {

                        // 2. Количество грузчиков                           
                        if ( max && ( max <= val ) ) {
                            qty.value = max;
                        } else {				
                            qty.value = (val + step); 

                            // value - итоговое количество грузчиков
                            gruzchikQtyP = val + step;
                            gruzchikPriceTotalP = gruzchikPriceP * gruzchikQtyP;                                
                            recountP();                    
                        }
                    } else if(btn.classList.contains('minus') && btn.classList.contains('js-minusPopup1')) {
                        if ( min && ( min >= val ) ) {
                            qty.value = min ;
                        } else if ( val > 0 ) {
                            qty.value = ( val - step );
                            gruzchikQtyP = val - step;
                            gruzchikPriceTotalP = gruzchikPriceP * gruzchikQtyP;
                            recountP();
                        }
                    }  else if(btn.classList.contains('plus') && btn.classList.contains('js-plus3Popup')) {
                        // 3. Продолжительность 
                        if ( max3 && ( max3 <= val3 ) ) {
                            qty3.value = max3 ;
                        } else {				
                            qty3.value = ( val3 + step3 );
                            
                            val3 = val3 + step3;                                    
                            hourPriceTotalP = hourPriceP * val3 // Стоимость по количеству часов
                            priceFree = priceCarP + hourPriceTotalP // Итого (без грузчиков и пассажиров) 
                            recountP();
                        }

                    } else if(btn.classList.contains('minus') && btn.classList.contains('js-minus3Popup')) {
                        if ( min3 && ( min3 >= val3 ) ) {
                            qty3.value = min3;
                        } else if ( val3 > 1 ) {
                            qty3.value = ( val3 - step3 );
                            val3 = val3 - step3;
                                    
                            hourPriceTotalP = hourPriceP * val3 // Стоимость по количеству часов
                            priceFree = priceCarP + hourPriceTotalP // Итого (без грузчиков и пассажиров)
                            recountP();
                        }
                    }
                });
                
            });

            // Расчёт километража в случае, если ввели цифру руками
            thecontent.querySelector('input#kilometrazhPopup').addEventListener('change', function(event){
                kilometrazhP = this.value;                          
                priceCarP = basePriceP * kilometrazhP;
                hourPriceTotalP = hourPriceP * val3 // Стоимость по количеству часов
                priceFree = priceCarP + hourPriceTotalP // Итого (без грузчиков и пассажиров)                
                recountP();
            });


                // Применение промокода
            
                var code1 = '<?php the_field('promo1', 'options') ?>'
                ,code2 = '<?php the_field('promo2', 'options') ?>'
                ,code3 = '<?php the_field('promo3', 'options') ?>'
                ,code4 = '<?php the_field('promo4', 'options') ?>'
                ,code5 = '<?php the_field('promo5', 'options') ?>'
                ,code6 = '<?php the_field('promo6', 'options') ?>'
                ,code7 = '<?php the_field('promo7', 'options') ?>'
                ,code8 = '<?php the_field('promo8', 'options') ?>'
                ,code9 = '<?php the_field('promo9', 'options') ?>'
                ,code10 = '<?php the_field('promo10', 'options') ?>';

                var codes = [
                    code1,
                    code2,
                    code3,
                    code4,
                    code5,
                    code6,
                    code7,
                    code8,
                    code9,
                    code10,
                ]            	
            

               
                // Функция пересчёта
                const recountP = () => {
                    let totalPriceP = priceFree + gruzchikPriceTotalP; // ИТОГО цена   
                    readyPopupBtn.value = `успей заказать за ${totalPriceP} ₽ `;                
                    let total_hidden = thecontent.querySelector('input[name="total_price"]');                       
                    console.log(total_hidden);
                    total_hidden.value = totalPriceP + '₽';
                    console.log(total_hidden.value);           
                }
             
                

                    // Сабмит формы в попапе калькулятор
                    

                    newAvtoparkPopupForm.addEventListener('wpcf7submit', function(event) { 
                        console.log(event);
                        // Получаем данные для админки
                        // Получаем значение поля Откуда улица
                        var calc_from_streetP = thecontent.querySelector('.js-addressPopupFrom');
                        var street_from_valP = calc_from_streetP.value; 
                            if(street_from_valP !== "") {
                                var street_from_val_fullP = street_from_valP;
                            } 
                                    
                        
                        // Получаем значение поля Откуда дом
                        var calc_from_houseP = thecontent.querySelector('.js-housePopupFrom');                
                        var house_from_valP = calc_from_houseP.value; 
                        if(house_from_valP !== "") {
                            var house_from_val_fullP = house_from_valP;
                        } 

                        // Получаем значение поля Куда улица
                        var calc_to_streetP = thecontent.querySelector('.js-addressPopupTo');
                        var street_to_valP = calc_to_streetP.value; 
                        if(street_to_valP !== "") {
                            var street_to_val_fullP = street_to_valP;
                        } 
                        
                        // Получаем значение поля Куда дом
                        var calc_to_houseP = thecontent.querySelector('.js-housePopupTo');
                        var house_to_valP = calc_to_houseP.value; 
                        if(house_to_valP !== "") {
                            var house_to_val_fullP = house_to_valP;
                        } 
                        
                        gruzchikQtyP = thecontent.querySelector('#cornersPopup').value;                         

                        elValP =  thecontent.querySelector('#carChoosePopup');
                   
                        kilometrazhP = thecontent.querySelector('#kilometrazhPopup').value;

                        var dateValP = thecontent.querySelector('#calc_input_datePopup').value; 

                        var telInputP = thecontent.querySelector('input[type="tel"]');
                        var telValP = telInputP.value;
                        var totalPriceP = thecontent.querySelector('#readyServicePopup').value; 
                    
                        var data = {
                            street_from_val_fullP,
                            house_from_val_fullP,
                            street_to_val_fullP,
                            house_to_val_fullP,
                            gruzchikQtyP,
                            dateValP,
                            kilometrazhP,
                            telValP,
                            totalPriceP,
                            action: 'calc-popup-ajax'            
                        }

                        $.ajax({
                            url: '/wp-content/themes/e-store/calcpopup-post.php',
                            method: 'post',
                            dataType: 'json',
                            data: data,
                            success: function(data){
                            console.log(data); 
                            }
                        });  
                        
                        if( telValP !=="" ) {                
                            document.querySelector('.popup-thanks').classList.add('thanks-active');

                            newAvtoparkPopupForm.reset();

                            $('.for-calc-popup').fadeOut();
                            document.querySelector('body').classList.remove('closed');

                            document.querySelector('.popup-thanks').addEventListener('click', function(event) {
                                if(this == event.target) {
                                    document.querySelector('.popup-thanks').classList.remove('thanks-active');
                                }
                                
                            });

                            setTimeout(() => {
                                document.querySelector('.popup-thanks').classList.remove('thanks-active');            
                            }, 2500 );
                        } else {
                            return false;
                        }
                    }, false, );

            
                    /*------------Попап-------------*/

                    var promoBtnP = eachFormP.querySelector('.js-promoP');
                    var promoNonceP = eachFormP.querySelector('.js-nonceP'); 

                    promoBtnP.onclick = function(e) {
                        e.preventDefault();
                        var codeInputP = eachFormP.querySelector('#promoCodePopup');
                        var codeInputValP = codeInputP.value;
                        promoNonceP.innerText = '';
                        

                        if( codeInputValP == codes[0] || codeInputValP == codes[1] || codeInputValP == codes[2] || codeInputValP == codes[3] || codeInputValP == codes[4] || codeInputValP == codes[5] || codeInputValP == codes[6] || codeInputValP == codes[7] || codeInputValP == codes[8] || codeInputValP == codes[9] ) {
                            totalPriceP = totalPriceP - (totalPriceP * 10 / 100);
                            readyPopupBtn.value = `успей заказать за ${totalPriceP} ₽ ` ;   
                            eachFormP.querySelector('#promoCodePopup').value = "";
                            
                            promoBtnP.innerText = 'скидка 10%';
                            promoBtnP.style.backgroundColor = '#990000';

                        } else {
                            promoNonceP.innerText = 'Код не найден';
                            eachFormP.querySelector('#promoCodePopup').value = "";
                        }                
                    }
            

            

        };      

        // На стрнаице
        var allTheContents = document.querySelector('.zayavka .calc-page');
        // console.log(allTheContents);
        if(allTheContents) {
            calcAuto(allTheContents);
        }        

        // В попапе
        var allPopups = document.querySelectorAll('.popup-calc');
        // console.log(allPopups);
        allPopups.forEach(function(allPopup){
            if(allPopups) {
            calcAuto(allPopup);
            }
        });
        
        
      
    });        
                
</script>
