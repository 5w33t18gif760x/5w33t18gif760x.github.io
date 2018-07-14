$('.menu-btn').on('click', function(e) {
  e.preventDefault();
  $('.menu').toggleClass('menu_active');
  $('.wrapper').toggleClass('wrapper_active');
})

$('.card').on('click', function() {
    $('.container').toggleClass('container-origin');
})