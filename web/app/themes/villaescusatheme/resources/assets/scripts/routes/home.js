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
  },
};
