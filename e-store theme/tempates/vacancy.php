<?php
/*
Template Name: Вакансии
*/
get_header();
?>

    <section class="hero-section vacancy">
        <div class="container">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
            ?> 

            <h1 class="avtopark__heading price-page__heading">
                <?php the_title(); ?>
            </h1>

            <div class="vacancy__cont vacancy-cont row justify-content-between">

                <?php if( have_rows('add_vacancy_store') ): ?>
                <?php while( have_rows('add_vacancy_store') ): the_row(); 
                $vacancyStoreName = get_sub_field('vacancy_store_name');
                ?> 

                    <article class="vacancy-cont__article vac-article col-lg-6 col-12">
                        <h2 class="vac-article__heading">
                            <?= $vacancyStoreName; ?>
                        </h2>
    
                        <div class="faq__accord job__full js-faqAccord" >
                            
                            <?php if( have_rows('add_vacancy') ): ?>
                            <?php while( have_rows('add_vacancy') ): the_row(); 
                            $vacancyName = get_sub_field('vacancy_name');                                
                            $vacancyText = get_sub_field('vacancy_text');
                            $vacancyPrice = get_sub_field('vacancy_price');
                            $vacancyItem = get_sub_field('vacancy_item');
                            $vacancyBtn = get_sub_field('vacancy_btn');
                            ?>

                                <!-- Section -->
                                <div class="accordion-item" data-targetVac="<?= $vacancyItem; ?>">
                                    <div class="accordion-header faq__subheading row align-items-center justify-content-between">
                                        <div>
                                            <h3 class="vac-article__subheading col-auto"><?= $vacancyName; ?></h3>
            
                                            <p class="vac-article__price col">Зарплата от <?= $vacancyPrice; ?> ₽</p>
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <p>
                                            <?= $vacancyText; ?> 

                                            <button class="vac-article__btn job__btn" data-btnVac="<?= $vacancyBtn; ?>">отправить резюме</button>
                                        </p>
                                    </div>

                                    <!-- Попап отправить резюме++ -->
                                    <div class="popup form-popup js-vacancyPopup">
                                        <div class="js-scroll form-popup__scrolling">          
                                            <div class="container form-popup__cont">
                                                <button class="popup__close form-popup__close js-vacancyClose">
                                                    <svg class="popup__img">
                                                        <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#close"></use>                                                   
                                                    </svg>
                                                </button>                                    

                                                <h3 class="popup__heading">
                                                    Откликнуться на вакансию
                                                </h3>

                                                <div id="vacancyForm" class="popup__form">
                                                    <?php echo do_shortcode('[contact-form-7 id="627" title="Отклик на вакансию (с файлом)"]'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </article>

                <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <script>
        window.addEventListener('DOMContentLoaded', function(){
            var firstAccord = document.querySelector('.job__full:first-of-type');

            if(firstAccord) {
                firstAccord.setAttribute('id','accordion4');
            }

            var secondAccord = document.querySelector('.vac-article:nth-of-type(2) .job__full');
           
            if(secondAccord) {
                secondAccord.setAttribute('id','accordion5');
            }

            var thirdAccord = document.querySelector('.vac-article:nth-of-type(3) .job__full');
           
            if(thirdAccord) {
                thirdAccord.setAttribute('id','accordion6');
            }
            
            var fourthAccord = document.querySelector('.vac-article:nth-of-type(4) .job__full');
            if(fourthAccord) {
                fourthAccord.setAttribute('id','accordion7');
            }
            

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


            
            // Открытие попапа Отправить резюме
            var vacField = document.querySelector('.js-vacancyPopup');
            var vacFieldOpen = document.querySelectorAll('.job__btn'); 
            var vacClose = document.querySelector('.js-vacancyClose'); 
            var flag = false;  

            vacFieldOpen.forEach(function(vacOpen){
                vacOpen.addEventListener('click', function(event){                     
                    const pathvac = event.currentTarget.dataset.btnvac;

                    var vacName = document.querySelector(`[data-targetvac = "${pathvac}"] .vac-article__subheading `);                    

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
                    var vacantForm = document.querySelector('#vacancyForm form');
                    vacantForm.setAttribute('id','vacForm');

                    // Получаем тип вакансии
                    var vacancy_type_field = vacName;
                        var vacancy_type = vacancy_type_field.innerText;
                        // console.log(vacancy_type);


                    $('#vacForm').on('submit', function(e) {
                        e.preventDefault();

                        // Получаем значение поля Имя клиента из формы Сontact Form7
                        var vacancy_client_name = document.querySelector('#vacancy_client_name');
                        var vacancy_name = vacancy_client_name.value;

                        // Получаем значение поля Телефон клиента из формы Сontact Form7
                        var vacancy_client_phone_field = document.querySelector('#vacancy_client_phone');
                        var vacancy_client_phone = vacancy_client_phone_field.value;                        

                        // Получаем значение поля Телефон клиента из формы Сontact Form7
                        var vacancy_file_field = document.querySelector('#field__file-2');
                        var vacancy_file = vacancy_file_field.value;                        

                        let data = {
                            vacancy_name,
                            vacancy_client_phone,
                            vacancy_type,
                            vacancy_file,
                            action: 'vacancy-ajax'            
                        }

                        $.ajax({
                            url: '/wp-content/themes/e-store/vacancy-post.php',
                            method: 'post',
                            dataType: 'json',
                            data: data,
                            success: function(data){
                            console.log(data);
                            }
                        });
                    });
                });
            });


            // Функционал прикрепить файл input file

            let fields = document.querySelectorAll('.field__file');
            // console.log(fields);
            Array.prototype.forEach.call(fields, function (input) {
            let label = input.nextElementSibling,
                labelVal = document.querySelector('.field__file-fake').innerText;                
        
                input.addEventListener('change', function (e) {
                    let countFiles = '';
                    if (this.files && this.files.length >= 1)
                    countFiles = this.files.length;
            
                    if (countFiles) {
                        document.querySelector('.field__file-fake').innerText = 'Файл прикреплён';
                        document.querySelector('.field__file-fake').classList.add('field__file-fake-get');
                        document.querySelector('.field__file-button').classList.add('field__file-button-get');
                    }  else {
                        document.querySelector('.field__file-fake').innerText = labelVal;
                    }
                    
                });
            });

            // Всплытие окна Спасибо после отправки формы
            document.querySelector('#vacancyForm').addEventListener( 'wpcf7mailsent', function( event ) {

            document.querySelector('.popup-thanks').classList.add('thanks-active'); 
                    
            fadeOut(vacField, 300);    
                document.querySelector('body').classList.remove('closed');  

            setTimeout(() => {
                document.querySelector('.popup-thanks').classList.remove('thanks-active'); 
            }, 2500 );  

            }, false );


            $( ".js-faqAccord" ).accordion({
                collapsible: true,      
                heightStyle: 'content',     
                header: '> .accordion-item > .accordion-header',
                animate: { easing: 'linear', duration: 400 }
            });
        });
    </script>

<?php get_footer(); ?>