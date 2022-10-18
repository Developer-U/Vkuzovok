// import gsap from "gsap";

// window.addEventListener('DOMContentLoaded', function(){ 
//     // Переключатель для тарифов дневные / ночные
    
//     var switchBtn = document.querySelector('.switch-btn'); // переключатель
//     var switchButton = document.querySelector('.switch-btn__button'); // сам переключатель
//     var switchBg = document.querySelector('.price-times'); // плашка на которой перключатель
//     var switchText = document.querySelectorAll('.price-times p'); // Тексты в плашке
//     var dayText = document.querySelector('.js-day'); // Дневные тарифы
//     var nightText = document.querySelector('.js-night'); // Ночные тарифы
//     var info = document.querySelector('.price-times__img'); // Кнопка информация
//     var time = document.querySelector('.price-times__time'); // Время работы

//     var tlSwitch = gsap.timeline({paused:true}); 

//     tlSwitch.to(switchButton, {duration:0.3, ease: "power3.in", background: '#fff', top: 25}, 'start')
//             .to(switchBg, {duration:0.4, ease: "power3.in", background: '#000', color: '#fff'}, 'start')
//             .to(switchText, {duration:0.2, ease: "power3.in", color: '#fff'}, 'start')
//             .to(dayText, {duration:0.2, ease: "power3.in", fontFamily: 'Montserrat-Light'}, 'start')
//             .to(nightText, {duration:0.2, ease: "power3.in", fontFamily: 'Montserrat-Bold'}, 'start')
//             .to(info, {duration:0.2, ease: "power3.in", fill: '#fff'}, 'start');

//     switchBtn.onclick = function() {
        
//         if(switchButton.getAttribute('aria-label') == 'day') {            
//             tlSwitch.play();
//             switchButton.setAttribute('aria-label', 'night');
//             time.innerHTML = '23:00 — 06:00';
//         } else {
//             tlSwitch.reverse();
//             switchButton.setAttribute('aria-label', 'day');
//             time.innerHTML = '09:00 — 16:00';
//         }
        
//     }


    

// });