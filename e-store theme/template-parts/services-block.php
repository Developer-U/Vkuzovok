<?php
/*
* Услуги блок
*/
?>

    <ul class="types__list types-list container-fluid row justify-content-between">
        <?php if( have_rows('new_other_service', 'options' ) ): ?>
        <?php while( have_rows('new_other_service', 'options') ): the_row();
        
        $otherServBtnId = get_sub_field('other_service_btn_id', 'options');
        $otherServItemId = get_sub_field('other_service_item_id', 'options');
        $otherServImg = get_sub_field('other_service_image', 'options');
        $otherServLink = get_sub_field('other_service_link', 'options');
        $otherServName = get_sub_field('other_service_name', 'options');
        $otherServText = get_sub_field('other_service_text', 'options');
        ?>

            <li class="types-list__item col-xxl-2 col-md-4 col-6" data-item="<?= $otherServItemId; ?>">
                <div class="types-list__up">
                    <div class="types-list__image" style="background-image: url('<?php echo esc_url($otherServImg['url']); ?>')"></div>

                    <a class="types-list__heading" href="<?= $otherServLink; ?>">
                        <?= $otherServName; ?>
                    </a>
                </div>

                <div class="types-list__under">
                    <p class="types-list__descr">
                        <?= $otherServText; ?>
                    </p>

                    <button class="types-list__btn js-otherPopupBtn" data-btn=<?= $otherServBtnId; ?>>заказать</button>
                </div>
                
                
            </li>
        <?php endwhile; ?>
        <?php endif; ?>             
    </ul>

    <!-- Всплывающее окно Заказать нужную услугу -->
    <div class="popup form-popup js-otherPopup">
        <div class="js-scroll form-popup__scrolling">          
            <div class="container form-popup__cont">
                <button class="popup__close form-popup__close js-otherClose">
                    <svg class="popup__img">
                        <use xlink:href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/sprite.svg#close"></use>                                                   
                    </svg>
                </button>            
    
                <h2 class="popup__heading">Заказать <?= $otherServName; ?></h2>
    
                <div id="servicesForm">
                    <?php echo do_shortcode('[contact-form-7 id="180" title="Заказать нужную услугу (страница услуг)"]'); ?>
                </div>
            </div>           
        </div>
    </div>

<script>
    window.addEventListener('DOMContentLoaded', function(){
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

        // Открытие нужного попапа для заказа услуги

        // Сначала зададим все переменные для начального значения

        var needField = document.querySelectorAll('.js-otherPopup'); // сам попап 
        var needIitem = document.querySelectorAll('.types-list__item'); // все item 
        var needFieldOpen = document.querySelectorAll('.js-otherPopupBtn'); // Кнопки открытия попапов
        var needClose = document.querySelectorAll('.js-otherClose'); // Кнопки закрытия попапов
        var flag = false;
        
        needFieldOpen.forEach(function(eachNeedBtn){  // начинаем с функции итерации всех кнопок 
        const btn = eachNeedBtn.dataset.btn;

            eachNeedBtn.addEventListener('click', function(e){  // Далее функция открытия попапа - всё далее в ней  
                e.preventDefault();  
            
                var currentItem = document.querySelector( `[data-item = "${btn}" ]` ); // определим текущий Item
                // console.log(currentItem);
                var currentName = currentItem.querySelector('.types-list__heading').innerText; // определим содержание заголовка в нём
                

                needField.forEach(function(eachPopup) {  // Итерируем каждый попап
                    eachPopup.setAttribute('data-popup', btn); // Присвоим попапу атрибут равный атрибуту кнопки
                    
                    var currentPopupItem = document.querySelector( `[data-popup = "${btn}" ]` ); // определим текущий Popup
                    var currentPopupName = currentPopupItem.querySelector('h2'); // определим заголовок
                    currentPopupName.innerText = `Заказать "${currentName}"`;

                    if(!flag) {
                    fadeIn(eachPopup, 300, 'flex');
                            
                    document.querySelector('body').classList.add('closed');
                
                    } else {
                    fadeOut(eachPopup, 300);
                    
                    document.querySelector('body').classList.remove('closed');
                    }

                    needClose.forEach(function(eachOff) {  // Итерируем каждый попап
                        eachOff.setAttribute('data-off', btn); // Присвоим попапу атрибут равный атрибуту таба
                        
                        eachOff.addEventListener('click', function(){
                            fadeOut(eachPopup, 300);
                            
                            document.querySelector('body').classList.remove('closed');
                        });
                    });
                    
                    
                    // Присвоим форме ID
                    var servicesForm = document.querySelector('#servicesForm form');
                    servicesForm.setAttribute('id','servForm');

                    
                    // Всплытие окна Спасибо после отправки формы
                    document.querySelector('#servForm').addEventListener( 'wpcf7mailsent', function( event ) {
                    
                    document.querySelector('.popup-thanks').classList.add('thanks-active'); 
                            
                    fadeOut(eachPopup, 300);            
                    document.querySelector('body').classList.remove('closed');
                    
                    setTimeout(() => {
                        document.querySelector('.popup-thanks').classList.remove('thanks-active'); 
                    }, 2500 );  

                    }, false );
                    
                }); 
            }); 
        });
    });
</script>