

var pageX = document.documentElement.clientWidth;
var pageY = document.documentElement.clientHeight;
var mouseY = 0;
var mouseX = 0;

document.addEventListener('mousemove', function(event) {
  // verticalAxis
  mouseY = event.pageY;
  var yAxis = (pageY / 1 - mouseY) / pageY * 300;
  // horizontalAxis
  mouseX = event.pageX / -pageX;
  var xAxis = -mouseX * 100 - 100;

  var ghostEyes = document.querySelectorAll('.box__ghost-eyes');
  ghostEyes.forEach(function(eye) {
    eye.style.transform = 'translate(' + xAxis + '%,-' + yAxis + '%)';
  });

});