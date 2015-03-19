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
  spaceBetween: 30,
  grabCursor: true
});