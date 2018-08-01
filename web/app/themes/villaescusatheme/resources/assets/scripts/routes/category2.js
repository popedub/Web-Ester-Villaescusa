import Swiper from 'swiper/dist/js/swiper.min';
var Masonry = require('masonry-layout');
var imagesLoaded = require('imagesloaded');
var $ = require('jquery');
var jQueryBridget = require('jquery-bridget');
/* eslint-disable */
var smoothState = require('smoothstate');
/* eslint-enable */

export default {
  init() {
    //smoothsate
    $(function () {
      var options = {
        prefetch: true,
        cacheLength: 2,
        debug: true,
        onStart: {
          duration: 250, // Duration of our animation
          render: function ($container) {
            // Add your CSS animation reversing class
            $container.addClass('fadOut');

            // Restart your animation
            smoothState.restartCSSAnimations();
          },
        },
        onReady: {
          duration: 0,
          render: function ($container, $newContent) {
            // Remove your CSS animation reversing class
            $container.removeClass('fadOut');

            // Inject the new content
            $container.html($newContent);


          },
        },
        onAfter: function() {
        //render de las clases del body en otro div y las movemos al body
        //porque smoothestate no actualiza esas clases
          if($('#replace')){
            $('body').removeClass();
            var classes = $('#replace').attr('class').split(' ');
            for (var i = 0; i < classes.length; i++) {
              $('body').addClass(classes[i]);
            }
            //eliminamos la clase de dónde tomamos las clases del body una vez asiganadas nuevamente
            $('#replace').remove();
          }
          $('#menu-item-54 > a').addClass('no-smoothState');
          //volvemos a disparar los javascrips, en las dos categorías igual, :()
          ////////item menu contacto en el telefono///////
          $('#menu-item-102').find('a').wrap('<p id="btn-contacto-mob"></p>');
          $('#btn-contacto-mob').click(function () {
            $('.box-footer').slideToggle({
              direction: "up",
            }, 300);
            $(window).scrollTop(0);
          }); // end click
          /////////masonry y sus librerias////////
          imagesLoaded.makeJQueryPlugin($);
          //container
          var $container = $('.grid');
          //masonry
          jQueryBridget('masonry', Masonry, $);

          $container.masonry({
            itemSelector: '.grid-item',
            columnWidth: '.grid-sizer',
            percentPosition: true,
            initLayout: false,
          });
          $container.masonry('on', 'layoutComplete', function () {
            //console.log('layout is complete');
          });
          $container.imagesLoaded(function () {

            $container.masonry();
          });
          /* eslint-disable */
          /////////swiper///////////////
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
              on: {
                slideNextTransitionStart: function () {

                  $('.item-to-change a').text('EV');

                },
                reachBeginning: function () {

                  $('.item-to-change a').text('Ester Villaescusa');

                },
              },

            });
            var mySwiperH = new Swiper('.swiper-container-h', {
              // Optional parameters
              direction: 'horizontal',
              speed: 1000,
              slidesPerView: 3,
              spaceBetween: 50,
              freeMode: true,
              breakpoints: {
                768: {
                  slidesPerView: 1,
                  spaceBetween: 20,
                },
              },
            });
          },
      }

      smoothState = $('#smooth').smoothState(options).data('smoothState');

    });

    $(window).on('load', function () {
      //initialize swiper when document ready

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
        on: {
          slideNextTransitionStart: function () {

              $('.item-to-change a').text('EV');

        },
          reachBeginning: function () {

            $('.item-to-change a').text('Ester Villaescusa');

          },
      },

      });
      var mySwiperH = new Swiper('.swiper-container-h', {
        // Optional parameters
        direction: 'horizontal',
        speed: 1000,
        slidesPerView: 3,
        spaceBetween: 50,
        freeMode: true,
        breakpoints: {
          768: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
        },
      });
       /* eslint-enable */

    });

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS

  },
};
