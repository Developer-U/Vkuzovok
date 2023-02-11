<?php
/*
Template Name: Отзывы
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

            <div class="reviews-top row justify-content-between">
                <h2 class="avtopark__heading reviews-top__heading col">
                    <?php the_title(); ?>
                </h2>

                <button class="reviews-top__btn js-reviewOpen">Написать отзыв</button>
            </div> 

            <ul class="blog__tabs row">
                <?php                                
                    $revTypeName1 = get_field('reviews_type_name1'); 
                    $revTypeName2 = get_field('reviews_type_name2');
                    $revTypeName3 = get_field('reviews_type_name3');      
                    $revTypeName4 = get_field('reviews_type_name4');                        
                ?>

                <?php if( !empty($revTypeName1) ) : ?>
                    <li class="services-tabs__item col-auto">
                        <a class="services-tabs__link js-reviewsTab" href="#" data-path="one"><?= $revTypeName1; ?></a>
                    </li>
                <?php endif; ?>

                <?php if( !empty($revTypeName2) ) : ?>
                    <li class="services-tabs__item col-auto">
                        <a class="services-tabs__link js-reviewsTab" href="#" data-path="two"><?= $revTypeName2; ?></a>
                    </li>
                <?php endif; ?>

                <?php if( !empty($revTypeName3) ) : ?>
                    <li class="services-tabs__item col-auto">
                        <a class="services-tabs__link js-reviewsTab" href="#" data-path="three"><?= $revTypeName3; ?></a>
                    </li>
                <?php endif; ?>

                <?php if( !empty($revTypeName4) ) : ?>
                    <li class="services-tabs__item col-auto">
                        <a class="services-tabs__link js-reviewsTab" href="#" data-path="four"><?= $revTypeName4; ?></a>
                    </li>
                <?php endif; ?>
            </ul>

            <article id="secondRew" class="services-article reviews-article row js-reviewsArt" data-target="two">
                <h2 class="avtopark__heading visually-hidden" style="position: relative; z-index:99">
                    Второй Таб
                </h2>

                <?php if( have_rows('add_text_review') ): ?>
                <?php while( have_rows('add_text_review') ): the_row();
                $textRevDate = get_sub_field('text_rev_date');
                $textRevName = get_sub_field('text_rev_name');
                $textRevTime = get_sub_field('text_rev_time');
                $textRevCont = get_sub_field('text_rev_cont');
                $photoFor = get_sub_field('photo_for');
                $revPhoto = get_sub_field('text_rev_photo');
                $expertPhoto = get_sub_field('text_expert_photo');
                $expertName = get_sub_field('expert_name');
                $expertDate = get_sub_field('expert_date');
                $expertTime = get_sub_field('expert_time');
                $expertCont = get_sub_field('expert_cont');
                $rating = get_sub_field('rating');
                ?>  

                    <div class="reviews__one one-review col-xxl-7 col-lg-10 col-12">
                        <div class="one-review__author row">
                            <figure class="one-review__image">
                                <img class="one-review__img" src="<?php echo esc_url( $revPhoto['url'] ); ?>" alt="<?php echo esc_attr( $revPhoto['alt'] ); ?>">
                            </figure>

                            <div class="one-review__box col row">
                                <div class="one-review__top">
                                    <h3 class="one-review__name"><?= $textRevName; ?></h3>

                                    <div class="one-review__time"><?= $textRevDate; ?></div>
                                </div>

                                <div class="one-review__rating row justify-content-between">
                                    <?= $rating; ?>
                                    
                                </div>
                            </div>
                        </div>

                        <p class="one-review__text">
                            <?= $textRevCont; ?>
                        </p>

                        <?php if($photoFor): ?>
                            <figure class="one-review__preview">
                                <img class="one-review__img" src="<?php echo esc_url( $photoFor['url'] ); ?>" alt="<?php echo esc_attr( $photoFor['alt'] ); ?>">
                            </figure>
                        <?php else: ?>
                            <div style="margin-bottom:20px;"></div>
                        <?php endif; ?>

                        <?php if($expertCont && $expertName): ?>
                            <div class="one-review__answer rev-answer row">
                                <figure class="one-review__image rev-answer__image">
                                    <img class="one-review__img" src="<?php echo esc_url( $expertPhoto['url'] ); ?>" alt="<?php echo esc_attr( $expertPhoto['alt'] ); ?>">
                                </figure>

                                <div class="one-review__box col row">
                                    <div class="one-review__top">
                                        <h3 class="one-review__name"><?= $expertName; ?></h3>

                                        <div class="one-review__time"><?= $expertDate; ?></div>
                                    </div>

                                    <p class="one-review__text col">
                                        <?= $expertCont; ?> 
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
            
            <article class="services-article reviews-article row js-reviewsArt" data-target="one">
                <h2 class="visually-hidden" style="position: relative; z-index:99">
                    Видеоотзывы
                </h2>

                <div class="blog row">

                    <?php if( have_rows('add_video_rew') ): ?>
                    <?php while( have_rows('add_video_rew') ): the_row();
                    $revVideo = get_sub_field('reviews_video');
                    $revName = get_sub_field('reviews_name');
                    ?>

                        <div class="blog__article blog-article reviews-article__article col-md-6 col-12">
                            <figure class="blog-article__image reviews-article__image">
                                <?php
                                    if(!empty($revVideo)) {                                                                            
                                ?>

                                    <video controls class="video-block__video">
                                        <source src="<?php echo esc_url($revVideo['url']); ?>" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>                                      
                                                                                                                                            
                                <?php } ?>                                    
                                                           
                            </figure>
        
                            <h3 class="blog-article__heading"><?= $revName; ?></h3>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>                    
                </div>               
            </article>            

            <article class="services-article reviews-article row js-reviewsArt" data-target="three">
                <div class="reviews-letters row">
                    <?php if( have_rows('add_review_letter') ): ?>
                    <?php while( have_rows('add_review_letter') ): the_row();
                    $revLetter = get_sub_field('review_letter');                                                      
                    ?> 

                        <a href="<?php echo esc_url( $revLetter['url'] ); ?>" class="reviews-letters__image col-xl-3 col-lg-4 col-md-6 col-12" data-fancybox="slides">
                            <img class="potolok-slider__img" src="<?php echo esc_url( $revLetter['url'] ); ?>" alt="<?php echo esc_attr( $revLetter['alt'] ); ?>">                                
                        </a>                       

                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </article>

            <article class="services-article reviews-article row js-reviewsArt" data-target="four">
                <div class="one-review__block col-xxl-7 col-xl-9 col-md-11 col-12">
                    <p class="one-review__descr">
                        <?php the_field('otzovik_text'); ?>
                    </p>    
                </div>                

                <ul class="one-review__logos rev-logos row">

                    <?php if(have_rows('add_otzovik')): ?>
                    <?php while(have_rows('add_otzovik')): the_row();
                    $otzovLogo = get_sub_field('otzovik_logo');                    
                    $otzovLink = get_sub_field('otzovik_link');
                    ?>

                        <li class="rev-logos__image col-auto">
                            <a href="<?= $otzovLink; ?>">
                                <img class="rev-logos__logo" src="<?php echo esc_url( $otzovLogo['url'] ); ?>" alt="<?php echo esc_attr( $otzovLogo['alt'] ); ?>">
                            </a>                            
                        </li>
                    <?php endwhile; ?>
                    <?php endif; ?>

                </ul>
            </article>
        </div>
    </section>

    <!-- Всплывающее окно Оставить отзыв -->
    <section class="popup form-popup js-reviewPopup">
        <div class="js-scroll form-popup__scrolling">          
            <div class="container form-popup__cont">
                <button class="popup__close form-popup__close js-reviewClose">
                    <svg class="popup__img">
                        <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#close"></use>                                                   
                    </svg>
                </button>            
    
                <h2 class="popup__heading">Оставить отзыв</h2>

                <div id="revForm" class="popup__form popup-form">
                    <?php echo do_shortcode('[contact-form-7 id="618" title="Форма в попапе Оставить отзыв ( с файлом)"]'); ?>
                </div>
            </div>           
        </div>
    </section>  

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

        // Открытие попапа Оставить отзыв
        var reviewField = document.querySelector('.js-reviewPopup');
        var reviewFieldOpen = document.querySelector('.js-reviewOpen'); 
        var reviewClose = document.querySelector('.js-reviewClose');   
        var flag = false;  

        reviewFieldOpen.addEventListener('click', function(e){  
            e.preventDefault();
            
            if(!flag) {
            fadeIn(reviewField, 300, 'flex');
                document.querySelector('body').classList.add('closed');
            } else {
            fadeOut(reviewField, 300);
                document.querySelector('body').classList.remove('closed');          
            }
            
            reviewClose.addEventListener('click', function(){
                fadeOut(reviewField, 300);
                document.querySelector('body').classList.remove('closed');         
            });

            reviewField.addEventListener('click', function(event){
                if(this == event.target) {
                fadeOut(reviewField, 300);
                document.querySelector('body').classList.remove('closed');              
                }
            }); 
        });

        // Присвоим форме ID
        var reviewsForm = document.querySelector('#revForm form');
        reviewsForm.setAttribute('id','reviewsForm');

        // Всплытие окна Спасибо после отправки формы Оставить отзыв
        document.querySelector('#reviewsForm').addEventListener( 'wpcf7mailsent', function( event ) {
            document.querySelector('.popup-thanks').classList.add('thanks-active'); 
                    
            fadeOut(reviewField, 300);    
                document.querySelector('body').classList.remove('closed');  

            setTimeout(() => {
                document.querySelector('.popup-thanks').classList.remove('thanks-active'); 
            }, 2500 ); 
        }, false );

            
        // Добавление видеоотзывов
            
        var revArticle = document.getElementsByClassName('blog-article');
                        
        var revArtBtn = document.createElement('button'); // Создаём кнопку Добавить видеоотзывы           

        revArtBtn.classList.add('button-for-more'); // Присваиваем её стили

        revArtBtn.innerText = 'Больше отзывов';  // Задаём ей текст

        var parentCont = document.querySelector('.reviews-article'); // Обратимся к родителю            

        if(revArticle.length > 4) {  // Добавляем кнопку, если блоков отзывов больше 1
            parentCont.append(revArtBtn);
        }

        for(let i=4; i<revArticle.length; i++) {
            revArticle[i].style.display = 'none'; // Скрывааем все статьи, что больше i=4            
        }

        var countB = 4; //Установим счётчик - при клике на кнопку будет добавляться ещё 1 блок отзывов
        revArtBtn.addEventListener('click', function(){
            var revArticle = document.getElementsByClassName('blog-article');           

            countB += 1;

            if(countB <= revArticle.length) {
                for(let i=0; i<countB; i++) {
                    revArticle[i].style.display = 'block';

                    // Когда число добавляемых блоков отзывов равняется всему числу блоков, скрываем кнопку
                    if(countB == revArticle.length) {
                        revArtBtn.style.display = 'none';
                    }
                }
            }
        });   
            
            
        // Добавление текстовых отзывов (наши клиенты)
            
        var textRew = document.getElementsByClassName('one-review');
                    
        var textRewBtn = document.createElement('button'); // Создаём кнопку      

        textRewBtn.classList.add('button-for-more'); // Присваиваем её стили

        textRewBtn.innerText = 'Больше отзывов';  // Задаём ей текст

        var parentContRew = document.querySelector('[data-target="two"]'); // Обратимся к родителю            

        if(textRew.length > 4) {  // Добавляем кнопку, если отзывов больше 4
            parentContRew.append(textRewBtn);
        }

        for(let i=4; i<textRew.length; i++) {
            textRew[i].style.display = 'none'; // Скрывааем все статьи, что больше i=1             
        }

        var countD = 4; //Установим счётчик - при клике на кнопку будет добавляться ещё 1 отзыв
        textRewBtn.addEventListener('click', function(){
            var textRew = document.getElementsByClassName('one-review');

            countD += 1;

            if(countD <= textRew.length) {
                for(let i=0; i<countD; i++) {
                    textRew[i].style.display = 'block';

                    // Когда число добавляемых отзывов равняется всему числу всех отзывов, скрываем кнопку
                    if(countD == textRew.length) {
                        textRewBtn.style.display = 'none';
                }
                }
            }
        }); 


        // Добавление благодарственных писем
            
        var revLetter = document.getElementsByClassName('reviews-letters__image');
                    
        var revLetterBtn = document.createElement('button'); // Создаём кнопку      

        revLetterBtn.classList.add('button-for-more'); // Присваиваем её стили

        revLetterBtn.innerText = 'Больше писем';  // Задаём ей текст

        var parentContLetter = document.querySelector('[data-target="three"]'); // Обратимся к родителю            

        if(revLetter.length > 8) {  // Добавляем кнопку, если отзывов больше 4
            parentContLetter.append(revLetterBtn);
        }

        for(let i=8; i<revLetter.length; i++) {
            revLetter[i].style.display = 'none'; // Скрывааем все статьи, что больше i=1             
        }

        var countF = 8; //Установим счётчик - при клике на кнопку будет добавляться ещё 1 отзыв
        revLetterBtn.addEventListener('click', function(){
            var revLetter = document.getElementsByClassName('reviews-letters__image')
            countF += 1;

            if(countF <= revLetter.length) {
                for(let i=0; i<countF; i++) {
                    revLetter[i].style.display = 'block';

                    // Когда число добавляемых отзывов равняется всему числу всех отзывов, скрываем кнопку
                    if(countF == revLetter.length) {
                        revLetterBtn.style.display = 'none';
                }
                }
            }
        });       
        
        
        // Табы на странице Отзывы
        // Зададим в переменную первую ссылку
        var firstRewLink = document.querySelector('.services-tabs__item:first-of-type .services-tabs__link');
                
        firstRewLink.classList.add('tabs-link-active');

        document.querySelectorAll('.services-tabs__item .services-tabs__link').forEach(function(tabsBtn){
            tabsBtn.addEventListener('click', function(event){
                event.preventDefault();
                const path = event.currentTarget.dataset.path;

                document.querySelectorAll('.services-tabs__item .services-tabs__link').forEach(function(oneTab){
                    oneTab.classList.remove('tabs-link-active');

                    firstRewLink.classList.remove('tabs-link-active');
                });

                // Определим текущую ссылку
                var currentLink =  document.querySelector(`[data-path='${path}']`);                             
                
                // И сразу при клике сделаем её активной
                currentLink.classList.add('tabs-link-active');
                
                // Зададим условие: если текущая ссылка равна первой, то первую делаем активной      
                if(currentLink.getAttribute('data-path') == firstRewLink.getAttribute('data-path')) {
                    firstRewLink.classList.add('tabs-link-active');
                }      
                    
            
                // Итерируем табы и закрываем все открытые табы
                document.querySelectorAll('.js-reviewsArt').forEach(function(tabContent){
                    tabContent.classList.remove('price-art-active');
            
                    // Зададим в переменную первый Таб (в стилях делаем первый элемент открытым)        
                    var firstReviewsTab = document.querySelector('.js-reviewsArt:first-of-type');
            
                    // Соответственно при клике на любую кнопку его сразу закрываем
                    firstReviewsTab.style.display = 'none';
            
                    // Закинем в переменную текущий Таб с соответствующим атрибутом data-target       
                    var currentTab = document.querySelector(`[data-target="${path}"]`);
            
                    
                    if(currentTab.getAttribute('data-target') == firstReviewsTab.getAttribute('data-target')) {
                        firstReviewsTab.style.display = 'flex';
                    } else {
                        firstReviewsTab.style.display = 'none';
            
                        currentTab.classList.add('price-art-active');
                    }  
                });  
                      
            });
        });


        // Аякс отправки данных в админку
        $('#reviewsForm').on('submit', function(e) {
            e.preventDefault();

            // Получаем значение поля Имя клиента из формы Сontact Form7
            var reviews_client_name = document.querySelector('#client_review_name');
            var reviews_name = reviews_client_name.value;

            // Получаем значение поля Телефон клиента из формы Сontact Form7
            var reviews_client_phone_field = document.querySelector('#client_review_tel');
            var reviews_client_phone = reviews_client_phone_field.value;  
            
            // Получаем значение поля Текст отзыва из формы Сontact Form7
            var reviews_text_field = document.querySelector('#client_review_text');
            var reviews_text = reviews_text_field.value; 

            // Получаем значение поля Телефон клиента из формы Сontact Form7
            var reviews_file_field = document.querySelector('#field__file-2');
            var reviews_file = reviews_file_field.value;                        

            let data = {
                reviews_name,
                reviews_client_phone,
                reviews_text,               
                reviews_file,
                action: 'reviews-ajax'            
            }

            $.ajax({
                url: '/wp-content/themes/e-store/reviews-post.php',
                method: 'post',
                dataType: 'json',
                data: data,
                success: function(data){
                console.log(data);
                }
            });
        });
        
    });
</script>


<?php get_footer(); ?>