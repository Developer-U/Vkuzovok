<?php
/*
* Автопарк блок
*/
?>

    <section class="avtopark avtopark-block">
        <div class="container">
            <h2 class="avtopark__heading"><?php the_field('avtopark_block_head', 'options'); ?></h2>

            <ul class="avtopark__tags row tags-list align-items-center">

                <?php if( have_rows('new_avtopark_block_item', 'options') ): ?>
                <?php while( have_rows('new_avtopark_block_item', 'options') ): the_row();
                    $parkItemName = get_sub_field('avtopark_block_item', 'options');
                    $parkItemPath = get_sub_field('avtopark_block_item_path', 'options');                               
                ?>

                    <li class="tags-list__item tags-list__item_avtopark js-priceTab col-auto">
                        <a href="#" class="tags-list__link tags-list__link_avtopark" data-path2="<?= $parkItemPath; ?>"><?= $parkItemName; ?></a>
                    </li>

                <?php endwhile; ?>
                <?php endif; ?>                
            </ul>

            <?php if( have_rows('new_park_article', 'options') ): ?>
            <?php while( have_rows('new_park_article', 'options') ): the_row();                              
                $parkTarget = get_sub_field('park_target', 'options');
            ?>

                <article class="article-rew article-rew-active js-avtopark row" data-target2="<?= $parkTarget; ?>">
                    <!-- Slider swiper -->
                    <div class="avtopark__desctop row park-slider swiper swiper-container">
                        <div class="swiper-wrapper">
                            <?php if( have_rows('new_park_slide', 'options') ): ?>
                            <?php while( have_rows('new_park_slide', 'options') ): the_row();                              
                                $parkSlideImg = get_sub_field('park_slide_img', 'options');
                                $parkSlideHead = get_sub_field('park_slide_heading', 'options');
                                $parkSlideText = get_sub_field('park_slide_text', 'options');
                            ?>

                                <div class="swiper-slide avtopark__article row avtopark-article">
                                    <figure class="avtopark-article__image col-lg-6 col-12">
                                        <img class="avtopark-article__img" src="<?php echo esc_url($parkSlideImg['url']); ?>" alt="<?php echo esc_attr($parkSlideImg['alt']); ?>">
                                    </figure>
                    
                                    <div class="avtopark-article__right col-lg-6 col-12">
                                        <h3 class="avtopark-article__heading">
                                            <?= $parkSlideHead; ?>
                                        </h3>
                    
                                        <p class="avtopark-article__text">
                                            <?= $parkSlideText; ?>
                                        </p>
                    
                                        <button class="avtopark-article__btn js-carOpen">заказать</button>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                            <?php endif; ?>   
                        </div>

                        <div class="swiper-button-prev button-prev-el3"></div>
                        <div class="swiper-button-next button-next-el3"></div>
                        
                        <div class="container swiper-pagination"></div>

                        <script>
                            var menu = [
                                `<?php                                                               
                                    $paginationImage1 = get_field('pagination-image1', 'options');
                                    $paginationImage2 = get_field('pagination-image2', 'options');
                                    $paginationImage3 = get_field('pagination-image3', 'options');   
                                    $paginationImage4 = get_field('pagination-image4', 'options');
                                    $paginationImage5 = get_field('pagination-image5', 'options');                                 
                                    $paginationDescr1 = get_field('pagination-descr1', 'options');
                                    $paginationDescr2 = get_field('pagination-descr2', 'options');
                                    $paginationDescr3 = get_field('pagination-descr3', 'options'); 
                                    $paginationDescr4 = get_field('pagination-descr4', 'options');
                                    $paginationDescr5 = get_field('pagination-descr5', 'options');                                      
                                ?>

                                <div class="park-slider__slide">
                                    <figure class="park-slider__image">
                                        <img class="park-slider__img" src="<?php echo esc_url($paginationImage1['url']); ?>" alt="<?php echo esc_attr($paginationImage1['alt']); ?>">
                                    </figure>
                                    
                                    <p class="park-slider__descr"><?= $paginationDescr1; ?></p>
                                </div>`,

                                `<div class="park-slider__slide">
                                    <figure class="park-slider__image">
                                        <img class="park-slider__img" src="<?php echo esc_url($paginationImage2['url']); ?>" alt="<?php echo esc_attr($paginationImage2['alt']); ?>">
                                    </figure>

                                    <p class="park-slider__descr"><?= $paginationDescr2; ?></p>
                                </div>`,

                                `<div class="park-slider__slide">
                                    <figure class="park-slider__image">
                                        <img class="park-slider__img" src="<?php echo esc_url($paginationImage3['url']); ?>" alt="<?php echo esc_attr($paginationImage3['alt']); ?>">
                                    </figure>

                                    <p class="park-slider__descr"><?= $paginationDescr3; ?></p>
                                </div>` ,
                                
                                `<div class="park-slider__slide">
                                    <figure class="park-slider__image">
                                        <img class="park-slider__img" src="<?php echo esc_url($paginationImage4['url']); ?>" alt="<?php echo esc_attr($paginationImage4['alt']); ?>">
                                    </figure>
                                    
                                    <p class="park-slider__descr"><?= $paginationDescr4; ?></p>
                                </div>`,

                                `<div class="park-slider__slide">
                                    <figure class="park-slider__image">
                                        <img class="park-slider__img" src="<?php echo esc_url($paginationImage5['url']); ?>" alt="<?php echo esc_attr($paginationImage5['alt']); ?>">
                                    </figure>
                                    
                                    <p class="park-slider__descr"><?= $paginationDescr5; ?></p>
                                </div>`
                            ]
                    </script>
                    </div>
        
                    <ul class="avtopark__mobile avtopark-mobile row">
                        <?php if( have_rows('new_park_slide_mobile', 'options') ): ?>
                        <?php while( have_rows('new_park_slide_mobile', 'options') ): the_row();                              
                        $parkSlideMobImg = get_sub_field('park_slide_mobile_img', 'options');
                        $parkSlideMobDescr = get_sub_field('park_slide_mobile_descr', 'options');
                        ?>

                            <li class="avtopark-mobile__item col-6">
                                <figure class="avtopark-article__image">
                                    <img class="avtopark-article__img" src="<?php echo esc_url($parkSlideMobImg['url']); ?>" alt="<?php echo esc_attr($parkSlideMobImg['alt']); ?>">
                                </figure>

                                <h3 class="avtopark-article__heading">
                                    <?= $parkSlideMobDescr; ?>
                                </h3>
                                <button class="avtopark-article__btn js-carOpen">заказать</button>
                            </li>

                        <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>                               
                </article>

            <?php endwhile; ?>
            <?php endif; ?> 
        </div>
    </section>

