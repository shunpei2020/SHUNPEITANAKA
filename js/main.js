$('.work').slick({
  dots:true,
});
$('.btn').on('click', function(){
  $('.more').slideDown();
  $('.btn').css('display','none');
});
$('.up').on('click', function(){
  $('.more').slideUp();
  $('.btn').css('display', 'block')
});