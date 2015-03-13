<div class="page-content">
  <div class="reservation">
    <div class="large-6 columns slider-map" style="overflow: hidden;">
      <div class="swiper-container2">
        <div class="swiper-wrapper" style="height: 350px;">
          <div class="swiper-slide"> <div class="item" style="background: url(<?php print $base_url_default_files . "property-2.jpg" ?>) center center; width: 100%; height: 100%; background-size: cover"></div> </div>
          <div class="swiper-slide"> <div class="item" style="background: url(<?php print $base_url_default_files . "property-3.jpg" ?>) center center; width: 100%; height: 100%; background-size: cover"></div> </div>
          <div class="swiper-slide"> <div class="item" style="background: url(<?php print $base_url_default_files . "property-2.jpg" ?>) center center; width: 100%; height: 100%; background-size: cover"></div> </div>
        </div>
        <div class="swiper-pagination2"></div>
      </div>
      <center> we want to hear from you. Feel free to send us any suggestion, comment or inquiry.</center>

      <div class="row address">
        <div class="large-4 columns">
        <p class="address-title"> Contact Information </p>
          <b> Our Address: </b>
          <p class="address">
            <div>DMCI Homes Corporate</div> Center 1321 Apolinario St. Bangkal, Makati City
          </p>

          <p class="hours">
            <div>Monday to Fridays</div>
            8:00 am to 5:00 pm
          </p>

          <p class="line">
            <div>Head Office's Trunk Line:</div>
            (632) 555 7777
          </p>
        </div>

        <div class="large-7 columns"><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d61779.36708262926!2d121.05804382695315!3d14.587081178095216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sdmci!5e0!3m2!1sen!2sph!4v1425621662704" width="100%" height="300" frameborder="0" style="border:0"></iframe></div>
      </div>
    </div>

    <div class="large-6 columns">
      <?php print render($reservation_form); ?>
    </div>
  </div>
</div>

<style>
.reservation {
 padding: 0px 25px;
}

.reservation form {
 margin-top: 50px;
}

.reservation .address {
 margin-top: 25px;
 font-size: 14px;
 line-height: 18px;
}

.swiper-pagination2 {
  position: relative;
  top: -30px;
  left: 10px;
  z-index: 10;
}

.swiper-pagination2 span {
  margin-left: 5px;
  margin-right: 5px;
  width: 15px;
  height: 15px;
  box-shadow: 1px 1px 3px #444;
}

.reservation .form-item:first-child label,
.address-title {
  color: #0055A1;
  font-size: 18px;
  font-style: italic;
}

.reservation .form-item:first-child input {
 visibility: hidden;
}

.reservation label {
  position: absolute;
  width: 30%;
  text-align: right;
  color: #0055A1;
}

.reservation .form-item {
  margin-top: 0px;
  margin-bottom: 0px;
}

.reservation .form-textarea-wrapper {
  display: inline !important;
}

.reservation .form-textarea {
 height: 100px !important;
}

.reservation .form-select,
.reservation .form-text,
.reservation .form-textarea {
 position: relative;
 left: 32%;
 width: 68%;
 display: inline;
 box-shadow: none !important;
 height: 25px;
}

.reservation .form-select {
 margin-top: -15px;
}

.reservation .form-text {
  margin-top: -15px;
}

.slider-map center {
 color: rgb(33, 144, 49);
}

.form-submit {
  position: relative;
  left: 32%;
  margin-top: 15px;
  background: #fff !important;
  color: #000 !important;
  font-weight: lighter;
  font-size: 14px;
  letter-spacing: 1px;
}
</style>