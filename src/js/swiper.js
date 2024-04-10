/* Home page */

const swiperHero = new Swiper(".swiper-hero", {
  loop: true,
  autoplay: false,
  cssMode: true,
  clickable: true,

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">0' + (index + 1) + "</span>";
    },
  },
});

const swiperFrontPage = new Swiper(".swiper-resp", {
  cssMode: true,
  loop: true,
  slidesPerView: 3,
  spaceBetween: 30,

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

const swiperCard = new Swiper(".swiper-card", {
  cssMode: true,
  slidesPerView: 1.2,
  loop: true,
  spaceBetween: 50,
  autoplay: false,
});

/* Commun */

const swiperExtra = new Swiper(".swiper-extra", {
  loop: true,

  navigation: {
    nextEl: ".swiper-button-next",
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1.2,
      spaceBetween: 20,
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
  },
});

const swiperLeft = new Swiper(".swiper-sectionslider", {
  cssMode: true,
  slidesPerView: 1,
  autoplay: false,

  navigation: {
    nextEl: ".sesli-btn-next",
    prevEl: ".sesli-btn-prev",
  },
});

const swiperRight = new Swiper(".swiper-sectionsliderRight", {
  cssMode: true,
  slidesPerView: 1,
  autoplay: false,

  navigation: {
    nextEl: ".sliri-btn-next",
    prevEl: ".sliri-btn-prev",
  },
});
