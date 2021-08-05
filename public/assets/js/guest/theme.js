(function ($) {
  "use strict";

  var nav_offset_top = $("header").height() + 50;

  //* Navbar Fixed
  function navbarFixed() {
    if ($(".header_area").length) {
      $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= nav_offset_top) {
          $(".header_area").addClass("navbar_fixed");
        } else {
          $(".header_area").removeClass("navbar_fixed");
        }
      });
    }
  }
  navbarFixed();

  $(".skema_swipe-btn label").on("click", function (e) {
    $(".skema_swipe-btn label").removeClass("active");
    $(this).addClass("active");

    if (e.target.htmlFor == "margin") {
      $(".margin_plans").addClass("active");
      $(".bagi_plans").removeClass("active");
    } else if (e.target.htmlFor == "bagi") {
      $(".margin_plans").removeClass("active");
      $(".bagi_plans").addClass("active");
    }
  });
})(jQuery);
