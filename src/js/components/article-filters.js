// window.addEventListener('DOMContentLoaded', function(){

//     // Функционал открытия нужных публикаций в Блоге

//     // Зададим константы кнопок
//     const allArt = document.querySelector('.js-all')
//          ,articlesArt = document.querySelector('.js-articles')
//          ,newsArt = document.querySelector('.js-news')
//          ,actionsArt = document.querySelector('.js-bonus');

    
//     // Все статьи
//     var allArticles = document.querySelectorAll('.js-artTarget');
    
//     // Все новости
//     var allNews = document.querySelectorAll('.js-newsTarget');
    

//     // Все акции
//     var allActions = document.querySelectorAll('.js-bonusTarget');


//     // Открытие статей
//     articlesArt.addEventListener('click', function(){
//         allNews.forEach(function(eachNews){
//             eachNews.classList.add('article-none');
//         });

//         allActions.forEach(function(eachAction){
//             eachAction.classList.add('article-none');
//         });

//         allArticles.forEach(function(eachArticle){         
//             eachArticle.classList.remove('article-none');                       
//         });
        
//         document.querySelectorAll('.services-tabs__link').forEach(function(eachLink){
//             eachLink.classList.remove('tabs-link-active');
//         });

//         articlesArt.classList.add('tabs-link-active');
//     });


//     // Открытие Новостей
//     newsArt.addEventListener('click', function(){
//         allArticles.forEach(function(eachArticle2){
//             eachArticle2.classList.add('article-none');
//         });

//         allActions.forEach(function(eachAction2){
//             eachAction2.classList.add('article-none');
//         });

//         allNews.forEach(function(eachNews2){         
//             eachNews2.classList.remove('article-none');                       
//         });
        
//         document.querySelectorAll('.services-tabs__link').forEach(function(eachLink2){
//             eachLink2.classList.remove('tabs-link-active');
//         });

//         this.classList.add('tabs-link-active');
//     });


//     // Открытие Акций
//     actionsArt.addEventListener('click', function(){
//         allArticles.forEach(function(eachArticle3){
//             eachArticle3.classList.add('article-none');
//         });

//         allNews.forEach(function(eachNews3){
//             eachNews3.classList.add('article-none');
//         });

//         allActions.forEach(function(eachAction3){         
//             eachAction3.classList.remove('article-none');                       
//         });
        
//         document.querySelectorAll('.services-tabs__link').forEach(function(eachLink3){
//             eachLink3.classList.remove('tabs-link-active');
//         });

//         this.classList.add('tabs-link-active');
//     });


//     // Открытие всех публикаций
//     allArt.addEventListener('click', function(){
//         allArticles.forEach(function(eachArticle){         
//             eachArticle.classList.remove('article-none');                       
//         });

//         allNews.forEach(function(eachNews2){         
//             eachNews2.classList.remove('article-none');                       
//         });

//         allActions.forEach(function(eachAction3){         
//             eachAction3.classList.remove('article-none');                       
//         });
        
//         document.querySelectorAll('.services-tabs__link').forEach(function(eachLink3){
//             eachLink3.classList.remove('tabs-link-active');
//         });

//         this.classList.add('tabs-link-active');
//     });
// });