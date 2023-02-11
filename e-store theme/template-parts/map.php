<?php
/*
* Карта с балуном
*/
?>   
   

    <section class="map-about">
        <div id="map" class="container about-map"></div>
    </section>s    

    <script type="text/javascript"> 
        ymaps.ready(init);

        function init() {
            var myMap = new ymaps.Map('map', {
                center: [<?php the_field('map_center_coords', 'options'); ?>],
                zoom: <?php the_field('map_center_zoom', 'options'); ?>,
                controls: ['zoomControl']
            }, {
                searchControlProvider: 'yandex#search'
            });

              // Ширина активного окна устройства:
            var availableScreenWidth = window.screen.availWidth;

            if(availableScreenWidth >= '992') {
                var placemark = new ymaps.Placemark(myMap.getCenter(), {
                // Зададим содержимое заголовка балуна.
                <?php $mapBalImg = get_field('map_baloon_image', 'options'); ?>
                balloonContentHeader: '',

                // Зададим содержимое основной части балуна.
                balloonContentBody: `
                <div class="baloon__box">
                    <figure class="baloon__image"><img src="<?php echo esc_url($mapBalImg['url']); ?>"></figure>
                    <h3 class="baloon__heading">Адрес</h3>
                    <p class="baloon__text"><?php the_field('map_baloon_address', 'options'); ?></p>                   
                    <h3 class="baloon__heading">Телефоны</h3>
                    <p class="baloon__phone"><?php the_field('map_baloon_tel', 'options'); ?></p>
                </div>`,
               
                // Зададим содержимое всплывающей подсказки.
                hintContent: '<?php the_field('map_baloon_name', 'options'); ?>'
            });
            } else {
                var myPlacemark = new ymaps.GeoObject({
                    geometry: {
                        type: "Point",
                        coordinates: [<?php the_field('map_baloon_mark_coords', 'options'); ?>]
                    }
                });

                myMap.geoObjects.add(myPlacemark);
            }
            // Добавим метку на карту.
            myMap.geoObjects.add(placemark);
            // Откроем балун на метке.
            placemark.balloon.open();

            myMap.behaviors.disable('scrollZoom');
        }
    </script>