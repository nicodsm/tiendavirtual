const navToggle = document.querySelector('.nav-toggle');
const menu = document.querySelector('.menu_lateral');
const close = document.querySelector('.fa-xmark');
const body = document.querySelector('body');
const header = document.querySelector('.header');
const menuScroll = document.querySelector('#menuScroll');
const iconosInfo = document.querySelectorAll('.icono');
iconosInfo_array = [...iconosInfo];


navToggle.addEventListener('click', () => {

  if (menu.style.display == '') {
    menu.style.left = '0';

  }

})

close.addEventListener('click', () => {
  menu.style.left = '-100rem';
})

// slider

var swiper = new Swiper(".mySwiper2", {
 
  spaceBetween: 30,
  effect: "fade",
  centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    clickable: true,
  },
});



if (window.innerWidth < 800) {
  const swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,
    spaceBetween: 30,
    slidesPerGroup: 1,
    freeMode: true,
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
} else if (window.innerWidth > 800) {
  const swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 30,
    slidesPerGroup: 1,
    freeMode: true,
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


window.addEventListener('resize', () => {

  if (window.innerWidth < 400) {

    console.log('menor a 400')
    const swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      slidesPerGroup: 1,
      freeMode: true,
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

  } else if (window.innerWidth < 800) {
    menu.style.display = 'block';
    const swiper = new Swiper(".mySwiper", {
      slidesPerView: 2,
      spaceBetween: 30,
      slidesPerGroup: 1,
      freeMode: true,
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
  } else if (window.innerWidth > 800) {
    menu.style.display = '';
    const swiper = new Swiper(".mySwiper", {
      slidesPerView: 4,
      spaceBetween: 30,
      slidesPerGroup: 1,
      freeMode: true,
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


window.onscroll = () => {
  let y = window.scrollY;

  if (y > 270) {
    menuScroll.style.top = '0';
    menuScroll.style.opacity = '1'

  } else {
    menuScroll.style.top = '-100px';
    menuScroll.style.opacity = '0'

  }

}




iconosInfo_array.forEach(icono => {
  icono.addEventListener('mouseenter', ()=>{
    icono.classList.add("iconohover")

    setTimeout(() => {
      icono.classList.remove("iconohover")

    }, 1000);
  })
});