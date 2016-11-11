<div class="scene">
  <div class="wrap">
      <div class="wall wall-right"></div>
      <div class="wall wall-left"></div>   
      <div class="wall wall-top"></div>
      <div class="wall wall-bottom"></div> 
      <div class="wall wall-back"></div>    
  </div>
  <div class="wrap">
      <div class="wall wall-right"></div>
      <div class="wall wall-left"></div>   
      <div class="wall wall-top"></div>
      <div class="wall wall-bottom"></div>   
      <div class="wall wall-back"></div>    
  </div>
</div>
<style type="text/css">
.wall{
  background: url('PIA09959-1280x800.jpg');
  background-size: cover;
}

html, body{
  height: 100%;
  width: 100%;
  overflow: hidden;
}

body{
  background: #000;
  text-align: center;
}

body:before{
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle;
}

.scene{
  display: inline-block;
  vertical-align: middle;
  perspective: 5px;
  perspective-origin: 50% 50%;
  opacity: 0;
  animation: fadeIn 3s 1 linear;
  animation-fill-mode: forwards;
  position: relative;
}

.wrap{
  position: absolute;
  width: 1000px;
  height: 1000px;
  left: -500px;
  top: -500px;
  opacity: 0;
  transform-style: preserve-3d;
  animation: move 12s infinite linear;
  animation-fill-mode: forwards;
}

.wrap:nth-child(2){
  animation: move 12s infinite linear;
  animation-delay: 6s;
}

.wall {
  width: 100%;
  height: 100%;
  position: absolute;
}

.wall-right {
  transform: rotateY(90deg) translateZ(500px);
}

.wall-left {
  transform: rotateY(-90deg) translateZ(500px);
}

.wall-top {
  transform: rotateX(90deg) translateZ(500px);
}

.wall-bottom {
  transform: rotateX(-90deg) translateZ(500px);
}

.wall-back {
  transform: rotateX(180deg) translateZ(500px);
}

@keyframes move {
  0%{
    transform: translateZ(-500px) rotate(0deg);
    opacity: 0;
  }
  25%{
    opacity: 1;
  }
  75%{
    opacity: 1;
  }
  100%{
    transform: translateZ(500px) rotate(0deg);
    opacity: 0;
  }
}

@keyframes fadeIn {
  0%{
    opacity: 0;
  }
  100%{
    opacity: 1;
  }
}
</style>