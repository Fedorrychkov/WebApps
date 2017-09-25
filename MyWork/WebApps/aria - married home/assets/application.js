import './application.scss';
import './js/app/bgcanvas.js';
import './js/app/welcome_screen.js';
import './js/app/nav.js';
import './js/app/main.js';
import './js/app/popup.js';


$(window).scroll(function(){
  var windowPosition = $(this).scrollTop();
  var stickEl = $('[data-stick]');

  if (stickEl.length > 0) { // if data stick on page
    if (windowPosition >= stickEl.offset().top) {
      $('[data-sticky-element]').fadeIn().addClass('animations__ui-fadeBotIn');
    }else{
      $('[data-sticky-element]').fadeOut().removeClass('animations__ui-fadeBotIn');
    }
    if (windowPosition >= $('footer').offset().top - $(window).height()) {
      $('[data-sticky-element]').fadeOut().removeClass('animations__ui-fadeBotIn');
    }  
  }

  if ($(window).scrollTop() > 200) {
    $('#arrowto__top').fadeIn();
  }else{
    $('#arrowto__top').fadeOut();
  }
});

$('#arrowto__top').click(function() {
  $('body, html').animate({
    scrollTop: 0
  }, 1000);
});

$('[data-removeImages] img').each(function(){
  var src = $(this).attr('src');
  $('[data-productImage]').append(
    '<div class="material-placeholder" data-imageClick=""><img src="' + src + '" class="materialboxed hoverable z-depth-2"></div>'
  );
  $(this).hide();
});

$('[data-imageClick]').click(function() {
  $('.materialboxed').materialbox();
});
