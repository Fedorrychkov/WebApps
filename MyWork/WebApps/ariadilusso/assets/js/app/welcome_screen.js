function wHeight() {
  if ($(window).height() >= 400) {
    return 400;  
  }else {
    return $(window).height();
  }
}

function hHeader() {
  return $('header').innerHeight()*0;
}

function slider() {
  return $('.slider').slider({indicators: false, height: wHeight() - hHeader()});
}

$(document).ready(function() {
  slider();
  $('[data-slideImage]').each(function(){
    $(this).height(wHeight());
  });
});

$(window).resize(function(){
  slider();
});
