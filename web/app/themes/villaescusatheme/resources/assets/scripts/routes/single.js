import Swiper from 'swiper/dist/js/swiper.min';
export default {
  init() {
    $(document).ready(function(){

      $('a[href ="#info"]').click(function() {
        console.log('click');
        $('#info').modal({
          backdrop: false,
        }

        );

      });
    });

    $(window).on("load", function () {
      //initialize swiper when document ready
      /* eslint-disable */
      var fx = $('.fx').text().trim();

      if(fx === 'slide'){
        var mySwiperH = new Swiper('.swiper-container', {
          // Optional parameters
          direction: 'horizontal',
          speed: 1000,
          slidesPerView: 1,
          centeredSlides: true,
          navigation: {
            nextEl: '.swiper-button-next-custom',
            prevEl: '.swiper-button-prev-custom',
          },
          pagination: {
            el: '.swiper-pagination',
            type: 'custom',
            renderCustom: function (swiper, current, total) {
              return current + ' - ' + total;
            }
          },
        });
      }
      if(fx === 'fade' ) {
        var mySwiperH = new Swiper('.swiper-container', {
          // Optional parameters
          direction: 'horizontal',
          speed: 1000,
          effect: 'fade',
          fadeEffect: {
            crossFade: true
          },
          slidesPerView: 1,
          centeredSlides: true,
          navigation: {
            nextEl: '.swiper-button-next-custom',
            prevEl: '.swiper-button-prev-custom',
          },
          pagination: {
            el: '.swiper-pagination',
            type: 'custom',
            renderCustom: function (swiper, current, total) {
              return current + ' - ' + total;
            }
          },
          on: {
            slideChangeTransitionStart: function() {
            $('.swiper-slide-active').find('.caption-single').show();
            $('.swiper-slide-prev').find('.caption-single').hide();

            },
          },
        });
      }

    });
    /* eslint-enable */
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
