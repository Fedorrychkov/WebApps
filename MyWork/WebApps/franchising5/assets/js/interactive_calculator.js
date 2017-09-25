$(document).ready(function(){  
    
    
   var btn_1 = $('#btn_1');
	$(btn_1).prop('disabled', true);

	$('.calc_checkbox').click(function() {
		$(btn_1).prop('disabled', false);
	});
	$('.calc_check_descr label').click(function() {
		$(btn_1).prop('disabled', false);
	});
	$('input[name="BUSINESS_AREA"]').click(function() {
		$(btn_1).prop('disabled', false);
	});
	
	$('.calc_check_item').click(function(){

		var checkbox = $(this).find('input[name="BUSINESS_AREA"]');
		$(checkbox).prop("checked", false);
		$(checkbox).prop("checked", true);
		
		var label = checkbox.val();

		if (label == "other") {
	       $('#check_hidden').css('display', 'block');
	       console.log(label);
	   } else {
	       $('#check_hidden').css('display', 'none');
	       console.log(label);
	       $('#hidden_other').val('');
	       document.getElementById('other_input_hidden').value = label;
	   }
	});

	$('button[data-btn-next]').click(function(){
		var attr_value = $(this).data('btn-next');

		$(this).parent().hide();
		$('#' + attr_value + '_section').fadeIn();
		$('#' + attr_value + '_section').css('display', 'flex');
		$('html, body').animate({
	        scrollTop: $('#' + attr_value + '_section').offset().top
	    }, 500);

	});
	
	$('button[data-btn-next2]').click(function(){
		var attr_value = $(this).data('btn-next2');

		$(this).parent().parent().parent().hide();
		$('#' + attr_value + '_section').fadeIn();
		if (attr_value != 'btn_5') {
			$('#' + attr_value + '_section').css('display', 'flex');
		}else {
			$('#' + attr_value + '_section').css('display', 'block');
		}
		$('html, body').animate({
	        scrollTop: $('#' + attr_value + '_section').offset().top
	    }, 500);
			
	});
	$('#btn_5').click(function(){
		$('#form_calculator').hide();
		$('html, body').animate({
	        scrollTop: $('#scroll_from_5').offset().top
	    }, 500);
	});
	

});