var i = 0;
var images = [];
var time = 7000;

images[0] = "images/feeding1.webp";
images[1] = "images/feeding2.webp";
images[2] =  "images/feeding3.webp";
images[3] =  "images/feeding4.jpg";
images[4] =  "images/feeding5.jpg";
images[5] =  "images/feeding6.jpg";
images[6] =  "images/feeding7.jpg";
images[7] =  "images/feeding8.webp";
function changeImg() {
  document.nutrition.src = images[i];
  if (i < images.length - 1) {
    i++;
  } else {
    i = 0;
  }

  setTimeout("changeImg()", time);
}
window.onload = changeImg;