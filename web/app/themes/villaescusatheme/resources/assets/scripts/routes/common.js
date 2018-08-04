export default {

  init() {
    // JavaScript to be fired on all pages
    $('#menu-item-102').find('a').wrap('<p id="btn-contacto-mob"></p>');

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    $('#btn-contacto').click(function () {
      $('.box-footer').slideToggle({
        direction: "up",
      }, 300);
    }); // end click
    $('#btn-cerrar').click(function () {
      $('.box-footer').slideToggle({
        direction: "down",
      }, 300);
    }); // end click
    $('#btn-contacto-mob').click(function () {
      $('.box-footer').slideToggle({
        direction: "up",
      }, 300);
      $('html,body').scrollTop(0);
      //console.log('hola');
    }); // end click
  },

};
