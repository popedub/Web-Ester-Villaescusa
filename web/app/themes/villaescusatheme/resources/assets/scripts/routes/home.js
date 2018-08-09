export default {
  init() {
    // JavaScript to be fired on the home page
    $(document).ready(function () {
      var stage = document.getElementById("slider-home");
      var fadeComplete = function () { stage.appendChild(arr[0]); };
      var arr = stage.getElementsByTagName("a");
      for (var i = 0; i < arr.length; i++) {
        arr[i].addEventListener("animationend", fadeComplete, false);
      }
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    // delegate all clicks on "a" tag (links)
    $(document).on("click", "a", function () {

      // get the href attribute
      var newUrl = $(this).attr("href");

      // veryfy if the new url exists or is a hash
      if (!newUrl || newUrl[0] === "#") {
        // set that hash
        location.hash = newUrl;
        return;
      }

      // now, fadeout the html (whole page)
      $("html").fadeOut(function () {
        // when the animation is complete, set the new location
        /* eslint-disable */
        location = newUrl;
        /* eslint-enable */
      });

      // prevent the default browser behavior.
      return false;
    });
  },
};
