function topScroll() {
  if ( $(window).scrollTop() <= wHeight()/2 ) {
    return $(window).scrollTop(); 
  } else {
    return $(window).scrollTop();
  }
}

function wHeight() {
  return $(window).height();
}

$(document).ready(function(){
  $(window).scroll(function(){
    //$('[data-slidecontent]').css({marginTop: -topScroll()}); 
  });

});
