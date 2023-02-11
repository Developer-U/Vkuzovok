<?php
/**
 * Блок "Калькулятор в попапе"
 * 
 */
?>

    <form id="popupCalcFormZakZak" action="#" class="zayavka__form zayzvka-calc">
        <div class="zayavka-calc__top js-calcPopupTop">
            <div class="zayavka-calc__group js-calcGroupPopup row justify-content-between">
                <div class="zayavka-calc__side zayavka-calc__side_left ">
                    <fieldset class="row justify-content-between">
                        <legend class="zayavka-calc__legend">Откуда</legend>
                        <input class="service-calc__input zayavka-calc__input service-calc__input_address js-addressPopupFrom" type="text" placeholder="Улица">
                        <input class="service-calc__input zayavka-calc__input service-calc__input_house js-housePopupFrom" type="text" placeholder="Дом">
                    </fieldset>
                </div>

                <div class="zayavka-calc__side zayavka-calc__side_right">
                    <fieldset class="row justify-content-between">
                        <legend class="zayavka-calc__legend">Куда</legend>
                        <input class="service-calc__input zayavka-calc__input service-calc__input_address js-addressPopupTo" type="text" placeholder="Улица">
                        <input class="service-calc__input zayavka-calc__input service-calc__input_house js-housePopupTo" type="text" placeholder="Дом">
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="under-line row justify-content-between align-items-center">
            <button class="zayavka__add col-auto js-addCalcPopupAddess">Добавить адрес</button>

            <button class="zayavka__add col-auto js-removeCalcPopupAddess">Сбросить</button>
        </div>                

        <div class="zayavka-calc__medium under-line row justify-content-between">
            <div class="zayavka-calc__first">
                <div class="zayavka-calc__one">
                    <label for="cornersPopup" class="zayavka-calc__heading">
                        Грузчики 
                        <input id="cornersPopup" class="service-calc__input zayavka-calc__input" type="number" title="QtyPopup" min="0" max="50" step="1" value="1">
                            <button class="calc__btn minus js-minusPopup1" type="button" >-</button>
                            <button class="calc__btn plus js-plusPopup1" type="button" >+</button>
                    </label>
                </div>
                
                <div class="zayavka-calc__one">
                    <label for="passengersPopup" class="zayavka-calc__heading">
                        Пассажиры
                        <input id="passengersPopup" class="service-calc__input zayavka-calc__input" type="number" title="PassPopup" min="0" max="50" step="1" value="2">
                            <button class="calc__btn minus js-minusPopup2" type="button" >-</button>
                            <button class="calc__btn plus js-plusPopup2" type="button" >+</button>
                    </label>
                </div>
            </div>

            <div class="zayavka-calc__second zayavka-second row justify-content-between">
                <div class="zayavka-second__left col-lg-4 col-12">
                    <h3 class="zayavka-second__heading">
                        Машина
                    </h3>

                    <select name="carChoosePopup" id="carChoosePopup">
                        <option value="фермер тент">фермер тент</option>
                        <option value="фургон высокий">фургон высокий</option>
                        <option value="фургон низкий">фургон низкий</option>
                    </select>
                    
                    <ul class="zayavka-second__list js-serviceParams2Popup" data-params2Popup="one">
                        <li class="zayavka-second__item">Высокий 4 метра</li>
                        <li class="zayavka-second__item">4м / 2. 2м / 2м</li>
                        <li class="zayavka-second__item">Груз 950кг</li>
                    </ul>

                    <ul class="zayavka-second__list js-serviceParams2Popup" data-params2Popup="two">
                        <li class="zayavka-second__item">Фургон 3 метра</li>
                        <li class="zayavka-second__item">4м / 2. 2м / 2м</li>
                        <li class="zayavka-second__item">Груз 850кг</li>
                    </ul>

                    <ul class="zayavka-second__list js-serviceParams2Popup" data-params2Popup="three">
                        <li class="zayavka-second__item">Высокий 3 метра</li>
                        <li class="zayavka-second__item">4м / 2. 2м / 2м</li>
                        <li class="zayavka-second__item">Груз 950кг</li>
                    </ul>
                </div>

                <div class="zayavka-second__right col-lg-8 col-12">
                    <?php 
                    $imageCarOne = get_field('service_image_car_one', 'options'); 
                    $imageCarTwo = get_field('service_image_car_two', 'options');
                    $imageCarThree = get_field('service_image_car_three', 'options');
                    ?>

                    <figure class="zayavka-second__image js-serviceImagePopup" data-imagePopup="one">
                        <img src="<?php echo esc_url($imageCarOne['url']); ?>" alt="<?php echo esc_attr($imageCarOne['alt']); ?>" class="park-list__img">
                    </figure>

                    <figure class="zayavka-second__image js-serviceImagePopup" data-imagePopup="two">
                        <img src="<?php echo esc_url($imageCarTwo['url']); ?>" alt="<?php echo esc_attr($imageCarTwo['alt']); ?>" class="park-list__img">
                    </figure>

                    <figure class="zayavka-second__image js-serviceImagePopup" data-imagePopup="three">
                        <img src="<?php echo esc_url($imageCarThree['url']); ?>" alt="<?php echo esc_attr($imageCarThree['alt']); ?>" class="park-list__img">
                    </figure>
                </div>
            </div>

            <div class="zayavka-calc__third row align-items-start">
                <fieldset class="zayavka-calc__data row align-items-start justify-content-between">
                    <legend class="zayavka-calc__legend">Дата и время</legend>
                    <input id="calc_input_datePopup" class="service-calc__input zayavka-calc__input service-calc__input_date" type="date">
                    <input id="calc_input_timePopup" class="service-calc__input zayavka-calc__input service-calc__input_time" type="time">
                </fieldset>

                <div class="zayavka-calc__timing col">
                    <label for="timePopup" class="zayavka-calc__heading zayavka-calc__legend">
                        Длительность, час
                        <input id="timePopup" class="service-calc__input zayavka-calc__input" type="number" title="TimePopup" min="0" max="50" step="1" value="2">
                            <button class="calc__btn minus js-minus3Popup" type="button" >-</button>
                            <button class="calc__btn plus js-plus3Popup" type="button" >+</button>
                    </label>
                </div>                        

                <div class="zayavka__promo zayavka-promo col-12">
                    <h4 class="zayavka-calc__subheading">
                        ПРОМОКОД
                    </h4>

                    <div class="zayavka-promo__box row align-items-center">
                        <input id="promoCodePopup" class="service-calc__input zayavka-calc__input service-calc__input_promo" type="text" placeholder="Ввести промокод">

                        <button class="zayavka-promo__btn js-promoP">применить</button>

                        <p class="promo-nonce js-nonceP"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="zayavka__bottom row align-items-start">
            <input id="inputTelPopup" class="service-calc__input zayavka-calc__input service-calc__input_phone" type="tel" placeholder="Телефон">

            <div class="zayavka__box col row">
                <button id="readyServicePopup" class="zayavka__btn col-auto" type="submit"></button>

                <p class="zayavka__agree">
                    Я согласен условиями предоставления услуг и обработкой
                    моих персональных данных при нажатии “Заказать звонок”
                </p>
            </div>                    
        </div>
    </form>

