import Swiper from 'swiper/dist/js/swiper.min';
export default {
  init() {
    $(window).load(function () {
      //initialize swiper when document ready
      /* eslint-disable */
      var mySwiperV = new Swiper('.swiper-container-v', {
        // Optional parameters
        direction: 'vertical',
        speed: 1000,
        grabCursor: true,
        slidesPerView: 1,
        mousewheel: true,
        forceToAxis: true,
        a11y: false,
        //init: false,
        autoHeight: true,

      });
      //re-calculamos la altura porque con la función autoHeight no funciona bien

      //console.log(mySwiperV.height);
      var mySwiperH = new Swiper('.swiper-container-h', {
        // Optional parameters
        direction: 'horizontal',
        speed: 1000,
        slidesPerView: 3,
        spaceBetween: 50,
        freeMode: true,
        //init: false,
        //autoHeight: true,
      });
    });
    /* eslint-enable */
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
