document.querySelector(":root", function () {
  $(function () {});
  $(".jcarousel-prev").jcarouselControl({
    target: "-=1",
  });

  $(".jcarousel-next").jcarouselControl({
    target: "+=1",
  });
});
var carousel = $(".jcarousel").jcarousel({
  items: ".jcarousel-item",
  animation: "slow",
  transitions: true,
  wrap: "both",
  center: true,
  vertical: true,
});

$(".jcarousel-prev").jcarouselControl({
  target: "-=1",
  carousel: carousel,
});
