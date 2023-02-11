<?php

/*
** Блок калькулятор на странице калькулятор и в попапе
*/

?>

    <!-- Все родители -->    

    <div class="calc-page <?php echo $args['footer'] ? 'popup-calc' : ' '; ?>">
       

        <div id="popupCalcFormFor" class="zayavka__form zayzvka-calc">
            <?php echo do_shortcode('[contact-form-7 id="1073" title="Калькулятор в попапе Калькулятор"]'); ?>
        </div >

        <p class="calc-text"><?php the_field('calc_text_field', 'options'); ?></p>
    </div>  