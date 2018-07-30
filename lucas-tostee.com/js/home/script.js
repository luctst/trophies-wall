$(document).ready(function(){
/*  SCROLLSPY     */
  $(function(){
  	$(".navbar a").on("click", function(){
  		event.preventDefault();
  		var hash = this.hash;
  		$("body").animate({ scrollTop: $(hash).offset().top}, 900, function() {window.location.hash= hash;})
  	});

/*  HOVER PROJET PRO    */
  });
  $('.project-one > .card').mouseover(function() {
    $('.project-one > .card .card-img-overlay').fadeIn('slow',function(){});
  });
  $('.project-one > .card').mouseleave(function() {
    $('.project-one > .card .card-img-overlay').fadeOut('slow',function(){});
  });
  $('.project-two > .card').mouseover(function() {
    $('.project-two > .card .card-img-overlay').fadeIn('slow',function(){});
  });
  $('.project-two > .card').mouseleave(function() {
    $('.project-two > .card .card-img-overlay').fadeOut('slow',function(){});
  });
  $('.project-three > .card').mouseover(function() {
    $('.project-three > .card .card-img-overlay').fadeIn('slow',function(){});
  });
  $('.project-three > .card').mouseleave(function() {
    $('.project-three > .card .card-img-overlay').fadeOut('slow',function(){});
  });
/*    SCROLL PROJET PRO     */
  $(document).scroll(function() {
    var y = $(this).scrollTop() + $(window).height();
    var w = $(window).width();
    if (w >= 768 && w <= 991) {
      if (y >= 1800) {
        $('.project-one > .card,.project-two > .card').addClass('is-ready');
      }
      if (y >= 2000) {
        $('.project-three > .card').addClass('is-ready');
      }
    }
    if (w >= 992 && w <1200) {
      if (y >= 1700) {
        $('.project-one > .card,.project-two > .card').addClass('is-ready');
      }
      if (y >= 2000) {
        $('.project-three > .card').addClass('is-ready');
      }
    }
    if (w >= 1200) {
      if (y >= 1750) {
        $('.project-one > .card,.project-two > .card').addClass('is-ready');
      }
      if (y >= 2150 ) {
        $('.project-three > .card').addClass('is-ready');
      }
    }
  });
});
