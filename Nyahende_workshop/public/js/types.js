var i = 0;
var images = [];
var time = 7000;

images[0] = "images/broiler2.jpg";
images[1] =  "images/broiler3.jpg";
images[2] =  "images/brownlayer.jpg";
images[3] =  "images/new2.jpg";
images[4] =  "images/sasso1.jpg";
images[5] =  "images/sasso2.webp";
images[6] =  "images/white layer.jpg";
images[7] =  "images/kuroiler1.jpg";
images[8] =  "images/kuroiler2.jpg";
images[9] =  "images/kuchi1.jpg";
images[10] =  "images/kuchi2.jpg";
function changeImg() {
  document.types.src = images[i];
  if (i < images.length - 1) {
    i++;
  } else {
    i = 0;
  }

  setTimeout("changeImg()", time);
}
window.onload = changeImg;