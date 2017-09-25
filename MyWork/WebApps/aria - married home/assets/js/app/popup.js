$('[data-popup]').click(function() {
  var popup = $(this).data('popup');
  if (popup == 'BUTTON_INVITE') {
    $('[data-popupForm]').fadeIn();
    $('[data-overlay]').fadeIn();
    $('body').css('overflow', 'hidden');
  }
});

function closePopup() {
  $('[data-popupForm]').fadeOut();
  $('[data-overlay]').fadeOut();
  $('body').css('overflow', 'inherit');
}
function popupCLoses() {
  $('[data-overlay]').click(function() {
    var overlay = $(this).data('overlay');
    closePopup();
  });

  $('[data-event]').click(function() {
    var event = $(this).data('event');
    if (event == 'closePopup') {
      closePopup();
    }
  });
}
popupCLoses();
$(document).keyup(function(e) {
  if (e.keyCode === 27) closePopup();
});
