<style>
  
html {
  background: #0E3741;
}

.circle {
  position: absolute;
  width: 100px;
  height: 100px;
  top: 50%;
  left: 50%;
  margin: -50px 0 0 -50px;
  background: #CB4B16;
  border-radius: 80%;
  backface-visibility: hidden;
}
</style>
<div class="circle"></div>
  
<script>
 
var $circle = $('.circle');

function moveCircle(e) {
	TweenLite.to($circle, 0.3, {
    css: {
      left: e.pageX,
      top: e.pageY
    }
  });
}

$(window).on('mousemove', moveCircle);
</script>
/*
*url for cdns :https://codepen.io/grayghostvisuals/pen/kepDb
*/
