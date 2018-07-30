$(document).ready(function(){
  $(document).scroll(function(){
    var y = $(this).scrollTop() + $(window).height();
    var w = $(window).width();
    if (w >= 768 && w <= 991 ) {
      if (y >= 1800) {
        $('.jsFade1').addClass('is-ready');
      }
      if (y >= 2600) {
        $('.jsFade2').addClass('is-ready');
      }
    }
    if (w >= 992 && w <1200) {
      if (y >= 1900) {
        $('.jsFade1').addClass('is-ready');
      }
      if (y >= 2900) {
        $('.jsFade2').addClass('is-ready');
      }
    }
    if (w >= 1200) {
      if (y >= 2500) {
        $('.jsFade1').addClass('is-ready');
      }
      if (y >= 3650) {
        $('.jsFade2').addClass('is-ready');
      }
    }
  });
});
