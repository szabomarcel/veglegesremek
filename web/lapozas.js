document.addEventListener('DOMContentLoaded', function () {
    var mySwiper = new Swiper('.swiper.sliderFeaturedPosts', {
      // Alapértelmezett lapozási beállítások itt
      slidesPerView: 1,
      spaceBetween: 30,
      navigation: {
        nextEl: '.custom-swiper-button-next',
        prevEl: '.custom-swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 5000, // 5 másodperc késleltetés minden diavetítés között
        disableOnInteraction: false, // Ne álljon meg az autoplay, ha az felhasználó interakcióba lép
      },
    });
  });