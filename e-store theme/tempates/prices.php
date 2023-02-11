<?php
/*
Template Name: Цены
*/
get_header();
?>

    <section class="hero-section services price-page">
        <div class="container services__cont">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
            ?> 
            
            <h2 class="avtopark__heading price-page__heading">
                <?php the_field('prices_main_head'); ?>
            </h2>

            <ul class="price-page__tags tags-list row align-items-center">

                <?php if( have_rows('add_type_car') ): ?>
                <?php while( have_rows('add_type_car') ): the_row();
                $itemTypeCarId = get_sub_field('type_car_id');
                $itemTypeCarName = get_sub_field('type_car_name');
                ?>

                    <li class="tags-list__item tags-list__item_avtopark js-priceTab col-auto" data-path="<?= $itemTypeCarId; ?>">
                        <a href="#" class="tags-list__link tags-list__link_avtopark"><?= $itemTypeCarName; ?></a>
                    </li>
    
                <?php endwhile; ?>
                <?php endif; ?> 
            </ul>

            <div class="price-page__filters price-filters row">
                <ul class="price-filters__tabs price-tabs row col-auto">
                    <li class="price-tabs__item col-auto">
                        <a class="price-tabs__link tabs-link-active" href="#">Город</a>
                    </li>
    
                    <li class="price-tabs__item col-auto">
                        <a class="price-tabs__link" href="#">Пригород</a>
                    </li>
                </ul>

                <ul class="price-filters__tabs price-tabs row col-auto">
                    <li class="price-tabs__item col-auto">
                        <a class="price-tabs__link tabs-link-active" href="#">Наличные</a>
                    </li>
    
                    <li class="price-tabs__item col-auto">
                        <a class="price-tabs__link" href="#">Юр лица</a>
                    </li>
                </ul>
            </div>

            <div class="price-page__times price-times col-xl-9 col-lg-11 col-12 row justify-content-between align-items-center">
                <div class="price-times__click row align-items-center">
                    <div class="switch-btn">
                        <button class="switch-btn__button" aria-label="day"></button>
                    </div>

                    <div class="price-times__tarifes col">
                        <p class="price-times__tar js-day">
                            Дневные тарифы
                        </p>

                        <p class="price-times__tar js-night">
                            Ночные тарифы
                        </p>
                    </div>
                </div>

                <time class="price-times__time">
                    <p class="js-timeDay"><?php the_field('time_work_day'); ?></p>
                    <p class="js-timeNight"><?php the_field('time_work_night');?></p>
                </time>

                <div class="price-times__work row align-items-center">
                    <svg class="price-times__img">
                        <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#info"></use>                                                   
                    </svg>

                    <p class="price-times__descr col">
                        <?php the_field('time_work_params'); ?>
                    </p>                    
                </div>
            </div>

            <?php if( have_rows('add_prices_artricle') ): ?>
            <?php while( have_rows('add_prices_artricle') ): the_row();
            $articleCarId = get_sub_field('article_car_id');
            ?>

                <article class="prices-times__article price-art" data-targetcar="<?=  $articleCarId; ?>">
                    <h2 class="visually-hidden" style="color: #FFCF26; font-size: 20px"></h2>

                    <div class="price-art__cont js-scroll">
                        <table class="price-art__table price-table">
                            <tr class="price-table__row price-table__row_head">
                                <td class="price-table__first">                            
                                </td>

                                <td class="price-table__cell">
                                    30 МИНУТ
                                </td>
                                <td class="price-table__cell price-table__cell_third">
                                    1 час
                                </td>
                                <td class="price-table__cell price-table__cell_fourth">
                                    2 часа
                                </td>
                                <td class="price-table__cell price-table__cell_fifth">
                                    3 часа
                                </td>
                                <td class="price-table__cell col">
                                    ЦЕНА ЗА ДОП. ЧАС
                                </td>
                            </tr>

                            <?php if( have_rows('add_prices_artricle_row') ): ?>
                            <?php while( have_rows('add_prices_artricle_row') ): the_row();
                            $articleRowImg = get_sub_field('article_row_image');                            
                            $priceRow30 = get_sub_field('price_row_30');
                            $priceRow30Old = get_sub_field('price_row_30_old');
                            $priceRow30Night = get_sub_field('price_row_30_night');
                            $priceRow30OldNight = get_sub_field('price_row_30_old_night');

                            $priceRowHour = get_sub_field('price_row_hour');
                            $priceRowHourOld = get_sub_field('price_row_hour_old');
                            $priceRowHourNight = get_sub_field('price_row_hour_night');
                            $priceRowHourOldNight = get_sub_field('price_row_hour_old_night');

                            $priceRow2Hour = get_sub_field('price_row_2hour');
                            $priceRow2HourOld = get_sub_field('price_row_2hour_old');
                            $priceRow2HourNight = get_sub_field('price_row_2hour_night');
                            $priceRow2HourOldNight = get_sub_field('price_row_2hour_old_night');

                            $priceRow3Hour = get_sub_field('price_row_3hour');
                            $priceRow3HourOld = get_sub_field('price_row_3hour_old');
                            $priceRow3HourNight = get_sub_field('price_row_3hour_night');
                            $priceRow3HourOldNight = get_sub_field('price_row_3hour_old_night');

                            $priceRowHourDop = get_sub_field('price_row_hour_dop');
                            $priceRowHourDopOld = get_sub_field('price_row_hour_dop_old');
                            $priceRowHourDopNight = get_sub_field('price_row_hour_dop_night');
                            $priceRowHourDopOldNight = get_sub_field('price_row_hour_dop_old_night');
                            ?>

                                <tr class="price-table__row">
                                    <td class="price-table__first">
                                        <figure class="price-table__image col-9">
                                            <img src="<?php echo esc_url($articleRowImg['url']); ?>" alt="<?php echo esc_attr($articleRowImg['alt']); ?>" class="price-table__img">
                                        </figure>
                                    </td>

                                    <td class="price-table__cell">
                                        <span class="price-table__box">
                                            <p class="price-table__price" data-time="day"><?= $priceRow30; ?> ₽</p>

                                            <p class="price-table__price" data-time="night"><?= $priceRow30Night; ?> ₽</p>

                                            <?php if($priceRow30Old): ?>                                            
                                                <p class="price-table__old" data-time="day"><del><?= $priceRow30Old; ?> ₽</del></p>
                                            <?php else: ?>
                                                <p style="display: none"></p>
                                            <?php endif; ?>

                                            <?php if($priceRow30OldNight): ?>                                            
                                                <p class="price-table__old" data-time="night"><del><?= $priceRow30OldNight; ?> ₽</del></p>
                                            <?php else: ?>
                                                <p style="display: none"></p>
                                            <?php endif; ?>
                                        </span>

                                        <button class="tags-list__item price-table__btn js-carOpen">заказать</button>
                                    </td>

                                    <td class="price-table__cell price-table__cell_third">
                                        <span class="price-table__box">
                                            <p class="price-table__price" data-time="day"><?= $priceRowHour; ?> ₽</p>

                                            <p class="price-table__price" data-time="night"><?= $priceRowHourNight; ?> ₽</p>

                                            <?php if($priceRowHourOld): ?>                                            
                                                <p class="price-table__old" data-time="day"><del><?= $priceRowHourOld; ?> ₽</del></p>
                                            <?php else: ?>
                                                <p style="display: none"></p>
                                            <?php endif; ?>    
                                            
                                            <?php if($priceRowHourOldNight): ?>                                            
                                                <p class="price-table__old" data-time="night"><del><?= $priceRowHourOldNight; ?> ₽</del></p>
                                            <?php else: ?>
                                                <p style="display: none"></p>
                                            <?php endif; ?> 
                                        </span>

                                        <button class="tags-list__item price-table__btn js-carOpen">заказать</button>
                                    </td>

                                    <td class="price-table__cell price-table__cell_fourth">
                                        <span class="price-table__box">
                                            <p class="price-table__price" data-time="day"><?= $priceRow2Hour; ?> ₽</p>

                                            <p class="price-table__price" data-time="night"><?= $priceRow2HourNight; ?> ₽</p>

                                            <?php if($priceRow2HourOld): ?>                                            
                                                <p class="price-table__old" data-time="day"><del><?= $priceRow2HourOld; ?> ₽</del></p>
                                            <?php else: ?>
                                                <p style="display: none"></p>
                                            <?php endif; ?>

                                            <?php if($priceRow2HourOldNight): ?>                                            
                                                <p class="price-table__old" data-time="night"><del><?= $priceRow2HourOldNight; ?> ₽</del></p>
                                            <?php else: ?>
                                                <p style="display: none"></p>
                                            <?php endif; ?>
                                        </span>

                                        <button class="tags-list__item price-table__btn js-carOpen">заказать</button>
                                    </td>

                                    <td class="price-table__cell price-table__cell_fifth">
                                        <span class="price-table__box">
                                            <p class="price-table__price" data-time="day"><?= $priceRow3Hour; ?> ₽</p>

                                            <p class="price-table__price" data-time="night"><?= $priceRow3HourNight; ?> ₽</p>

                                            <?php if($priceRow3HourOld): ?>                                            
                                                <p class="price-table__old" data-time="day"><del><?= $priceRow3HourOld; ?> ₽</del></p>
                                            <?php else: ?>
                                                <p style="display: none"></p>
                                            <?php endif; ?> 
                                            
                                            <?php if($priceRow3HourOldNight): ?>                                            
                                                <p class="price-table__old" data-time="night"><del><?= $priceRow3HourOldNight; ?> ₽</del></p>
                                            <?php else: ?>
                                                <p style="display: none"></p>
                                            <?php endif; ?> 
                                        </span>

                                        <button class="tags-list__item price-table__btn js-carOpen">заказать</button>
                                    </td>

                                    <td class="price-table__cell col">
                                        <span class="price-table__box">
                                            <p class="price-table__price" data-time="day"><?= $priceRowHourDop; ?> ₽</p>

                                            <p class="price-table__price" data-time="night"><?= $priceRowHourDopNight; ?> ₽</p>

                                            <?php if($priceRowHourDopOld): ?>                                            
                                                <p class="price-table__old" data-time="day"><del><?= $priceRowHourDopOld; ?> ₽</del></p>
                                            <?php else: ?>
                                                <p style="display: none"></p>
                                            <?php endif; ?>

                                            <?php if($priceRowHourDopOldNight): ?>                                            
                                                <p class="price-table__old" data-time="night"><del><?= $priceRowHourDopOldNight; ?> ₽</del></p>
                                            <?php else: ?>
                                                <p style="display: none"></p>
                                            <?php endif; ?>
                                        </span>

                                        <button class="tags-list__item price-table__btn js-carOpen">заказать</button>
                                    </td>
                                </tr>

                            <?php endwhile; ?>
                            <?php endif; ?>

                        </table>
                    </div> 
                </article> 

            <?php endwhile; ?>
            <?php endif; ?> 
        </div>
    </section>

    <section class="faq">
        <div class="container faq__cont">
            <h2 class="avtopark__heading faq__heading">
                <?php the_field('faq_prices_heading'); ?>
            </h2>

            <div class="faq__accord col-xl-8 col-lg-10 col-12 js-faqAccord">
                <?php if( have_rows('new_faq_accord_prices_item' ) ): ?>
                <?php while( have_rows('new_faq_accord_prices_item') ): the_row();                
                $faqAccordPricesQuest = get_sub_field('faq_accord_prices_quest');
                $faqAccordPricesAsk = get_sub_field('faq_accord_prices_ask');
                ?>

                    <!-- Section -->                    
                    <div class="faq-accord__item accordion-item">
                        <div class="accordion-header faq__subheading">
                            <div>
                                <?= $faqAccordPricesQuest; ?>
                            </div>
                        </div>

                        <div>
                            <p>
                                <?= $faqAccordPricesAsk; ?>
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
                <?php the_field('prices_two_col_block_head'); ?>
            </h2>

            <h3 class="post__subheading">
                <?php the_field('prices_two_col_block_subhead'); ?>
            </h3>

            <div class="post__cont post-cont row justify-content-between">
                <div class="post-cont__left col-lg-6 col-12">                    
                    <?php the_field('prices_two_col_block_left_text'); ?>                    
                </div>

                <div class="post-cont__right col-lg-6 col-12">
                    <?php the_field('prices_two_col_block_right_text'); ?>
                </div>
            </div>            
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script>        

        window.addEventListener('DOMContentLoaded', function(){
            // Табы переключения типов отзывов на странице Отзывы

            // Зададим в переменную первую ссылку
            var firstItemLink = document.querySelector('.js-priceTab:first-of-type');            
            var firstRewLink = document.querySelector('.js-priceTab:first-of-type .tags-list__link');  
            firstItemLink.classList.add('active');          
            firstRewLink.classList.add('active');            

            document.querySelectorAll('.js-priceTab').forEach(function(tabsBtn){              
                tabsBtn.addEventListener('click', function(event){
                    event.preventDefault();                  
                    
                    var path = event.currentTarget.dataset.path;                                      

                    document.querySelectorAll('.js-priceTab').forEach(function(oneTab){
                        oneTab.classList.remove('active');

                        firstItemLink.classList.remove('active');
                    });

                    document.querySelectorAll('.js-priceTab .tags-list__link').forEach(function(oneTabLink){
                        oneTabLink.classList.remove('active');

                        firstRewLink.classList.remove('active');
                    });

                    // Определим текущую ссылку
                    var currentLink =  document.querySelector(`[data-path='${path}']`);
                    
                    // Его родитель - item
                    var currentTab = currentLink.parentNode;
                    
                    
                    // И сразу при клике сделаем её активной
                    currentLink.classList.add('active');
                    currentTab.classList.add('active');
                    
                    // Зададим условие: если текущая ссылка равна первой, то первую делаем активной      
                    if(currentLink.getAttribute('data-path') == firstRewLink.getAttribute('data-path')) {
                        firstRewLink.classList.add('active');
                    }

                    // Итерируем табы и закрываем все открытые табы
                    document.querySelectorAll('.price-art').forEach(function(tabContent3){
                        tabContent3.classList.remove('price-art-active');

                        // Зададим в переменную первый Таб (в стилях делаем первый элемент открытым)        
                        var firstRevTab = document.querySelector('.price-art:first-of-type');  

                        // Соответственно при клике на любую кнопку его сразу закрываем
                        firstRevTab.style.display = 'none';

                        // Закинем в переменную текущий Таб с соответствующим атрибутом data-target       
                        var currentTab = document.querySelector(`[data-targetcar="${path}"]`);

                        // Зададим условие: если атрибут data-target текущего таба соответствует первому Табу, то есть
                        // если это и есть первый Таб, открываем его, если нет - держим закрытым и открываем соответствующий
                        if(currentTab.getAttribute('data-targetcar') == firstRevTab.getAttribute('data-targetcar')) {
                            firstRevTab.style.display = 'block';
                        } else {
                            firstRevTab.style.display = 'none';
                    
                            currentTab.classList.add('price-art-active');
                        }         

                    }); 
                });
            });

            // Переключатель для тарифов дневные / ночные

            var switchBtn = document.querySelector('.switch-btn'); // переключатель
            var switchButton = document.querySelector('.switch-btn__button'); // сам переключатель
            var switchBg = document.querySelector('.price-times'); // плашка на которой перключатель
            var switchText = document.querySelectorAll('.price-times p'); // Тексты в плашке
            var dayText = document.querySelector('.js-day'); // Дневные тарифы
            var nightText = document.querySelector('.js-night'); // Ночные тарифы
            var info = document.querySelector('.price-times__img'); // Кнопка информация
            var time = document.querySelector('.price-times__time'); // Время работы           
            

            var tlSwitch = gsap.timeline({paused:true}); 

            tlSwitch.to(switchButton, {duration:0.3, ease: "power3.in", background: '#fff', top: 25}, 'start')
                    .to(switchBg, {duration:0.4, ease: "power3.in", background: '#000', color: '#fff'}, 'start')
                    .to(switchText, {duration:0.2, ease: "power3.in", color: '#fff'}, 'start')
                    .to(dayText, {duration:0.2, ease: "power3.in", fontFamily: 'Montserrat-Light'}, 'start')
                    .to(nightText, {duration:0.2, ease: "power3.in", fontFamily: 'Montserrat-Bold'}, 'start')
                    .to(info, {duration:0.2, ease: "power3.in", fill: '#fff'}, 'start');

            var nightPrices = document.querySelectorAll(`[data-time="night"]`);            
            nightPrices.forEach(function(everyNightEl){
                everyNightEl.style.fontFamily = "Montserrat-Bold";
                everyNightEl.style.display = 'none';                
            });

            switchBtn.onclick = function() {
                var day = document.querySelector('.js-timeDay')
                ,night = document.querySelector('.js-timeNight')
                ,dayPrices = document.querySelectorAll(`[data-time="day"]`);
                
                if(switchButton.getAttribute('aria-label') == 'day') {            
                    tlSwitch.play();
                    switchButton.setAttribute('aria-label', 'night');
                    day.style.display = 'none';
                    night.style.display = 'block';                        
                    nightPrices.forEach(function(everyNightEl){                            
                        everyNightEl.style.display = 'block';                
                    });
                    dayPrices.forEach(function(everyDay) {
                        everyDay.style.display = 'none';
                    });
                } else {
                    tlSwitch.reverse();
                    switchButton.setAttribute('aria-label', 'day');
                    day.style.display = 'block';
                    night.style.display = 'none'; 
                    
                    dayPrices.forEach(function(everyDay) {
                        everyDay.style.display = 'block';
                    });
                    nightPrices.forEach(function(everyNightEl){                            
                        everyNightEl.style.display = 'none';                
                    });
                }
            
            }

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