$(document).ready(function () {
  var counter = 0;
  var imgArray = [
    $("#profile"),
    $("#aut"),
    $("#bar"),
    $("#deadg"),
    $("#diversity"),
    $("#games"),
    $("#group"),
    $("#life"),
    $("#lifecomic"),
    $("#procras"),
    $("#smoke"),
    $("#winch"),
  ];

  $(".jcarousel-control-next").click(function () {
    imgArray[counter].toggle(
      function () {
        $(this).addClass("jcarousel-items-on");
      },
      function () {
        $(this).removeClass("jcarousel-items-off");
      }
    );
    counter++;

    imgArray[counter].toggle(
      function () {
        $(this).addClass("jcarousel-items-on");
      },
      function () {
        $(this).removeClass("jcarousel-items-off");
      }
    );
  });
});
