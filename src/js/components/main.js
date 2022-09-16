import gsap from "gsap";


window.addEventListener('DOMContentLoaded', function(){   


  // // Подключаем скроллинг Simplebar 

  document.querySelectorAll('.js-scroll').forEach(el => {
    new SimpleBar(el), {
      autoHide: false,
      scrollbarMaxSize: 300
    }
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


  // Анимация открытия поля поиска
  const searchField = document.querySelector('.for-form');
  const searchFieldOpen = document.getElementById('searchOpen');
  const searchFieldClose = document.querySelector('.js-closeSearch');

  var tl2 = gsap.timeline({paused:true}); 

  tl2.fromTo(searchField, {display: 'none', x: '102%'}, {duration:0.6, ease: "power3.in", display: 'flex', x: 0});

  searchFieldOpen.onclick = function(){
    tl2.play();
  }

  searchFieldClose.onclick = function(){
    tl2.reverse();
  }


  // Табы на главной в разделе Преимущества

    document.querySelectorAll('.advantages__link').forEach(function(pagLink3){
    pagLink3.addEventListener('click', function(event3){
      event3.preventDefault();
      const path3 = event3.currentTarget.dataset.path3;       

      document.querySelectorAll('.advantages__item').forEach(function(item3){
        item3.classList.remove('item-active');
      });

      document.querySelector(`[data-item3='${path3}']`).classList.add('item-active');

      document.querySelectorAll('.adv-art').forEach(function(pagArticle){
        pagArticle.classList.remove('adv-art-active');
      });

      document.querySelector(`[data-target3="${path3}"]`).classList.add('adv-art-active');
    });

  });

  
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


  // Табы на странице Каталог (Услуги)

  // Проитерируем кнопки выбора табов
  document.querySelectorAll('.services-tabs__link').forEach(function(tabsBtn5){
    tabsBtn5.addEventListener('click', function(event){
        event.preventDefault();

        // Зададим константу атрибута data-path у кнопок
        const path5 = event.currentTarget.dataset.path5;

        // Проитерируем все ссылки и при клике снимем все активные значения
        document.querySelectorAll('.services-tabs__link').forEach(function(oneTab5){
          oneTab5.classList.remove('tabs-link-active');
        });

        // Соответствующей кнопке зададим активное значение
        document.querySelector(`[data-path5='${path5}']`).classList.add('tabs-link-active');      
        

        // Итерируем табы и закрываем все открытые табы
        document.querySelectorAll('.services-article').forEach(function(tabContent){
          tabContent.classList.remove('services-article-active');

          // Зададим в переменную первый Таб (в стилях делаем первый элемент открытым)        
          var firstPriceTab = document.querySelector('.services-article:first-of-type');

          // Соответственно при клике на любую кнопку его сразу закрываем
          firstPriceTab.style.display = 'none';

          // Закинем в переменную текущий Таб с соответствующим атрибутом data-target       
          var currentTab = document.querySelector(`[data-target5="${path5}"]`);

          // console.log(currentTab.getAttribute('data-target') );

          // console.log(firstPriceTab.getAttribute('data-target') );

          // Зададим условие: если атрибут data-target текущего таба соответствует первому Табу, то есть
          // если это и есть первый Таб, открываем его, если нет - держим закрытым и открываем соответствующий
          if(currentTab.getAttribute('data-target5') == firstPriceTab.getAttribute('data-target5')) {
            firstPriceTab.style.display = 'flex';
          } else {
            firstPriceTab.style.display = 'none';
    
            currentTab.classList.add('services-article-active');
          }
        }); 
    });  

      
  });


  // Код пагинации на странице Цены

  document.querySelectorAll('.js-links').forEach(function(pagLink){
    pagLink.addEventListener('click', function(event){
      event.preventDefault();
      const path2 = event2.currentTarget.dataset.path2;

      document.querySelectorAll('.js-links').forEach(function(oneLink){
        oneLink.classList.remove('black');
      });

      document.querySelector(`[data-path2='${path2}']`).classList.add('black');

      document.querySelectorAll('.article-rew').forEach(function(pagArticle){
        pagArticle.classList.remove('article-rew-active');
      });

      document.querySelector(`[data-target2="${path2}"]`).classList.add('article-rew-active');
    });

  });


  // Табы на странице Цены

  // Проитерируем кнопки выбора табов
  document.querySelectorAll('.js-priceTab').forEach(function(tabsBtn6){
    tabsBtn6.addEventListener('click', function(event){
        event.preventDefault();

        const path6 = event.currentTarget.dataset.path6;

        // Проитерируем все ссылки и при клике снимем все активные значения
        document.querySelectorAll('.js-priceTab').forEach(function(oneTab6){
          oneTab6.classList.remove('active');     
        });

        // Соответствующей кнопке зададим активное значение
        document.querySelector(`[data-path6='${path6}']`).classList.add('active');      
      

        // Итерируем табы и закрываем все открытые табы
        document.querySelectorAll('.price-art').forEach(function(tabContent){
          tabContent.classList.remove('price-art-active');

          // Зададим в переменную первый Таб (в стилях делаем первый элемент открытым)        
          var firstPricesTab = document.querySelector('.price-art:first-of-type');

          // Соответственно при клике на любую кнопку его сразу закрываем
          firstPricesTab.style.display = 'none';

          // Закинем в переменную текущий Таб с соответствующим атрибутом data-target       
          var currentTab = document.querySelector(`[data-target6="${path6}"]`);

          
          if(currentTab.getAttribute('data-target6') == firstPricesTab.getAttribute('data-target6')) {
            firstPricesTab.style.display = 'block';
          } else {
            firstPricesTab.style.display = 'none';

            currentTab.classList.add('price-art-active');
          }
        });
    });     
  });



  // Табы на странице Отзывы

  // Проитерируем кнопки выбора табов
  document.querySelectorAll('.js-reviewsTab').forEach(function(tabsBtn7){
    tabsBtn7.addEventListener('click', function(event){
    event.preventDefault();

    const path7 = event.currentTarget.dataset.path7;

    // Проитерируем все ссылки и при клике снимем все активные значения
    document.querySelectorAll('.js-reviewsTab').forEach(function(oneTab7){
      oneTab7.classList.remove('tab-btn-active');     
    });

    // Соответствующей кнопке зададим активное значение
    document.querySelector(`[data-path7='${path7}']`).classList.add('tab-btn-active');      
      

    // Итерируем табы и закрываем все открытые табы
    document.querySelectorAll('.js-reviewsArt').forEach(function(tabContent7){
        tabContent7.classList.remove('price-art-active');

        // Зададим в переменную первый Таб (в стилях делаем первый элемент открытым)        
        var firstReviewsTab = document.querySelector('.js-reviewsArt:first-of-type');

        // Соответственно при клике на любую кнопку его сразу закрываем
        firstReviewsTab.style.display = 'none';

        // Закинем в переменную текущий Таб с соответствующим атрибутом data-target       
        var currentTab7 = document.querySelector(`[data-target7="${path7}"]`);

        
        if(currentTab7.getAttribute('data-target7') == firstReviewsTab.getAttribute('data-target7')) {
          firstReviewsTab.style.display = 'flex';
        } else {
          firstReviewsTab.style.display = 'none';

          currentTab7.classList.add('price-art-active');
        }

    });

  });
    
  });



  // Ширина активного окна устройства:
  var availableScreenWidth = window.screen.availWidth;

  if(availableScreenWidth < '992') {  // Зададим условие что функция будет работать только на мобильных

    window.onload = function() {    
    var letters = document.getElementsByClassName('reviews-letters__image')
      ,letterBtn = document.querySelector('.reviews-letters__btn');

    // console.log(letters.length);

    for(let i=3; i<letters.length; i++) {
      letters[i].style.display = 'none';
    }

    var countD = 3; //Установим счётчик - при клике на кнопку будет добавляться по 3 письма
      letterBtn.addEventListener('click', function(){
        var letters = document.getElementsByClassName('reviews-letters__image');

        countD += 3;

        if(countD <= letters.length) {
          for(let i=0; i<countD; i++) {
            letters[i].style.display = 'block';
          }
        }
      });    
    }

  } else {
    var letterBtn = document.querySelector('.reviews-letters__btn');
    letterBtn.style.display = 'none';
  }

  
  
    

  



});


  
  


  jQuery (function($) { 

    // Ползунок цены в калькуляторе

    // $("#range").ionRangeSlider({
    //   min: 0,
    //   max: 377,
    //   from: 60
    // });

    // Аккордеоны  

    $( "#accordion" ).accordion({
      collapsible: true,  
      active:1,   
      heightStyle: 'content',
      animate: 700
    });


    // Аккордеоны на странице вакансии
    
    $( "#accordion2" ).accordion({
      collapsible: true, 
      active:1,   
      heightStyle: 'content',     
	    header: '> .accordion-item > .accordion-header',
      animate: 700
    });

    $( "#accordion3" ).accordion({
      collapsible: true, 
      active:false,        
      heightStyle: 'content',     
	    header: '> .accordion-item > .accordion-header',
      animate: 700
    });

    $( "#accordion4" ).accordion({
      collapsible: true, 
      active:false,     
      heightStyle: 'content',     
	    header: '> .accordion-item > .accordion-header',
      animate: 700
    });

    $( "#accordion5" ).accordion({
      collapsible: true, 
      active:1,   
      heightStyle: 'content',     
	    header: '> .accordion-item > .accordion-header',
      animate: 700
    });

  });

