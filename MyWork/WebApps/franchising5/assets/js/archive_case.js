$(document).ready(function() {
    function changeWordFranch() { /* Обязательно, как будет время, нужно переписать этот костыль.  */
    	$('.franchise_check').each(function(){
    		var cW = parseInt($(this).html());
    		console.log(cW);
    		if (cW == 1 || cW == 21 || cW == 31 || cW == 41 || cW == 51 || cW == 61 || cW == 71 || cW == 81 || cW == 91 || cW == 101 || cW == 121 || cW == 131) {
    			$(this).parent().find('.franchise_change').html('франшиза');
                $(this).parent().find('.franchise_sale_change').html('Продана');
    			$(this).parent().find('.franchise_change_more').html('франшиза продана');
    		}
    		if (cW == 2 || cW == 3 || cW == 4 || cW == 22 || cW == 23 || cW == 24 || cW == 32 || cW == 33 || cW == 34 || cW == 42 || cW == 43 || cW == 44 || cW == 52 || cW == 53 || cW == 54) {
    			$(this).parent().find('.franchise_change').html('франшизы');
    			$(this).parent().find('.franchise_change_more').html('франшизы продано');
    		}
    	});
    }
    changeWordFranch();
});