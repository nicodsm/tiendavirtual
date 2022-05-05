const navToggle = document.querySelector('.nav-toggle');
const menu = document.querySelector('.menu_lateral');
const close = document.querySelector('.fa-xmark');
const body = document.querySelector('body');

navToggle.addEventListener('click', ()=>{
    
    if(menu.style.display == ''){
        menu.style.left = '0';
        console.log('funcionando');
    } 

})

close.addEventListener('click', ()=>{
    menu.style.left = '-100rem';
})

// slider

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  

  });


 if(window.screen.width < 800){
    const swiper2 = new Swiper(".mySwiper", {
        slidesPerView: 2, 
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
 }else if(window.screen.width > 800) {
    const swiper2 = new Swiper(".mySwiper", {
        slidesPerView: 3, 
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
 }


 window.addEventListener('resize', ()=>{

  if(window.screen.width < 800){
    console.log('menos de 800')
    menu.style.display = 'block';
    const swiper2 = new Swiper(".mySwiper", {
        slidesPerView: 2, 
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
 }else if(window.screen.width > 800) {
    menu.style.display = '';
    const swiper2 = new Swiper(".mySwiper", {
        slidesPerView: 3, 
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
 }

 
   

 });



 


