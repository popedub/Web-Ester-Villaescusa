import Swiper from 'swiper/dist/js/swiper.min';
export default {
  init() {
    $(document).ready(function(){

      /* -------------------------------------------------------
      | Here is were the fun begins.
        --------------------------------------------------------- */
      //https://stackoverflow.com/questions/32168234/change-the-bootstrap-modal-effect
      /* eslint-disable */
      var modalBtn = $('a[href ="#info"]');
      var modal = $('#info');
      var animInClass = "";
      var animOutClass = "";


      modalBtn.on('click', function () {
        animInClass = 'fadeIn';
        animOutClass = 'fadeOut';
        if (animInClass == '' || animOutClass == '') {
          alert("Please select an in and out animation type.");
        } else {
          modal.addClass(animInClass);
          modal.modal({ backdrop: false });
        }
      })

      modal.on('show.bs.modal', function () {
        var closeModalBtns = modal.find('a[data-custom-dismiss="modal"]');
        closeModalBtns.one('click', function () {
          modal.on('webkitAnimationEnd oanimationend msAnimationEnd animationend', function (evt) {
            modal.modal('hide')
          });
          modal.removeClass(animInClass).addClass(animOutClass);
        })
      })

      modal.on('hidden.bs.modal', function (evt) {
        var closeModalBtns = modal.find('a[data-custom-dismiss="modal"]');
        modal.removeClass(animOutClass)
        modal.off('webkitAnimationEnd oanimationend msAnimationEnd animationend')
        closeModalBtns.off('click')
      })

    });

    $(window).on("load", function () {

      $('img').filter(function (){
        var $this = $(this);
        return $this.width() < $this.height();
      }).closest('div.inner').addClass("vertical");
      //initialize swiper when document ready

      var fx = $('.fx').text().trim();

      if(fx === 'slide'){
        var mySwiperH = new Swiper('.swiper-container', {
          // Optional parameters
          direction: 'horizontal',
          speed: 1000,
          slidesPerView: 1,
          loop: true,
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
          speed: 1500,
          effect: 'fade',
          loop: true,
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
