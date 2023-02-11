<?php
/*
* Как мы работаем блок
*/
?>

    <section class="levels">
        <div class="container">
            <h2 class="avtopark__heading levels__heading">
                <?php the_field('wework_head', 'options'); ?>
            </h2>

            <ul class="container levels__list row">

                <?php if( have_rows('new_wework_item', 'options') ): ?>
                <?php while( have_rows('new_wework_item', 'options') ): the_row();
                $weworkNum = get_sub_field('wework_num', 'options');
                $weworkName = get_sub_field('wework_name', 'options');
                $weworkDescr = get_sub_field('wework_descr', 'options');
                ?>

                    <li class="levels__item col-lg-3 col-6">
                        <p class="levels__num"><?= $weworkNum; ?></p>

                        <h3 class="levels__subheading">
                            <?= $weworkName; ?>
                        </h3>

                        <p class="levels__text">
                            <?= $weworkDescr; ?>
                        </p>
                    </li>

                <?php endwhile; ?>
                <?php endif; ?> 
            </ul>
        </div>
    </section>