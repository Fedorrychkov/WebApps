$(window).scroll(function() {
  if ($(this).scrollTop()) {
      $('#btn_scl_top').fadeIn();
  } else {
      $('#btn_scl_top').fadeOut();
  }
});


$('[data-scroll-toblock]').click(function(e){
  var attr_value = $(this).data('scroll-toblock');  
  e.preventDefault();
    $('html, body').animate({
        scrollTop: $("#" + attr_value +"").offset().top
    }, 500);
}); 

$("#btn_scl_top").click(function() {
  $("html, body").animate({scrollTop: 0}, 1000);
});

function checkChanges(e) {
	if ($(e).val() != '') {
		$(e).css('border-color', '#fff');
	} else {
		$(e).css('border-color', 'red');
		console.log('Empty');
	}
}

function menu_check() {
  if ($(window).width() > 751) {
    $('header .menu').css('display', 'block');
    console.log($(window).width());
  }else{
    $('header .menu').css('display', 'none');
    console.log($(window).width());
  }
}

$(document).ready(function(){
  var navtoggle = false;
  //Надо исправить в десктопной версии сворачивание меню
  $('#nav-toggle, .menu,.menu-overlay').click(function(){
      var windowWidth = $(window).width();
      if ( windowWidth <= 750) {
        $('#nav-toggle').toggleClass('active');
        $('.menu,.menu-overlay').slideToggle();
      }
  });

  menu_check();


  $('body').show();
  $('.version').text(NProgress.version);
  NProgress.start();
  setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 400);

  $("#b-0").click(function() { NProgress.start(); });
  $("#b-40").click(function() { NProgress.set(0.4); });
  $("#b-inc").click(function() { NProgress.inc(); });
  $("#b-100").click(function() { NProgress.done(); });

});

$(window).resize(function(){
  var windowWidth = $(window).width();

  menu_check();

});