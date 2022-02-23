     var i = 0;
      var images = [];
      var time = 3000;

      images[0] = "images/inc1.webp";
      images[1] = "images/inc2.jpg";
      images[2] =  "images/inc3.jpg";
      images[3] =  "images/incubaotors.jpg";
      images[4] =  "images/inc5.webp";
      images[5] =  "images/inc6.jpg";
      images[6] =  "images/incubators big.jpg";
      images[7] =  "images/sasso1.jpg";
      function changeImg() {
        document.slide.src = images[i];
        if (i < images.length - 1) {
          i++;
        } else {
          i = 0;
        }

        setTimeout("changeImg()", time);
      }
      window.onload = changeImg;