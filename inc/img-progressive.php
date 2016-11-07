<div class="placeholder img-responsive" data-large="https://cdn-images-1.medium.com/max/1800/1*sg-uLNm73whmdOgKlrQdZA.jpeg">
  <img src="https://cdn-images-1.medium.com/freeze/max/27/1*sg-uLNm73whmdOgKlrQdZA.jpeg?q=20" class="img-small">
  <div style="padding-bottom: 66.6%;"></div>
</div>



<style>

.placeholder {
  background-color: #f6f6f6;
  background-size: cover;
  background-repeat: no-repeat;
  position: relative;
  overflow: hidden;
}

.placeholder img {
  position: absolute;
  opacity: 0;
  top: 0;
  left: 0;
  width: 100%;
  transition: opacity 1s linear;
}

.placeholder img.loaded {
  opacity: 1;
}

.img-small {
  filter: blur(50px);
  /* this is needed so Safari keeps sharp edges */
  transform: scale(1);
}
</style>

<script>
window.onload = function() {

  var placeholder = document.querySelector('.placeholder'),
  small = placeholder.querySelector('.img-small')

  // 1: load small image and show it
  var img = new Image();
  img.src = small.src;
  img.onload = function () {
    small.classList.add('loaded');
  };

  // 2: load large image
  var imgLarge = new Image();
  imgLarge.src = placeholder.dataset.large;
  imgLarge.onload = function () {
    imgLarge.classList.add('loaded');
  };
  placeholder.appendChild(imgLarge);
}
</script>
