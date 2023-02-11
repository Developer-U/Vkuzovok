<?php
/**
 * Блок "Калькулятор"
 * 
 */
?>

<section class="zayavka">
    <div class="container zayavka__cont zayavka-main__cont">
        <h2 class="avtopark__heading zayavka__heading">
            <?php the_field('service_avtopark_head'); ?>
        </h2>

        <div id="zakMashFor" class="zayavka__form zayzvka-calc">
            <?php echo do_shortcode('[contact-form-7 id="1072" title="Калькулятор в попапе Заказать машину"]'); ?>
        </div >
       

        <p class="calc-text"><?php the_field('calc_text_field', 'options'); ?></p>
    </div>
</section>

<script>
    //  window.addEventListener('DOMContentLoaded', function(){
        
    //     function calcAuto(thecontent) {
    //         // Калькулятор в попапе

    //         // Присвоим форме ID
    //         // var newAvtoparkPopupForm = thecontent.querySelector('#popupCalcFormFor form');                     
    //         // newAvtoparkPopupForm.setAttribute('id', 'readyServicePopupForm');

    //         // Вначале объявим глобально переменные для итогового подсчёта
    //         // Выбор машины в калькуляторе       
                      
    //         var elementP = thecontent.querySelector('#carChoosePopup')    
    //         ,elValP =  thecontent.querySelector('#carChoosePopup').value; 

    //        var elementPParent = elementP.closest('.zayavka');
    //        console.log(elementPParent);
      
    //         var basePriceP = thecontent.querySelector('li.js-price').textContent; // Базовая цена в зависимости от машины        
    //         var kilometrazhP = thecontent.querySelector('input#kilometrazhPopup').value; // Базовый километраж            
    //         var hourPriceP = thecontent.querySelector('li.js-hours').textContent; // Цена за час по машине
    //         var val3 = thecontent.querySelector( '#timePopup' ).value; // Количество часов            
    //         var priceCarP = basePriceP * kilometrazhP // Стоимость машины в зависимости от клилометража            
    //         var hourPriceTotalP = hourPriceP * val3 // Стоимость по количеству часов
    //         var priceFree = priceCarP + hourPriceTotalP // Итого (без грузчиков и пассажиров)            

    //         var gruzchikPriceP = <?php the_field('gruzchik_price', 'options'); ?>;  // Цена за одного грузчика в час
    //         var gruzchikQtyP = 0;  // Количество грузчиков
    //         var gruzchikPriceTotalP = gruzchikPriceP * gruzchikQtyP;  // Стоимость всех грузчиков             

    //         var totalPriceP = priceFree + gruzchikPriceTotalP; // ИТОГО цена           

    //         var readyPopupBtn = thecontent.querySelector('#readyServicePopup');
        
    //         readyPopupBtn.value= `успей заказать за ${totalPriceP} ₽ ` // В кнопке значение ИТОГО

    //         var eachFormP = thecontent.querySelector('#readyServicePopupForm'); 

    //         // Вычислим значение каждой цены в зависимоти от машины
    //         // + выбор нужной машины
    //         elementP.addEventListener('change', function(event){
    //             var car = this.value;
                
    //             var parentForm = this.closest('.zayavka__form');
    //             console.log(parentForm);

    //             parentForm.querySelectorAll("[data-params2Popup]").forEach(function(tabContent){
    //                 tabContent.style.display = 'none'; 
                                     
    //             });

    //             needTab = parentForm.querySelector('[data-params2Popup='+car+']');                
    //             needTab.style.display = 'block';
              

    //             // Цена за 1 км по машине
    //             basePriceP = needTab.querySelector('li.js-price').textContent;
    //             // console.log(basePriceP);

    //             // Цена за 1 час по машине
    //             hourPriceP = needTab.querySelector('li.js-hours').textContent;

    //             priceCarP = basePriceP * kilometrazhP;
    //             hourPriceTotalP = hourPriceP * val3;
    //             priceFree = priceCarP + hourPriceTotalP;
    //             recountP(); 
    //         });

            

    //         let btns = thecontent.querySelectorAll('.calc__btn'); // все кнопки в текущем контейнере
    //             /********************/
            
    //         btns.forEach(function(btn){
    //             // 1. Километраж, км  
    //             btn.addEventListener('click', function(e){
    //                 e.preventDefault(); 

    //                 // Переменные для input Километраж
    //                 let qty0 = thecontent.querySelector( '#kilometrazhPopup' ),               
    //                 val0 = parseInt( qty0.value ),		
    //                 min0 = parseInt( qty0.getAttribute( 'min' ) ),
    //                 max0 = parseInt( qty0.getAttribute( 'max' ) ),
    //                 step0 = parseInt( qty0.getAttribute( 'step' ) );                     

    //                 // Переменные для input Грузчики
    //                 let qty = thecontent.querySelector( '#cornersPopup' ),               
    //                 val = parseInt( qty.value ),		
    //                 min = parseInt( qty.getAttribute( 'min' ) ),
    //                 max = parseInt( qty.getAttribute( 'max' ) ),
    //                 step = parseInt( qty.getAttribute( 'step' ) );               
                  

    //                 // Переменные для Продолжительность                        
    //                 var qty3 = thecontent.querySelector( '#timePopup' ),
    //                 val3 = parseInt( qty3.value ),		
    //                 min3 = parseInt( qty3.getAttribute( 'min' ) ),
    //                 max3 = parseInt( qty3.getAttribute( 'max' ) ),
    //                 step3 = parseInt( qty3.getAttribute( 'step' ) );


    //                 // дальше меняем значение количества в зависимости от нажатия кнопки Плюс и минус
    //                 if(btn.classList.contains('plus') && btn.classList.contains('js-plusKmPopup')) {
    //                     if ( max0 && ( max0 <= val0 ) ) {
    //                         qty0.value = max0;
    //                     } else {				
    //                         qty0.value = (val0 + step0);  

    //                         // value - итоговое количество км
    //                         kilometrazhP = val0 + step0;                                                     
    //                         priceCarP = basePriceP * kilometrazhP;                            
    //                         hourPriceTotalP = hourPriceP * val3 // Стоимость по количеству часов
                       
    //                         priceFree = priceCarP + hourPriceTotalP // Итого (без грузчиков и пассажиров)                    
    //                         recountP();
    //                     }
    //                 } else if(btn.classList.contains('minus') && btn.classList.contains('js-minusKmPopup')) {
    //                     if ( min0 && ( min0 >= val0 ) ) {
    //                         qty0.value = min0;
    //                     } else if ( val0 > 1 ) {
    //                         qty0.value = ( val0 - step0 );
    //                         kilometrazhP = val0 - step0;                          
    //                         priceCarP = basePriceP * kilometrazhP;
    //                         hourPriceTotalP = hourPriceP * val3 // Стоимость по количеству часов
    //                         priceFree = priceCarP + hourPriceTotalP // Итого (без грузчиков и пассажиров)                
    //                         recountP();
    //                     }
    //                 } else if(btn.classList.contains('plus') && btn.classList.contains('js-plusPopup1')) {

    //                     // 2. Количество грузчиков                           
    //                     if ( max && ( max <= val ) ) {
    //                         qty.value = max;
    //                     } else {				
    //                         qty.value = (val + step); 

    //                         // value - итоговое количество грузчиков
    //                         gruzchikQtyP = val + step;
    //                         gruzchikPriceTotalP = gruzchikPriceP * gruzchikQtyP;                                
    //                         recountP();                    
    //                     }
    //                 } else if(btn.classList.contains('minus') && btn.classList.contains('js-minusPopup1')) {
    //                     if ( min && ( min >= val ) ) {
    //                         qty.value = min ;
    //                     } else if ( val > 0 ) {
    //                         qty.value = ( val - step );
    //                         gruzchikQtyP = val - step;
    //                         gruzchikPriceTotalP = gruzchikPriceP * gruzchikQtyP;
    //                         recountP();
    //                     }
    //                 }  else if(btn.classList.contains('plus') && btn.classList.contains('js-plus3Popup')) {
    //                     // 3. Продолжительность 
    //                     if ( max3 && ( max3 <= val3 ) ) {
    //                         qty3.value = max3 ;
    //                     } else {				
    //                         qty3.value = ( val3 + step3 );
                            
    //                         val3 = val3 + step3;                                    
    //                         hourPriceTotalP = hourPriceP * val3 // Стоимость по количеству часов
    //                         priceFree = priceCarP + hourPriceTotalP // Итого (без грузчиков и пассажиров) 
    //                         recountP();
    //                     }

    //                 } else if(btn.classList.contains('minus') && btn.classList.contains('js-minus3Popup')) {
    //                     if ( min3 && ( min3 >= val3 ) ) {
    //                         qty3.value = min3;
    //                     } else if ( val3 > 1 ) {
    //                         qty3.value = ( val3 - step3 );
    //                         val3 = val3 - step3;
                                    
    //                         hourPriceTotalP = hourPriceP * val3 // Стоимость по количеству часов
    //                         priceFree = priceCarP + hourPriceTotalP // Итого (без грузчиков и пассажиров)
    //                         recountP();
    //                     }
    //                 }
    //             });
                
    //         });

    //         // Расчёт километража в случае, если ввели цифру руками
    //         thecontent.querySelector('input#kilometrazhPopup').addEventListener('change', function(event){
    //             kilometrazhP = this.value;                          
    //             priceCarP = basePriceP * kilometrazhP;
    //             hourPriceTotalP = hourPriceP * val3 // Стоимость по количеству часов
    //             priceFree = priceCarP + hourPriceTotalP // Итого (без грузчиков и пассажиров)                
    //             recountP();
    //         });


    //             // Применение промокода
            
    //             var code1 = '<?php the_field('promo1', 'options') ?>'
    //             ,code2 = '<?php the_field('promo2', 'options') ?>'
    //             ,code3 = '<?php the_field('promo3', 'options') ?>'
    //             ,code4 = '<?php the_field('promo4', 'options') ?>'
    //             ,code5 = '<?php the_field('promo5', 'options') ?>'
    //             ,code6 = '<?php the_field('promo6', 'options') ?>'
    //             ,code7 = '<?php the_field('promo7', 'options') ?>'
    //             ,code8 = '<?php the_field('promo8', 'options') ?>'
    //             ,code9 = '<?php the_field('promo9', 'options') ?>'
    //             ,code10 = '<?php the_field('promo10', 'options') ?>';

    //             var codes = [
    //                 code1,
    //                 code2,
    //                 code3,
    //                 code4,
    //                 code5,
    //                 code6,
    //                 code7,
    //                 code8,
    //                 code9,
    //                 code10,
    //             ]            	
            

               
    //             // Функция пересчёта
    //             const recountP = () => {
    //                 totalPriceP = priceFree + gruzchikPriceTotalP; // ИТОГО цена   
    //                 readyPopupBtn.value = `успей заказать за ${totalPriceP} ₽ `          
    //                 } 

    //                 // Сабмит формы в попапе калькулятор
                    

    //                 newAvtoparkPopupForm.addEventListener('wpcf7submit', function(event) { 

    //                     // Получаем данные для админки
    //                     // Получаем значение поля Откуда улица
    //                     var calc_from_streetP = thecontent.querySelector('.js-addressPopupFrom');
    //                     var street_from_valP = calc_from_streetP.value; 
    //                         if(street_from_valP !== "") {
    //                             var street_from_val_fullP = street_from_valP;
    //                         } 
                                    
                        
    //                     // Получаем значение поля Откуда дом
    //                     var calc_from_houseP = thecontent.querySelector('.js-housePopupFrom');                
    //                     var house_from_valP = calc_from_houseP.value; 
    //                     if(house_from_valP !== "") {
    //                         var house_from_val_fullP = house_from_valP;
    //                     } 

    //                     // Получаем значение поля Куда улица
    //                     var calc_to_streetP = thecontent.querySelector('.js-addressPopupTo');
    //                     var street_to_valP = calc_to_streetP.value; 
    //                     if(street_to_valP !== "") {
    //                         var street_to_val_fullP = street_to_valP;
    //                     } 
                        
    //                     // Получаем значение поля Куда дом
    //                     var calc_to_houseP = thecontent.querySelector('.js-housePopupTo');
    //                     var house_to_valP = calc_to_houseP.value; 
    //                     if(house_to_valP !== "") {
    //                         var house_to_val_fullP = house_to_valP;
    //                     } 
                        
    //                     gruzchikQtyP = thecontent.querySelector('#cornersPopup').value;                         

    //                     elValP =  thecontent.querySelector('#carChoosePopup').value;

    //                     kilometrazhP = thecontent.querySelector('#kilometrazhPopup').value;

    //                     var dateValP = thecontent.querySelector('#calc_input_datePopup').value; 

    //                     var telInputP = newAvtoparkPopupForm.querySelector('.service-calc__input_telef');
    //                     var telValP = telInputP.value;
    //                     var totalPriceP = document.querySelector('#readyServicePopup').value;      

    //                     var data = {
    //                         street_from_val_fullP,
    //                         house_from_val_fullP,
    //                         street_to_val_fullP,
    //                         house_to_val_fullP,
    //                         gruzchikQtyP,                           
    //                         elValP,
    //                         dateValP,
    //                         kilometrazhP,
    //                         telValP,
    //                         totalPriceP,
    //                         action: 'calc-popup-ajax'            
    //                     }

    //                     $.ajax({
    //                         url: '/wp-content/themes/e-store/calcpopup-post.php',
    //                         method: 'post',
    //                         dataType: 'json',
    //                         data: data,
    //                         success: function(data){
    //                         console.log(data); 
    //                         }
    //                     });  
                        
    //                     if( telValP !=="" ) {                
    //                         document.querySelector('.popup-thanks').classList.add('thanks-active');

    //                         newAvtoparkPopupForm.reset();

    //                         $('.for-calc-popup').fadeOut();
    //                         document.querySelector('body').classList.remove('closed');

    //                         document.querySelector('.popup-thanks').addEventListener('click', function(event) {
    //                             if(this == event.target) {
    //                                 document.querySelector('.popup-thanks').classList.remove('thanks-active');
    //                             }
                                
    //                         });

    //                         setTimeout(() => {
    //                             document.querySelector('.popup-thanks').classList.remove('thanks-active');            
    //                         }, 2500 );
    //                     } else {
    //                         return false;
    //                     }
    //                 }, false, );

            
    //                 /*------------Попап-------------*/

    //                 var promoBtnP = eachFormP.querySelector('.js-promoP');
    //                 var promoNonceP = eachFormP.querySelector('.js-nonceP'); 

    //                 promoBtnP.onclick = function(e) {
    //                     e.preventDefault();
    //                     var codeInputP = eachFormP.querySelector('#promoCodePopup');
    //                     var codeInputValP = codeInputP.value;
    //                     promoNonceP.innerText = '';
                        

    //                     if( codeInputValP == codes[0] || codeInputValP == codes[1] || codeInputValP == codes[2] || codeInputValP == codes[3] || codeInputValP == codes[4] || codeInputValP == codes[5] || codeInputValP == codes[6] || codeInputValP == codes[7] || codeInputValP == codes[8] || codeInputValP == codes[9] ) {
    //                         totalPriceP = totalPriceP - (totalPriceP * 10 / 100);
    //                         readyPopupBtn.value = `успей заказать за ${totalPriceP} ₽ ` ;   
    //                         eachFormP.querySelector('#promoCodePopup').value = "";
                            
    //                         promoBtnP.innerText = 'скидка 10%';
    //                         promoBtnP.style.backgroundColor = '#990000';

    //                     } else {
    //                         promoNonceP.innerText = 'Код не найден';
    //                         eachFormP.querySelector('#promoCodePopup').value = "";
    //                     }                
    //                 }
            

            

    //     };      

    //     // На стрнаице
    //     var allTheContents = document.querySelector('.zayavka .calc-page');
    //     console.log(allTheContents);
    //     calcAuto(allTheContents);

    //     // В попапе
    //     var allPopups = document.querySelector('.popup-calc');
    //     console.log(allPopups);
    //     calcAuto(allPopups);
        


        
        

      
    // });  
</script>



