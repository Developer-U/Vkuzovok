<?php
/*
Template Name: Карта сайта
*/
get_header();
?>

    <section class="hero-section site-map">
        <div class="container">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
            ?> 

            <h1 class="avtopark__heading price-page__heading"><?php the_title(); ?></h1>

            <div class="site-map__cont site-map-cont row">
                <article class="site-map-cont__article col-lg-3 col-md-4 col-6">
                    <h2 class="site-map-cont__heading">Основное меню</h2>
                    
                    <?php estore_primary_menu(); ?>
                </article>

                <article class="site-map-cont__article col-lg-3 col-md-4 col-6">
                    <h2 class="site-map-cont__heading">Меню услуги</h2>

                    <?php estore_secondary_menu(); ?>
                </article>

                <article class="site-map-cont__article col-lg-3 col-md-4 col-6">
                    <h2 class="site-map-cont__heading">Услуги: перевозки</h2>

                    <ul class="site-map-cont__list sitemap-list">
                        <?php
                            // выведем из типа постов works только первый - Перевозки
                            $perevoz = get_posts( array(
                                'numberposts' => 20,
                                'category'    => 0,
                                'orderby'     => 'date',
                                'order'       => 'ASC',
                                'include'     => array(),
                                'exclude'     => array(),
                                'meta_key'    => '',
                                'meta_value'  => 'Перевозки',
                                'post_type'   => 'works',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                        global $post; ?>

                        <?php if( $perevoz) { ?>
                        <?php foreach( $perevoz as $post ){
                            setup_postdata( $post );
                        ?>

                            <li class="sitemap-list__item"> 
                                <a class="sitemap-list__link" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </li>

                        <?php }                         
                        
                        } else { ?>
                            <p class="news__subheading">Перевозки не добавлены</p>
                        <?php }                  
                        
                        wp_reset_postdata(); // сброс
                        ?> 

                    </ul>
                </article>

                <article class="site-map-cont__article col-lg-3 col-md-4 col-6">
                    <h2 class="site-map-cont__heading">Услуги: аренда</h2>

                    <ul class="site-map-cont__list sitemap-list">
                        <?php
                            
                            $arenda = get_posts( array(
                                'numberposts' => 20,
                                'category'    => 0,
                                'orderby'     => 'date',
                                'order'       => 'ASC',
                                'include'     => array(),
                                'exclude'     => array(),
                                'meta_key'    => '',
                                'meta_value'  => 'Аренда',
                                'post_type'   => 'works',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );
        
                        global $post; ?>
        
                        <?php if( $arenda) { ?>
                        <?php foreach( $arenda as $post ){
                            setup_postdata( $post );
                        ?>

                            <li class="sitemap-list__item"> 
                                <a class="sitemap-list__link" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </li>

                        <?php }                         
                        
                        } else { ?>
                            <p class="news__subheading">Услуги аренды не добавлены</p>
                        <?php }                  
                        
                        wp_reset_postdata(); // сброс
                        ?> 

                    </ul>
                </article>

                <article class="site-map-cont__article col-lg-3 col-md-4 col-6">
                    <h2 class="site-map-cont__heading">Услуги: для бизнеса</h2>

                    <ul class="site-map-cont__list sitemap-list">
                        <?php
                            
                            $business = get_posts( array(
                                'numberposts' => 20,
                                'category'    => 0,
                                'orderby'     => 'date',
                                'order'       => 'ASC',
                                'include'     => array(),
                                'exclude'     => array(),
                                'meta_key'    => '',
                                'meta_value'  => 'Для бизнеса',
                                'post_type'   => 'works',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );
        
                        global $post; ?>
        
                        <?php if( $business) { ?>
                        <?php foreach( $business as $post ){
                            setup_postdata( $post );
                        ?>

                            <li class="sitemap-list__item"> 
                                <a class="sitemap-list__link" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </li>

                        <?php }                         
                        
                        } else { ?>
                            <p class="news__subheading">Услуги для бизнеса не добавлены</p>
                        <?php }                  
                        
                        wp_reset_postdata(); // сброс
                        ?> 

                    </ul>
                </article>                

                <article class="site-map-cont__article col-lg-3 col-md-4 col-6">
                    <h2 class="site-map-cont__heading">О компании</h2>
                    
                    <?php estore_about_menu(); ?>
                </article>                
            </div>
        </div>
    </section>

<?php get_footer(); ?>