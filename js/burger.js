$('.burger').on('click', function(){
  $('.nav-links').toggleClass('nav-active');
  $(this).toggleClass('toggle');
  $('body').toggleClass('noscroll');
});
$('.nav-links li').on('click', function(){
  $('.nav-links').removeClass('nav-active');
  $('.burger').removeClass('toggle')
  $('body').removeClass('noscroll');
});
const smooth = () => {
  // スムーススクロール
  const smoothScrollTrigger = document.querySelectorAll('#smooth');
  for (let i = 0; i < smoothScrollTrigger.length; i++){
    smoothScrollTrigger[i].addEventListener('click', (e) => {
      e.preventDefault();
      let href = smoothScrollTrigger[i].getAttribute('href');
      let targetElement = document.getElementById(href.replace('#', ''));
      const rect = targetElement.getBoundingClientRect().top;
      const offset = window.pageYOffset;
      const target = rect + offset;
      window.scrollTo({
        top: target,
        behavior: 'smooth',
      });
    });
  }
}
smooth();