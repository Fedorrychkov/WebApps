//const { URL } = require('url');
var reURLInformation = new RegExp([
    '^(https?:)//', // protocol
    '(([^:/?#]*)(?::([0-9]+))?)', // host (hostname and port)
    '(/{0,1}[^?#]*)', // pathname
    '(\\?[^#]*|)', // search
    '(#.*|)$' // hash
].join(''));

$(document).ready(function(){
  //upakovka_form
  //$('[data-form-submit]').click(function(){



  function send_message(form_id) {
    document.getElementById(form_id).addEventListener('submit', function(e) {

      e.preventDefault();
      e.stopPropagation();
      var attr_value = $(this).find('button').data('form-submit');
      var form = $(this);
      var name = $(form).find('input[name="name"]').prop('value');
      $.cookie('username', name, {
          path: '/',
      });
      console.log(name);
      console.log($.cookie('username'));

      var phone = $(form).find('input[name="phone"]').prop('value');
      var mail = $(form).find('input[name="mail"]').prop('value');
      var FormFor = $(form).find('input[name="FormFor"]').prop('value');
      var WhereIsForm = $(form).find('input[name="WhereIsForm"]').prop('value');

      var other_input_hidden = $(form).find('input[name="other_input_hidden"]').prop('value');
      var year_input_hidden = $(form).find('input[name="year_input_hidden"]').prop('value');
      var time_input_hidden = $(form).find('input[name="time_input_hidden"]').prop('value');
      var price_input_hidden = $(form).find('input[name="price_input_hidden"]').prop('value');
      var stat_input_hidden = $(form).find('input[name="stat_input_hidden"]').prop('value');

      var link_href = "";
      if (attr_value == 'upakovka_form') {
        link_href = window.location.href + "/franchise_thanks/";
      }
      if (attr_value == 'work') {
        link_href = window.location.href + "/work_thanks/";
      }
      if (attr_value == 'franchdev_form') {
        link_href = window.location.href + "/franchdev_thanks/";
      }
      if (attr_value == 'thanks_mail') {
        var myURL = window.location.href;
        var match = myURL.match(reURLInformation);

        link_href = match[1] + "//" + match[2] + "/thanks_page";
//        link_href = window.location.href + "/thanks_page/";
      }
      if (attr_value == 'contacts_mail') {
        link_href = window.location.href + "/work_thanks/";
      }
      var data = form.serialize();
      var action = form.attr('action');
      $.ajax({
          type: 'POST',
          url: action,
          data: data,
          success: function (data) {
             console.log(link_href);
            location = link_href;
            $.cookie('username', name, {
                path: '/',
            });
            alert(location);
          },
          error: function (data) {
              $(form).find(this).text('Ошибка');
              setTimeout(function () {
                  $(form).find('[data-form-submit]').text('Ошибка');
              }, 2000);
          }
      });
    });
  }

  $('[data-form-submit]').click(function(){
    //$(this).prop('disabled', true);
    var id = $(this).parent().parent().attr('id');
    console.log(id);

    $.cookie('username', null);
    if (id != '' && id != 'undefined') {
      send_message(id);
    }
    
  });

  $('[data-personal]').click(function(){
    $(this).toggleClass('unchecked');
    if ($(this).hasClass('unchecked')) {
      $(this).parent().parent().find('button').prop('disabled', true);
      $(this).parent().parent().find('button').css('opacity', 0.6);
      $(this).parent().find('span').css('color', 'red');
    }else{
      $(this).parent().parent().find('button').prop('disabled', false);
      $(this).parent().parent().find('button').css('opacity', 1);
      $(this).parent().find('span').css('color', 'inherit');
    }
    

  });
  
});