<script>
    window.addEventListener('DOMContentLoaded', function(){
        // Табы на главной странице блок Автопарк

        // Зададим в переменную первую ссылку
        var firstItemLink = document.querySelector('.js-priceTab:first-of-type');            
        var firstRewLink = document.querySelector('.js-priceTab:first-of-type .tags-list__link');  
        firstItemLink.classList.add('active');          
        firstRewLink.classList.add('active');            

        document.querySelectorAll('.js-priceTab .tags-list__link').forEach(function(tabsBtn){              
            tabsBtn.addEventListener('click', function(event){
                event.preventDefault();                  
                
                var path2 = event.currentTarget.dataset.path2; 
                console.log(path2);                                     

                document.querySelectorAll('.js-priceTab').forEach(function(oneTab){
                    oneTab.classList.remove('active');

                    firstItemLink.classList.remove('active');
                });

                document.querySelectorAll('.js-priceTab .tags-list__link').forEach(function(oneTabLink){
                    oneTabLink.classList.remove('active');

                    firstRewLink.classList.remove('active');
                });

                // Определим текущую ссылку
                var currentLink =  document.querySelector(`[data-path2='${path2}']`);
                // console.log(currentLink);
                
                // Его родитель - item
                var currentTab = currentLink.parentNode;
                
                
                // И сразу при клике сделаем её активной
                currentLink.classList.add('active');
                currentTab.classList.add('active');
                
                // Зададим условие: если текущая ссылка равна первой, то первую делаем активной      
                if(currentLink.getAttribute('data-path2') == firstRewLink.getAttribute('data-path2')) {
                    firstRewLink.classList.add('active');
                }

                // Итерируем табы и закрываем все открытые табы
                document.querySelectorAll('.js-avtopark').forEach(function(tabContent){
                    tabContent.classList.remove('avtopark-active');

                    // Зададим в переменную первый Таб (в стилях делаем первый элемент открытым)        
                    var firstParkTab = document.querySelector('.js-avtopark:first-of-type');                    

                    // Соответственно при клике на любую кнопку его сразу закрываем
                    firstParkTab.style.display = 'none';

                    // Закинем в переменную текущий Таб с соответствующим атрибутом data-target       
                    var currentTab = document.querySelector(`[data-target2="${path2}"]`);

                    console.log(currentTab.getAttribute('data-target2') );

                    console.log(firstParkTab.getAttribute('data-target2') );

                    // Зададим условие: если атрибут data-target текущего таба соответствует первому Табу, то есть
                    // если это и есть первый Таб, открываем его, если нет - держим закрытым и открываем соответствующий
                    if(currentTab.getAttribute('data-target2') == firstParkTab.getAttribute('data-target2')) {
                        firstParkTab.style.display = 'flex';
                    } else {
                        firstParkTab.style.display = 'none';
                
                        currentTab.classList.add('avtopark-active');
                    }
                }); 
            }); 
        });
    });
</script>