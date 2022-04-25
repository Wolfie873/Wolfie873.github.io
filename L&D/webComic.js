$(document).ready(function () {
  $(function () {
    $(".jcarousel").jcarousel({
      vertical: true,
      list: ".jcarousel-list",
      items: ".jcarousel-item",
      animation: {
        duration: 800,
        easing: "linear",
        complete: function () {},
      },
      transitions: true,
    });
  });

  $(".jcarousel").jcarousel("scroll", target);

  $(".jcarousel-control-prev").click(function () {
    $(".jcarousel").jcarousel("scroll", "-=1");
  });

  $(".jcarousel-control-next").click(function () {
    $(".jcarousel").jcarousel("scroll", "+=1");
  });
});
