$(document).ready(function() {

   'use strict';
    
	function del_spaces(str){
      	str = str.replace(/\s+/g, '');
      	return parseFloat(str);
    }
    function changeDot(str) {
      	str = str.replace('.', ',');
      	return str;
    }
    function money_check () {
    	var new_money_profit = del_spaces($('#profit_money_case_check').html());
    	var new_money_investments = del_spaces($('#investments_money_case_check').html());
    	if (new_money_profit > 1000000) {
    		$('#profit_money_case').html('млн');
    		$('#profit_money_case_check').html(new_money_profit/1000000);
    	}
    	if (new_money_profit < 1000000) {
    		$('#profit_money_case').html('тыс');
    		$('#profit_money_case_check').html(new_money_profit/1000);
    	}

    	if (new_money_investments > 1000000) {
    		$('#investments_money_case').html('млн');
    		$('#investments_money_case_check').html(new_money_investments/1000000);
    	}
    	if (new_money_investments < 1000000) {
    		$('#investments_money_case').html('тыс');
    		$('#investments_money_case_check').html(new_money_investments/1000);
    	}

    	var withoutDots1 = changeDot($('#profit_money_case_check').html());
    	$('#profit_money_case_check').html(withoutDots1);

    	var withoutDots2 = changeDot($('#investments_money_case_check').html());
    	$('#investments_money_case_check').html(withoutDots2);

    }
    
    money_check();
     // Калькулятор для страницы Кейс.
    var vznosy = parseFloat($("#vznosy").html().replace(/\s/g, ''));
    var royall = parseFloat($("#royall").html().replace(/\s/g, ''));
    var summoney = vznosy + royall;
    var graphicpercent = vznosy*100/summoney;
    $('.case .case-content .bottom-case .graph .lineblue').css("width", graphicpercent+"%").fadeIn("");
    // End Калькулятор для страницы Кейс.
    
    
    
    $('[data-imagesource]').click(function(){
		var attr_value = $(this).data('imagesource');
		if (attr_value != '') {
			$('#original_review img').attr("src", attr_value);
			$('#original_review').fadeIn();
		}
	});
	$('#review_close').click(function(){
		$(this).parent().parent().fadeOut();
	});
	$('#original_review').click(function(){
		$(this).fadeOut();
	});
});