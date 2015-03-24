var swiper = new Swiper('.swiper-container', {
	 pagination: '.swiper-pagination',
	 paginationClickable: true,
	 grabCursor: true,
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev'
});

var swiper2 = new Swiper('.swiper-container2', {
  pagination: '.swiper-pagination2',
  paginationClickable: true,
  spaceBetween: 0,
  centeredSlides: true,
  autoplay: 5000,
  pagination: '.swiper-pagination2',
  paginationClickable: true,
  spaceBetween: 0,
  centeredSlides: true,
  autoplay: 3000,
  autoplayDisableOnInteraction: false
});

var swiper3 = new Swiper('.swiper-container-3', {
  slidesPerView: 4,
  centeredSlides: true,
  paginationClickable: true,
  spaceBetween: 10,
  grabCursor: true
});

(function($){
  $(document).on('click', '.search', function()
  {
    if ($('.form-search').is(':hidden')) {
     $('.form-search').show();
      $('.search-overflow').css({'top': '0px'});
    } else {
     $('.form-search').hide();
      $('.search-overflow').css({'top': '0px'});
    }
  })
})(jQuery)
