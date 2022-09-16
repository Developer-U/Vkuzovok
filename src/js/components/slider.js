window.addEventListener('DOMContentLoaded', function(){ 

new Swiper('.park-slider', {    
    direction: 'horizontal',
    loop: true,
    slidesPerView: 2,   
    spaceBetween: 5,  
    centeredSlides: true,  
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
        992: {
        slidesPerView: 3,
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

//   // Слайдер в блоке расчета цен в мобильной версии
//   new Swiper('.prices-slider', {
//     // Optional parameters
//     direction: 'horizontal',
//     loop: true,
//     spaceBetween: 16,
//     slidesPerView: 3,
//     centeredSlides: true,
//     freeMode: true,
  
//     // If we need pagination
//     pagination: {
//       el: '.swiper-pagination',
//       clickable: true,
//     }  
//   });


//   // Слайдер потолков на главной

//   var menu = [
//     `<a class="item-pag__link potolok-slider__link" href="#">
//         <img class="item-pag__img" src="/images/ready3.jpg" alt="Превью 1">         
//       </a>`,

//       `<a class="item-pag__link potolok-slider__link" href="#">
//         <img class="item-pag__img" src="/images/ready2.jpg" alt="Превью 2">         
//       </a>`,

//       `<a class="item-pag__link potolok-slider__link" href="#">
//         <img class="item-pag__img" src="/images/ready4.jpg" alt="Превью 3">         
//       </a>`,

//       `<a class="item-pag__link potolok-slider__link" href="#">
//         <img class="item-pag__img" src="/images/ready5.jpg" alt="Превью 4">         
//       </a>`
//   ]



//   // Слайдер в блоке текстовых отзывов на странице Отзывы
//   new Swiper('.text-reviews-slider', {
//     // Optional parameters
//     direction: 'horizontal',
//     loop: true,
//     spaceBetween: 16,
//     slidesPerView: 2, 
//     observer: true,
//     observeParents: true,
//     parallax:true, 
//     infinite:true,    
  
//     navigation: {   
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
    
//     breakpoints: {    
//       768: {
//         slidesPerView: 3,
//       },

//       1400: {
//         slidesPerView: 4,
//       }
//     }
//   });

});