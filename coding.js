$("#sno_btn").click(function () {
  if ($("body").css("background-image") == "none") {
    $("body").css({
      "background-color": "#6b9ac4ff",
      "background-image": "url('snow.gif')",
    });
  } else {
    $("body").css({
      "background-color": "#f0ebd8",
      "background-image": "none",
    });
  }
});
