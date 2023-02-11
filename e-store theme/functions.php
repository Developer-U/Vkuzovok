<?php

/*
 * Подключение настроек темы
 */
require get_template_directory() . '/includes/theme-settings.php';
/*
 * Подключение области виджетов
 */
require get_template_directory() . '/includes/widget-areas.php';
/*
 * Подключение скриптов и стилей
 */
require get_template_directory() . '/includes/enqueue-script-style.php';
/*
 * Вспомогательные функции
 */
require get_template_directory() . '/includes/helpers.php';

/*
 * Добавим произвольные типы записей
 */
require get_template_directory() . '/includes/post-types.php';

/*
 * Файл навигации (меню на сайте)
 */
require get_template_directory() . '/includes/navigations.php';

/*
 * Файл пагинации на страницах
 */
require get_template_directory() . '/includes/pagination.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/includes/woocommerce.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
}


/**
 * Подключаем обработчик Ajax.
 */
require get_template_directory() . '/includes/ajax.php';


// Добавим Страницу опций на ACF PRO options_theme

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Основные настройки',
		'menu_title'	=> 'Контакты',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Идентичные блоки',
		'menu_title'	=> 'Идентичные блоки',
		'icon_url' => 'dashicons-table-col-after',
		'menu_slug'	=> 'theme-general-blocks',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Список городов',
		'menu_title'	=> 'Города',
		'icon_url' => 'dashicons-admin-site-alt',
		'menu_slug'	=> 'theme-general-settings3',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	
}

/**
 * TimePicker for Contact Form 7
 * Shortcode [text mytime_do id:timepicker]
 */
add_action( 'wp_footer', function() { ?>
	<script>
	jQuery(function ($) {
	$('#timepicker').prop('type', 'time');
	});
	</script>
	<?php } );





## Регистрируем шорткод поля ACF вид вакансии для передачи в CF7
add_action('init', function(){
    add_shortcode('vacancy_type', function(){
        return get_sub_field('vacancy_name');
    });
});


// Удалим тип постов post по умлочанию

function remove_default_post_type($args, $postType) {
    if ($postType === 'post') {
        $args['public']                = false;
        $args['show_ui']               = false;
        $args['show_in_menu']          = false;
        $args['show_in_admin_bar']     = false;
        $args['show_in_nav_menus']     = false;
        $args['can_export']            = false;
        $args['has_archive']           = false;
        $args['exclude_from_search']   = true;
        $args['publicly_queryable']    = false;
        $args['show_in_rest']          = false;
    }

    return $args;
}
add_filter('register_post_type_args', 'remove_default_post_type', 0, 2);


//Удалим комментарии из консоли

add_action( 'admin_init', 'my_remove_menu_pages' );
    function my_remove_menu_pages() {
        remove_menu_page('edit.php');
        remove_menu_page('edit-comments.php');
        remove_menu_page('link-manager.php');
    }

// Подключение нового типа произвольного поля - видео

add_action('acf/register_fields', 'my_register_fields');

function my_register_fields()
{
    include_once('acf-field-video/acf-video.php');
}

// Сделаем возможность добавлять шорткоды в CF7

add_action( 'wpcf7_init', 'estore_awooc_wpcf7_add_form_tag', 10 );
function estore_awooc_wpcf7_add_form_tag() {
	wpcf7_add_form_tag('add_car', 'add_car_cf7_func', true);
}

// Зарегистрируем шорткод Contact Form 7 Попап калькулятор
function add_car_cf7_func() {
	ob_start();
	?> 	
	<div class="zayavka-calculator__one zayavka-calculator__one_first car-cont__box">
		<div>		
			<h3 class="zayavka-second__heading">
				Машина
			</h3>

			<select name="carChoosePopup" id="carChoosePopup">
				<?php if( have_rows('add_car', 'options') ): ?>
				<?php while( have_rows('add_car', 'options') ): the_row();
				$carTitle = get_sub_field('car_title', 'options');			
				$carId = get_sub_field('car_id', 'options');
				?>

					<option value=" <?= $carId; ?> " data-car="<?= $carId ?>"><?= $carTitle; ?></option>			

				<?php endwhile; ?>
				<?php endif; ?> 
			</select>
		</div>

		<div class="main-cont">

			<?php if( have_rows('add_car_name', 'options') ): ?>
			<?php while( have_rows('add_car_name', 'options') ): the_row();
			$carName = get_sub_field('car_name', 'options');
			$carParamId = get_sub_field('car_param_id', 'options');
			$carParamPrice = get_sub_field('car_param_price', 'options');
			$carHourPrice = get_sub_field('car_hour_price', 'options');		
			$carImage = get_sub_field('car_image', 'options');	
			?>		
			
			<div class="js-serviceParams2Popup" data-params2Popup="<?= $carParamId; ?>">
				<ul class="zayavka-second__list ">       
					<li class="zayavka-second__item"><?= $carName; ?></li> 
					<li class="zayavka-second__item visually-hidden js-price"><?= $carParamPrice; ?></li> 
					<li class="zayavka-second__item visually-hidden js-hours"><?= $carHourPrice; ?></li>
				</ul>
				
				<div class="car-cont__right">
					<img src="<?php echo esc_url($carImage['url']); ?>" alt="<?php echo esc_attr($carImage['alt']); ?>">
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?> 
		</div>				
		
	</div>
	<?php
	return ob_get_clean();
}



// Зарегистрируем шорткод Contact Form 7 Попап заявка на машину
function add_car_cf7_func_car() {
	?> 	
	<div class="zayavka-calculator__one zayavka-calculator__one_zayavka car-cont__box">
		<div>	            
			<h3 class="zayavka-second__heading">
				Машина
			</h3>

			<select name="carChoosePopup" id="carChoose">
				<?php if( have_rows('add_car', 'options') ): ?>
				<?php while( have_rows('add_car', 'options') ): the_row();
				$carTitle = get_sub_field('car_title', 'options');			
				$carId = get_sub_field('car_id', 'options');
				?>

					<option value=" <?= $carId; ?> " data-carZ="<?= $carId ?>"><?= $carTitle; ?></option>			

				<?php endwhile; ?>
				<?php endif; ?> 
			</select>
		</div>

		<div>
			<?php if( have_rows('add_car_name', 'options') ): ?>
			<?php while( have_rows('add_car_name', 'options') ): the_row();
			$carName = get_sub_field('car_name', 'options');
			$carParamId = get_sub_field('car_param_id', 'options');
			$carParamPrice = get_sub_field('car_param_price', 'options');
			$carHourPrice = get_sub_field('car_hour_price', 'options');
			$carImageZ = get_sub_field('car_image', 'options');		
			?>

			<div class="js-zayavkaParams" data-zayavkaParams="<?= $carParamId; ?>">		
				<ul class="zayavka-second__list">          
					<li class="zayavka-second__item"><?= $carName; ?></li> 
					<li class="zayavka-second__item visually-hidden js-price-zayavka"><?= $carParamPrice; ?></li> 
					<li class="zayavka-second__item visually-hidden js-hours-zayavka"><?= $carHourPrice; ?></li>
				</ul>

				<div class="car-cont__right">
					<img src="<?php echo esc_url($carImageZ['url']); ?>" alt="<?php echo esc_attr($carImageZ['alt']); ?>">
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?> 		
		</div> 
	</div>     
	<?php
}
add_shortcode('add_car_zayzvka', 'add_car_cf7_func_car');

## Регистрируем шорткод поля ACF вид вакансии для передачи в CF7
add_action('init', function(){
    add_shortcode('total_price', function(){
        return get_sub_field('totalPriceP','options');
    });
});