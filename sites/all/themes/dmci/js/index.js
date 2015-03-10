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
  autoplayDisableOnInteraction: false
});
