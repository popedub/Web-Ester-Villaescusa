export default {
  init() {
    // JavaScript to be fired on the home page
    $(document).ready(function () {
      $('#menu-item-54 > a').addClass('no-smoothState');
      console.log('page-template');
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
