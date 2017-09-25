$(document).ready(function(){
	$('button[data-popup]').click(function(){
		var attr_value = $(this).data('popup');
		$('#modal-overlay').fadeIn();
		$('#' + attr_value + '').fadeIn();
		//$('body').css('overflow', 'hidden');

	});

	$('button[data-send-resume]').click(function(){
		var resume_name = $(this).data('send-resume');

		console.log(resume_name);
		if (resume_name != '') {
			$('#vocancy_title_hidden').val(resume_name);
		}

	});


	$('#modal-overlay').click(function(){
		$(this).fadeOut();
		$('.popup_form').fadeOut();
		$('body').css('overflow', 'auto');
	});

	$('.popup_close').click(function(){
		$(this).parent().fadeOut();
		$('#modal-overlay').fadeOut();
		$('body').css('overflow', 'auto');
	});
});