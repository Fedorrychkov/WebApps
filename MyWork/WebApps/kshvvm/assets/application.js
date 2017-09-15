import './application.scss';

$('[data-address]').click(function(){
  var address = $(this).data('address');

  if (address != '') {
    $('.contact__office_address').text(address);
    if ($(this).hasClass('contact__active')) {
      $('[data-address]').removeClass('contact__active');
      $(this).addClass('contact__active');
    }else {
      $('[data-address]').removeClass('contact__active');
      $(this).addClass('contact__active');
    }
  }

});

