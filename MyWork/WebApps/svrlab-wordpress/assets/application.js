import './application.scss';
import './js/app/fixedEl';
import './js/app/ajaxSend';
// import './js/phonemask';

$('[data-removeImages] img').each(function(){
  var src = $(this).attr('src');
  $('[data-productImage]').append(
    '<img src="' + src + '" class="materialboxed hoverable z-depth-2 gallery-overlay">'
  );
  $(this).hide();
});

$(document).ready(function() {
    
    // $('input[type=tel]').mask('+7(999)999-99-99');

    $('#arrowto__top').click(function() {
        $('body, html').animate({
            scrollTop: 0
        }, 1000);
    });

    $('[data-imageClick], .material-placeholder').click(function() {
        $('.material-placeholder').addClass('overflow-visible');
        $('.materialboxed').materialbox();
    });
    $('#materialbox-overlay, .gallery-overlay').click(function() {
        $('.material-placeholder').removeClass('overflow-visible');
    });
    
    $('html').keydown(function(eventObject){ //отлавливаем нажатие клавиш
        if (event.keyCode == 27) { 
            $('.material-placeholder').removeClass('overflow-visible');
        }
    });

    
});
