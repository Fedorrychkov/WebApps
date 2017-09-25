var reURLInformation = new RegExp([
    '^(https?:)//', // protocol
    '(([^:/?#]*)(?::([0-9]+))?)', // host (hostname and port)
    '(/{0,1}[^?#]*)', // pathname
    '(\\?[^#]*|)', // search
    '(#.*|)$' // hash
].join(''));

$(document).ready(function(){
    
    function send_message(form_id) {
    document.getElementById(form_id).addEventListener('submit', function(e) {

      e.preventDefault();
      e.stopPropagation();

      var form = $(this);
    
      var attr_value = $(this).find('button').data('send');

      var name = $(form).find('input[name="name"]').prop('value');
      var phone = $(form).find('input[name="phone"]').prop('value');
      var mail = $(form).find('input[name="mail"]').prop('value');
      var whatform = attr_value;
    
      var data = form.serialize();
      var action = form.attr('action');
      console.log(action);
      $.ajax({
          type: 'POST',
          url: action,
          data: data,
          success: function (data) {
            $('body').find('#' + form_id).hide();
            $('body').find('.popup_form__success').css('display', 'block');
          },
          error: function (data) {
              $(form).find(this).text('Ошибка');
              setTimeout(function () {
                  $(form).find('[data-send]').text('Ошибка');
              }, 2000);
          }
      });
    });
  }

    $('[data-send]').click(function(){
        //$(this).prop('disabled', true);
        var id = $(this).parent().parent().attr('id');
        console.log(id);

        if (id != '' && id != 'undefined') {
            send_message(id);
        }
        
    });


});