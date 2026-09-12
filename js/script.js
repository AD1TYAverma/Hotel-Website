var swiper = new Swiper(".swiperContainer", {
  loop: true,
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },

  speed: 1200,

  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
    // pauseOnMouseEnter: false,
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

var swiper = new Swiper('.mySwiper', {

    loop: true,

    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },

    pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
        clickable: true,
    },

});