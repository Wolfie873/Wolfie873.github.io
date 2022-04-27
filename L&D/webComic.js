$(document).ready(function () {
  
  var counter = 0;
  var imgArray = [$("#profile"), $("#aut"), $("#bar"), $("#deadg"), $("#diversity"), $("#games"), $("#group"), $("#life"), $("#lifecomic"), $("#procras"), $("#smoke"), $("#winch")];

  $("jcarousel-control-prev").click(function () {
    counter--;
    if(counter < 0){
      $(imgArray[counter]).removeClass()
    }
  })
  
});
