<?php
/*
* Форма с калькулятором на странице услуг
*/
?>

    <h3 class="hero-service__subheading services-article__heading">
        Калькулятор
    </h3>

    <div class="service-form">
        <?php echo do_shortcode('[contact-form-7 id="103" title="Калькулятор на странице услуг (с файлом)"]'); ?>
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

               
        var serviceForm = document.querySelector('.service-form form');
        // Присвоим форме ID
        serviceForm.setAttribute('id','serviceForm');

        // Зададим форме нужный класс
        serviceForm.classList.add('hero-service__calc', 'service-calc', 'row', 'justify-content-between');


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


        // Всплытие окна Спасибо после отправки формы калькулятора
        serviceForm.addEventListener( 'wpcf7mailsent', function( event ) {

        document.querySelector('.popup-thanks').classList.add('thanks-active');

        document.querySelector('.popup-thanks').addEventListener('click', function(event) {
            if(this == event.target) {
                document.querySelector('.popup-thanks').classList.remove('thanks-active');

                document.querySelector('.field__file-fake').innerText = 'Файл не прикреплён';
                document.querySelector('.field__file-fake').classList.remove('field__file-fake-get');
                document.querySelector('.field__file-button').classList.remove('field__file-button-get'); 
            }
        });

        setTimeout(() => {
            document.querySelector('.popup-thanks').classList.remove('thanks-active');
            
            document.querySelector('.field__file-fake').innerText = 'Файл не прикреплён';
            document.querySelector('.field__file-fake').classList.remove('field__file-fake-get');
            document.querySelector('.field__file-button').classList.remove('field__file-button-get');
        }, 2500 );  

        });

        jQuery (function($) { 
            $('#serviceForm').on('submit', function(e) {
                e.preventDefault();

                // Получаем значение поля Откуда
                var service_from_field = document.querySelector('#service_from');
                var service_from = service_from_field.value;                 

                // Получаем значение поля Куда
                var service_to_field = document.querySelector('#service_to');
                var service_to = service_to_field.value;

                // Получаем значение поля Длина
                var service_dlina_field = document.querySelector('#service_dlina');
                var service_dlina = service_dlina_field.value;

                // Получаем значение поля Ширина
                var service_shir_field = document.querySelector('#service_shirina');
                var service_shir = service_shir_field.value;

                // Получаем значение поля Высота
                var service_vysota_field = document.querySelector('#service_vysota');
                var service_vysota = service_vysota_field.value;

                // Получаем значение поля Вес
                var service_ves_field = document.querySelector('#service_ves');
                var service_ves = service_ves_field.value;

                // Получаем значение поля Объём
                var service_kub_field = document.querySelector('#service_kub');
                var service_kub = service_kub_field.value;
                
                // Получаем значение поля Тип груза
                var service_gruz_type_field = document.querySelector('#service_gruz_type');
                var service_gruz_type = service_gruz_type_field.value;

                // Получаем значение поля фио
                var service_client_name_field = document.querySelector('#service_client_name');
                var service_client_name = service_client_name_field.value;                        

                // Получаем значение поля телефон
                var service_client_phone_field = document.querySelector('#service_client_phone');
                var service_client_phone = service_client_phone_field.value;
                                       

                let data = {
                    service_from,
                    service_to,
                    service_dlina,
                    service_shir,
                    service_vysota,
                    service_ves,
                    service_kub,
                    service_gruz_type,
                    service_client_name,
                    service_client_phone,
                    action: 'service-ajax'            
                }

                $.ajax({
                    url: '/wp-content/themes/e-store/service-post.php',
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
</script>