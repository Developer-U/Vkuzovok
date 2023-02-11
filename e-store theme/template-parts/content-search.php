<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package estore
 */

?>

<article id="post-<?php the_ID(); ?>" class="types-list__item services-article__item">
	<div class="types-list__up services-article__up">		
		
		<div class="image-search">
			<?php estore_post_thumbnail(); ?>
		</div>

		<header class="entry-header ">
			<?php the_title( sprintf( '<h2 class="services-article__heading catalog-link"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php
				estore_posted_on();
				estore_posted_by();
				?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
		
		<?php if(get_field( 'main_price_service') ): ?>
			<p class="services-article__price">от <?php the_field( 'main_price_service', $post->ID ); ?> ₽</p>
		<? endif; ?>

		<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	</div>

	
	

	
</article><!-- #post-<?php the_ID(); ?> -->
