<div class="swiper-container-3">
  <div class="swiper-wrapper">
    <div class="swiper-slide" style="background: url(http://www.dmcihomes.com/dmcihomes.php?type=3&id=1406) center; background-size: cover">
      <a href="#" data-reveal-id="myModal" class="myModal"></a>
      <center class="logo"> <img src="http://www.dmcihomes.com/dmcihomes.php?type=0&id=24"> </center>
    </div>
    <div class="swiper-slide" style="background: url(http://www.dmcihomes.com/dmcihomes.php?type=3&id=1492) center; background-size: cover">
      <center class="logo"> <img src="http://www.dmcihomes.com/dmcihomes.php?type=0&id=78"> </center>
    </div>
    <div class="swiper-slide" style="background: url(http://www.dmcihomes.com/dmcihomes.php?type=3&id=1331) center; background-size: cover">
      <center class="logo"> <img src="http://www.dmcihomes.com/dmcihomes.php?type=0&id=77"> </center>
    </div>
  </div>
</div>

<div id="myModal" class="reveal-modal medium" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <div class="large-12 columns units large-centered">

  <div class="large-12 columns bldg">
    <center> BUILDING A </center>
  </div>

  <div class="large-4 columns header">
    <div class="left"> UNIT </div>
    <div class="right"> STATUS </div>
  </div>

  <div class="large-4 columns header">
    <div class="left"> UNIT </div>
    <div class="right"> STATUS </div>
  </div>

  <div class="large-4 columns header">
    <div class="left"> UNIT </div>
    <div class="right"> STATUS </div>
  </div>

  <div class="large-4 columns lft avbl">
    <div class="unit left"> 101 </div>
    <div class="stat right"> available </div>
  </div>

  <div class="large-4 columns mid rsvd">
    <div class="unit left"> 102 </div>
    <div class="stat right"> reserved </div>
  </div>

  <div class="large-4 columns rht sold">
    <div class="unit left"> 103 </div>
    <div class="stat right"> sold </div>
  </div>

  <div class="large-4 columns lft rsvd">
    <div class="unit left"> 104 </div>
    <div class="stat right"> reserved </div>
  </div>

  <div class="large-4 columns mid avbl">
    <div class="unit left"> 105 </div>
    <div class="stat right"> available </div>
  </div>

  <div class="large-4 columns rht sold">
    <div class="unit left"> 106 </div>
    <div class="stat right"> sold </div>
  </div>
  <div class="clear-both"></div>
</div>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

<style>

body {
  background: -moz-linear-gradient(top, #fff -30%, rgba(121, 150, 181, 1) 125%);
  background: -webkit-gradient(bottom top, right top, color-stop(-30%, #fff), color-stop(125%, rgba(121, 150, 181, 1)));
  background: -webkit-linear-gradient(bottom, #fff -30%, rgba(121, 150, 181, 1) 125%);
  background: -o-linear-gradient(bottom, #fff -30%, rgba(121, 150, 181, 1) 125%);
  background: -ms-linear-gradient(bottom, #fff -30%, rgba(121, 150, 181, 1) 125%);
  background: linear-gradient(to bottom, #fff 70%, rgba(121, 150, 181, 1) 125%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0097d2', endColorstr='#00b0a1', GradientType=1 );
}

.swiper-container-3 {
 overflow: hidden;
 margin-top: 75px;
}

.swiper-slide {
  position: relative;
  background: #ccc;
  height: 400px;
}

.logo {
  width: 100%;
  position: absolute;
  bottom: 0px;
  background: rgba(0,0,0,0.6);
}

.logo img {
  width: 50%;
}

.myModal {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0px;
}

.units {
  padding: 15px;
  background: #fff;
}

.units .large-4 {
  padding: 15px;
}

.units .lft {
  border-right: 3px solid #ccc;
  border-bottom: 3px solid #ccc;
}

.units .mid {
  border-bottom: 3px solid #ccc;
}

.units .rht {
  border-left: 3px solid #ccc;
  border-bottom: 3px solid #ccc;
}

.units .stat {
  border: 2px solid #7c7c7c;
  width: 60%;
  text-transform: uppercase;
  cursor: pointer;
  text-align: center;
  padding: 5px;
  font-size: 12px;
  font-weight: bold;
  margin-top: -5px;
}

.units .rsvd .stat {
  color: #fff;
  background: #007C39;
  border: 2px solid #007C39;
}

.units .sold .stat {
  color: #fff;
  background: #7c7c7c;
}

.units .header {
  font-weight: bold;
}

.units .header .right {
  position: relative;
  left: -25px;
}

.units .bldg {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
  padding-bottom: 15px;
  border-bottom: 3px solid #ccc;
}
</style>
