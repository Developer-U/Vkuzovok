window.addEventListener('DOMContentLoaded', function(){ 
    	// Калькулятор подсчёта итоговой стоимости при изменении количества товара

	// Сначала делаю произвольные кнопки добавления товара в корзину
	// при клике на кнопки меняется число

    

	$( 'body' ).on( 'click', 'button.js-minus1, button.js-plus1', function() {
		var qty = $('body').parent().find( 'input[title="Qty"]' ),
		val = parseInt( qty.val() ),
		min = parseInt( qty.attr( 'min' ) ),
		max = parseInt( qty.attr( 'max' ) ),
		step = parseInt( qty.attr( 'step' ) );       			

		// дальше меняем значение количества в зависимости от нажатия кнопки Плюс и минус
		if ( $( this ).is( '.plus' ) ) {
			if ( max && ( max <= val ) ) {
				qty.val( max );
			} else {
				qty.val( val + step );
			}
		} else {
			if ( min && ( min >= val ) ) {
				qty.val( min );
			} else if ( val > 1 ) {
				qty.val( val - step );
			}
		}	
    });

    $( 'body' ).on( 'click', 'button.js-minus2, button.js-plus2', function() {
		var qty = $('body').parent().find( 'input[title="Pass"]' ),
		val = parseInt( qty.val() ),
		min = parseInt( qty.attr( 'min' ) ),
		max = parseInt( qty.attr( 'max' ) ),
		step = parseInt( qty.attr( 'step' ) );       			

		// дальше меняем значение количества в зависимости от нажатия кнопки Плюс и минус
		if ( $( this ).is( '.plus' ) ) {
			if ( max && ( max <= val ) ) {
				qty.val( max );
			} else {
				qty.val( val + step );
			}
		} else {
			if ( min && ( min >= val ) ) {
				qty.val( min );
			} else if ( val > 1 ) {
				qty.val( val - step );
			}
		}	
    });

    $( 'body' ).on( 'click', 'button.js-minus3, button.js-plus3', function() {
		var qty = $('body').parent().find( 'input[title="Time"]' ),
		val = parseInt( qty.val() ),
		min = parseInt( qty.attr( 'min' ) ),
		max = parseInt( qty.attr( 'max' ) ),
		step = parseInt( qty.attr( 'step' ) );       			

		// дальше меняем значение количества в зависимости от нажатия кнопки Плюс и минус
		if ( $( this ).is( '.plus' ) ) {
			if ( max && ( max <= val ) ) {
				qty.val( max );
			} else {
				qty.val( val + step );
			}
		} else {
			if ( min && ( min >= val ) ) {
				qty.val( min );
			} else if ( val > 1 ) {
				qty.val( val - step );
			}
		}	
    });

    
});