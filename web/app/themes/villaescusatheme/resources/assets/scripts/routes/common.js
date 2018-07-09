export default {

  init() {
    // JavaScript to be fired on all pages
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
  },

};
