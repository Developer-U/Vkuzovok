window.addEventListener('DOMContentLoaded', function(){ 


// Слайдер Автопарк

// Запись для пагинации menu в файле вёрстки

new Swiper('.park-slider', {    
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,   
    spaceBetween: 16,  
    centeredSlides: true,  
    speed: 700, 
    lazy: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    }, 
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

    keyboard: {       
        enabled: true,       
        pageUpDown: false,
    },

    freeMode: {
        enabled: true,
    },

    breakpoints: {
        // when window width is >= 768px
        768: {
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (menu[index]) + '</span>';
            },
        }, 
        centeredSlides: false,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }, 
        spaceBetween: 30,       
        }
    }
});


new Swiper('.clients-slider', {    
    direction: 'horizontal',
    loop: true,
    slidesPerView: 2,   
    spaceBetween: 5, 
     
    speed: 700,  
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    }, 
    
    keyboard: {       
        enabled: true,       
        pageUpDown: true,
    },

    freeMode: {
        enabled: true,
    },

    breakpoints: {    
        768: {
        slidesPerView: 3,
        },
        1200: {
        slidesPerView: 4,
        },
        1400: {
        slidesPerView: 5,
        }
    }
});


});