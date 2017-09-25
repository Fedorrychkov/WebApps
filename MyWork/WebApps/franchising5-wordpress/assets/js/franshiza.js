$(document).ready(function(){
    $('.progress_line[data-width]').each(function(){
        var data_width = $(this);
        var value_width = data_width.attr('data-width');
        var new_value = value_width * 100 / 21;
        $(this).css('width', new_value + '%');
    });
    $('.open_spoiler').click(function(){
		$(this).parent().children('.spoiler_p').slideToggle('', function() {
	      if ($(this).is(':visible')){
	        $('.open_spoiler').html('Скрыть');
	      }else {$('.open_spoiler').html('Читать далее');}
	    });

    });
    
});


