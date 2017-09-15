$(document).ready(function(){
  $('[data-navtoggle]').click(function(){
    $(this).find('span').toggleClass('nav__active');
    $(this).parent().toggleClass('nav__navActive');
  });
});
