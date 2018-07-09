var Masonry = require('masonry-layout');
var imagesLoaded = require('imagesloaded');
var $ = require('jquery');
var jQueryBridget = require('jquery-bridget');

export default {
  init() {
    $(document).ready(function () {
      // $(".menu-item-object-category").click(function () {  //use a class, since your ID gets mangled
      //   $('body').addClass("fadeinright");      //add the class to the clicked element
      // });
    });
    // (function ($) {
    //   'use strict';
    //   var content = $('#j').smoothState({
    //     // onStart runs as soon as link has been activated
    //     debug: true,
    //     onStart: {

    //       // Set the duration of our animation
    //       duration: 250,

    //       // Alterations to the page
    //       render: function () {

    //         // Quickly toggles a class and restarts css animations
    //         content.toggleAnimationClass('is-exiting');
    //       },
    //     },
    //   }).data('smoothState'); // makes public methods available
    // })(jQuery);
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    /* eslint-disable */
    $(window).on('load', function () {
      /* eslint-enable */
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
        console.log('layout is complete');
      });
      $container.imagesLoaded(function () {
        //  $container.masonry({
        //   itemSelector: '.grid-item',
        //   columnWidth: '.grid-sizer',
        //   percentPosition: true,
        //   initLayout: false,
        // });
        $container.masonry();
      });

    });
  },
};
