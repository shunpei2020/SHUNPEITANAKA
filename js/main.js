// TOP スライダー
$('.autoplay').slick({
  autoplay: true,
  autoplaySpeed: 3000,
});

// WORKS アコーディオン
$('.btn').on('click', function(){
  $('.more').slideDown();
  $('.btn').css('display','none');
});
$('.up').on('click', function(){
  $('.more').slideUp();
  $('.btn').css('display', 'block')
});