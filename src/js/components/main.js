import gsap from "gsap";


window.addEventListener('DOMContentLoaded', function(){    
  
  

  // // Подключаем скроллинг Simplebar 

  document.querySelectorAll('.js-scroll').forEach(el => {
    new SimpleBar(el), {
      autoHide: false,
      scrollbarMaxSize: 300
    }
  });

  jQuery(document).ready(function($) {
    var selector = $('input[type="tel"]');

    var im = new Inputmask("+9(999) 999-9999");
    im.mask(selector);
  });


  // Анимация открытия списка городов

  const listOfCity = document.querySelector('.left-top__choose');
  const cityOpen = document.querySelector('.left-top__link');
  const cityClose = document.querySelector('.js-cityClose');

  var tl = gsap.timeline({paused:true}); 

  tl.to(listOfCity, {duration:0.7, ease: "power3.in", opacity:1, display: 'block'});

  cityOpen.onclick = function(e){
    e.preventDefault();
    tl.play();
  }

  document.querySelectorAll('.left-top__one').forEach(function(oneItem){
    oneItem.onclick = function() {
      tl.reverse();
    }    
  });

  cityClose.onclick = function() {
    tl.reverse();
  }    
  


  // Открытие всплывающего меню

    // Создаём плавность анимации появления мобильного меню
  // Сначала объявим функцию FadeIn

  const fadeIn = (el, timeout, display) => {
    el.style.opacity = 0;
    el.style.display = display || 'block';
    el.style.transition = `opacity ${timeout}ms`;
    setTimeout(() => {
      el.style.opacity = 1;
    }, 10);
  }

  // Объявим функцию FadeOut

  const fadeOut = (el, timeout) => {
    el.style.opacity = 1;
    el.style.transition = `opacity ${timeout}ms`;
    el.style.opacity = 0;

    setTimeout(() => {
      el.style.display = 'none';
    }, timeout);
  };

  var menu = document.querySelector('.main-menu')
    ,burger = document.querySelector('.burger')
    ,flag = false
    ,burgerClose = document.querySelector('.burger.open');
 

  burger.addEventListener('click', function(){      
    if(!flag) {
        fadeIn(menu, 300, 'block');
        flag = true; 
    } else {
        fadeOut(menu, 300);
        flag = false;        
    }       

    burger.classList.toggle('open');

    // Скрытие меню при нажатии на один из пунктов меню

    document.querySelectorAll('.sub-list__link').forEach(function(oneItem){
      oneItem.addEventListener('click', function(){       

          fadeOut(menu, 300);
          flag = false;                
          burger.classList.remove('open');
      });
    });   
    
  });

  // Открытие дополнительных меню в меню мобильной версии

  document.querySelectorAll('.main-menu__heading').forEach(function(tabsBtn){
    tabsBtn.addEventListener('click', function(event){
      const path = event.currentTarget.dataset.path;

      // Ширина активного окна устройства:
      var availableScreenWidth = window.screen.availWidth;

      if(availableScreenWidth < '930') {
        document.querySelectorAll('.sub-list').forEach(function(tabContent){
          tabContent.classList.remove('sub-list-active');
        });
  
        document.querySelector(`[data-target="${path}"]`).classList.add('sub-list-active');
      }

      
    });

  });


    // Открытие попапа Login/Password Логин пароль

    var loginField = document.querySelector('.js-loginPopup');
    var loginToOpen = document.querySelectorAll('.js-openLogin'); 
    var loginClose = document.querySelector('.js-loginClose'); 
    var flag = false;            
    
    loginToOpen.forEach(function(openLogBtn){
      openLogBtn.addEventListener('click', function(e){ 
        e.preventDefault();     
        if(!flag) {
        fadeIn(loginField, 300, 'flex');
                
        document.querySelector('body').classList.add('closed');
  
        } else {
        fadeOut(loginField, 300);
        
        document.querySelector('body').classList.remove('closed');
        }
        
        loginClose.addEventListener('click', function(){
          fadeOut(loginField, 300);
  
          document.querySelector('body').classList.remove('closed'); 
        });
  
        loginField.addEventListener('click', function(event){
          if(this == event.target) {
            fadeOut(loginField, 300);
  
            document.querySelector('body').classList.remove('closed');
          }         
        });
      });
    });


    // Добавление тегов
              
    var itemTags = document.querySelectorAll('.tags-serv-list li');
                        
    var addTagBtn = document.createElement('button'); // Создаём кнопку Добавить           

    addTagBtn.classList.add('tags-list__span', 'col-auto'); // Присваиваем её стили

    addTagBtn.innerText = 'Показать ещё';  // Задаём ей текст

    var parentCont = document.querySelector('.tags-serv-list'); // Обратимся к родителю

   

    if(itemTags.length > 7) {  // Добавляем кнопку, если больше 7
      parentCont.append(addTagBtn);
    }

    
      

      for(let i=7; i<itemTags.length; i++) {
        itemTags[i].style.display = 'none'; // Скрывааем все статьи, что больше i=1             
      }

      var countD = 7; //Установим счётчик - при клике на кнопку будет добавляться ещё 1 блок отзывов
      addTagBtn.addEventListener('click', function(){
        var itemTags = document.querySelectorAll('.tags-serv-list li');

          countD += 1;

          if(countD <= itemTags.length) {
              for(let i=0; i<countD; i++) {
                  itemTags[i].style.display = 'block';

                  // Когда число добавляемых блоков отзывов равняется всему числу блоков, скрываем кнопку
                  if(countD == itemTags.length) {
                    addTagBtn.style.display = 'none';
              }
              }
          }
      });        

    


      // Открытие попапа Заказать машину 
      var carField = document.querySelector('.for-zakaz');
      var carFieldOpen = document.querySelectorAll('.js-carOpen'); 
      var carClose = document.querySelector('.js-carClose'); 
      var popup = document.querySelector('.popup');
      var flag = false;  

      carFieldOpen.forEach(function(carOpen){
          carOpen.addEventListener('click', function(e){  
            e.preventDefault();
            
              if(!flag) {
              fadeIn(carField, 300, 'flex');
                document.querySelector('body').classList.add('closed');
              } else {
              fadeOut(carField, 300);
                document.querySelector('body').classList.remove('closed');          
              }
              
              carClose.addEventListener('click', function(){
                fadeOut(carField, 300);
                document.querySelector('body').classList.remove('closed');         
              });                 
          });
      });


  // Открытие попапа Калькулятор перевозок
  var calcField = document.querySelector('.for-calc-popup');  
  var calcFieldOpen = document.querySelectorAll('.js-calcOpen'); 
  var calcClose = document.querySelector('.js-calcClose');   
  var flag = false;  

  calcFieldOpen.forEach(function(calcOpen){
      calcOpen.addEventListener('click', function(e){  
        e.preventDefault();
        
          if(!flag) {
          fadeIn(calcField, 300, 'flex');
            document.querySelector('body').classList.add('closed');
          } else {
          fadeOut(calcField, 300);
            document.querySelector('body').classList.remove('closed');          
          }
          
          calcClose.addEventListener('click', function(){
            fadeOut(calcField, 300);
            document.querySelector('body').classList.remove('closed');         
          });

          calcField.addEventListener('click', function(event){
            if(this == event.target) {
              fadeOut(calcField, 300);
              document.querySelector('body').classList.remove('closed');              
            }
          });                     
      });
  });


  // Открытие попапа Оставить заявку
  var zayavkaTakeField = document.querySelector('.js-zayavkaPopup');  
  var zayavkaTakeFieldOpen = document.querySelectorAll('.js-zayavkaOpen'); 
  var zayavkaTakeClose = document.querySelector('.js-zayavkaClose');
   
  var flag = false;  

  zayavkaTakeFieldOpen.forEach(function(zayavkaOpen){
    zayavkaOpen.addEventListener('click', function(e){  
        e.preventDefault();       
           
          if(!flag) {
          fadeIn(zayavkaTakeField, 300, 'flex');
            document.querySelector('body').classList.add('closed');            
              
          } else {
          fadeOut(zayavkaTakeField, 300);
            document.querySelector('body').classList.remove('closed');          
          }
          
          zayavkaTakeClose.addEventListener('click', function(){
            fadeOut(zayavkaTakeField, 300);
            document.querySelector('body').classList.remove('closed');         
          });

          zayavkaTakeField.addEventListener('click', function(event){
            if(this == event.target) {
              fadeOut(zayavkaTakeField, 300);
              document.querySelector('body').classList.remove('closed');              
            }
          }); 
          
          // Отправка формы
          var ctaForm = document.querySelector('.js-сta-form'); 
          ctaForm.addEventListener('wpcf7submit', function(event) {
            let ctaInputVal = document.querySelector('.cta-name-footer').value,
            ctaInputTelVal = document.querySelector('.cta-tel-footer').value; // значение обязательного поля
            console.log(ctaInputVal);
            console.log(ctaInputTelVal);
            
            if( ctaInputVal!== "" && ctaInputTelVal !== "") {  // условие, если поле заполнено
                document.querySelector('.popup-thanks').classList.add('thanks-active');

                document.querySelector('.popup-thanks').addEventListener('click', function(event) {
                    if(this == event.target) {
                        document.querySelector('.popup-thanks').classList.remove('thanks-active');
                        fadeOut(zayavkaTakeField, 300);
                        document.querySelector('body').classList.remove('closed');   
                    }                    
                });

                setTimeout(() => {
                    document.querySelector('.popup-thanks').classList.remove('thanks-active');
                    cf7Output.style.opacity = '0';
                    cf7Output.style.display = 'none';  
                    fadeOut(zayavkaTakeField, 300);
                    document.querySelector('body').classList.remove('closed');        
                }, 2500 );
            } else {
                return false;
            }
          }, false);
      });
  });


  // Анимация открытия поля поиска
  const searchField = document.querySelector('.for-form');
  const searchFieldOpen = document.getElementById('searchOpen');
  const searchFieldClose = document.querySelector('.js-closeSearch');

  var tl2 = gsap.timeline({paused:true});
  
  // Ширина активного окна устройства:
  var availableScreenWidth = window.screen.availWidth;

  if(availableScreenWidth <= '991') {
      tl2.fromTo(searchField, {display: 'none', transform: 'translateX(202%)'}, {duration:0.6, ease: "power3.in", display: 'flex', transform: 'translateX(0)'});
  }

  searchFieldOpen.onclick = function(){
    tl2.play();
  }

  searchFieldClose.onclick = function(){
    tl2.reverse();
  }
  

    

  
  // Появление блоков меню в мобильной версии

  const filterList = document.querySelectorAll('.footer-menu__list')
       ,openFilterList = document.querySelectorAll('.js-openFilters');       

  openFilterList.forEach(function(openFiltList) {
  openFiltList.addEventListener('click', function(event4){ 
    event4.preventDefault();

    const path4 = event4.currentTarget.dataset.path4;  
    
    document.querySelector(`[data-target4="${path4}"]`).classList.toggle('opened');
    document.querySelector(`[data-link4="${path4}"]`).classList.toggle('opened');
    
  });

  

    document.querySelectorAll('.footer-menu__link').forEach(function(oneLink){
      oneLink.addEventListener('click', function(){
          fadeOut(filterList, 300);
        
      });
    });
  });

  // Функционал прикрепить файл input file

  let fields = document.querySelectorAll('.field__file');
  // console.log(fields);
  Array.prototype.forEach.call(fields, function (input) {
  let label = input.nextElementSibling,
      labelVal = document.querySelector('.field__file-fake').innerText;                

      input.addEventListener('change', function (e) {
          let countFiles = '';
          if (this.files && this.files.length >= 1)
          countFiles = this.files.length;
  
          if (countFiles) {
              document.querySelector('.field__file-fake').innerText = 'Файл прикреплён';
              document.querySelector('.field__file-fake').classList.add('field__file-fake-get');
              document.querySelector('.field__file-button').classList.add('field__file-button-get');
          }  else {
              document.querySelector('.field__file-fake').innerText = labelVal;
          }
          
      });
  });
 
  // Ограничим высоту текста 
  var str = $('.types-list__descr').html();
  str = str.substr(0,200) + '...';//к примеру, если величина блока 200 символов.
  $('.types-list__descr').html(str);
  

});



