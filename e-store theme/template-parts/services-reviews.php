<?php
/**
 * Блок "Отзывы"
 * 
 */
?>

<?php if( get_field('rev_block_head','options') ): ?>

    <section class="reviews">
        <div class="container">
            <h2 class="avtopark__heading reviews__heading">
                <?php the_field('rev_block_head','options'); ?>
            </h2>

            <h3 class="reviews__subheading">
                <?php the_field('rev_block_subhead','options'); ?>
            </h3>            

            <article class="services-article reviews-article row js-reviewsArt">
                <h2 class="visually-hidden" style="position: relative; z-index:99">
                    <?= $revTypeName1 ?>
                </h2>

                <div class="blog row">
                <?php
                $rev_block_video1 = get_field('rev_block_video1','options'); 
                $rev_block_video2 = get_field('rev_block_video2','options');
                $rev_block_name1 = get_field('rev_block_name1','options');
                $rev_block_name2 = get_field('rev_block_name2','options');
                ?>
                    <div class="blog__article blog-article reviews-article__article col-md-6 col-12">
                        <figure class="blog-article__image reviews-article__image">
                            <?php
                                if(!empty($rev_block_name1)) {                                    
                            ?>
                                <video controls class="video-block__video">
                                    <source src="<?php echo esc_url($rev_block_video1['url']); ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>                               

                            <?php } ?> 
                        </figure>
    
                        <h3 class="blog-article__heading"><?= $rev_block_name1; ?></h3>
                    </div>

                    <div class="blog__article blog-article reviews-article__article col-md-6 col-12">
                        <figure class="blog-article__image reviews-article__image">                            
                            <?php
                                if(!empty($rev_block_video2)) {                                    
                            ?>

                                <video controls class="video-block__video">
                                    <source src="<?php echo esc_url($rev_block_video2['url']); ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>  

                            <?php } ?> 
                        </figure>
    
                        <h3 class="blog-article__heading"><?= $rev_block_name2; ?></h3>
                    </div>
                </div>
            </article>

            <a class="reviews__btn" href="/reviews">показать ещё отзывы</a>
        </div>
    </section>

<?php else: ?>
    <section style = "display: none">
    </section>
<?php endif; ?>