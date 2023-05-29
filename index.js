window.onload = function() {
    var images = ["img/ขนมปังญวณ.png", "img/ก๋วยเตี๋ยวหมูสด.png", "img/ข้าวเปียก.png"];
    var currentIndex = 0;
    var imageElement = document.getElementById("banner-image");
  
    function changeImage() {
      imageElement.src = images[currentIndex];
      currentIndex = (currentIndex + 1) % images.length;
    }
  
    setInterval(changeImage, 3000); // Change image every 3 seconds (adjust the interval as needed)
  };
  