$('.burger').on('click', function(){
  $('.nav-links').toggleClass('nav-active');
  $(this).toggleClass('toggle');
  $('body').toggleClass('noscroll');
});
$('.nav-links li').on('click', function(){
  $('.nav-links').removeClass('nav-active');
  $('body').removeClass('noscroll');
});