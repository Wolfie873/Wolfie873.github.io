(function ($) {
  $(function () {
    $(".jcarousel").on("jcarousel:create jcarousel:reload", function () {
      var element = $(this),
        height = element.innerHeight();
      element.jcarousel("items").css("height", height + "px");
    });

    $(".jcarousel").jcarousel({
      vertical: true,
    });

    $(".jcarousel-control-prev")
      .on("jcarouselcontrol:active", function () {
        $(this).removeClass("inactive");
      })
      .on("jcarouselcontrol:inactive", function () {
        $(this).addClass("inactive");
      })
      .jcarouselControl({
        target: "-=1",
      });

    $(".jcarousel-control-next")
      .on("jcarouselcontrol:active", function () {
        $(this).removeClass("inactive");
      })
      .on("jcarouselcontrol:inactive", function () {
        $(this).addClass("inactive");
      })
      .jcarouselControl({
        target: "+=1",
      });

    $(".jcarousel-pagination")
      .on("jcarouselpagination:active", "a", function () {
        $(this).addClass("active");
      })
      .on("jcarouselpagination:inactive", "a", function () {
        $(this).removeClass("active");
      })
      .jcarouselPagination();
  });
})(jQuery);
