/*! device.js 0.1.57 */
(function () {
    var a, b, c, d, e, f, g, h, i;
    window.device = {}, b = window.document.documentElement, i = window.navigator.userAgent.toLowerCase(), device.ios = function () {
        return device.iphone() || device.ipod() || device.ipad()
    }, device.iphone = function () {
        return c("iphone")
    }, device.ipod = function () {
        return c("ipod")
    }, device.ipad = function () {
        return c("ipad")
    }, device.android = function () {
        return c("android")
    }, device.androidPhone = function () {
        return device.android() && c("mobile")
    }, device.androidTablet = function () {
        return device.android() && !c("mobile")
    }, device.blackberry = function () {
        return c("blackberry") || c("bb10") || c("rim")
    }, device.blackberryPhone = function () {
        return device.blackberry() && !c("tablet")
    }, device.blackberryTablet = function () {
        return device.blackberry() && c("tablet")
    }, device.windows = function () {
        return c("windows")
    }, device.windowsPhone = function () {
        return device.windows() && c("phone")
    }, device.windowsTablet = function () {
        return device.windows() && c("touch")
    }, device.fxos = function () {
        return c("(mobile; rv:") || c("(tablet; rv:")
    }, device.fxosPhone = function () {
        return device.fxos() && c("mobile")
    }, device.fxosTablet = function () {
        return device.fxos() && c("tablet")
    }, device.mobile = function () {
        return device.androidPhone() || device.iphone() || device.ipod() || device.windowsPhone() || device.blackberryPhone() || device.fxosPhone()
    }, device.tablet = function () {
        return device.ipad() || device.androidTablet() || device.blackberryTablet() || device.windowsTablet() || device.fxosTablet()
    }, device.portrait = function () {
        return 90 !== Math.abs(window.orientation)
    }, device.landscape = function () {
        return 90 === Math.abs(window.orientation)
    }, c = function (a) {
        return -1 !== i.indexOf(a)
    }, e = function (a) {
        var c;
        return c = new RegExp(a, "i"), b.className.match(c)
    }, a = function (a) {
        return e(a) ? void 0 : b.className += " " + a
    }, g = function (a) {
        return e(a) ? b.className = b.className.replace(a, "") : void 0
    }, device.ios() ? device.ipad() ? a("ios ipad tablet") : device.iphone() ? a("ios iphone mobile") : device.ipod() && a("ios ipod mobile") : device.android() ? device.androidTablet() ? a("android tablet") : a("android mobile") : device.blackberry() ? device.blackberryTablet() ? a("blackberry tablet") : a("blackberry mobile") : device.windows() ? device.windowsTablet() ? a("windows tablet") : device.windowsPhone() ? a("windows mobile") : a("desktop") : device.fxos() ? device.fxosTablet() ? a("fxos tablet") : a("fxos mobile") : a("desktop"), d = function () {
        return device.landscape() ? (g("portrait"), a("landscape")) : (g("landscape"), a("portrait"))
    }, h = "onorientationchange"in window, f = h ? "orientationchange" : "resize", window.addEventListener ? window.addEventListener(f, d, !1) : window.attachEvent ? window.attachEvent(f, d) : window[f] = d, d()
}).call(this);
$(document).ready(function() {

//	$("#first a").mPageScroll2id({ scrollSpeed: 750 });
//	$("#question a").mPageScroll2id({ scrollSpeed: 750 });
//	$("#foot a").mPageScroll2id({ scrollSpeed: 750 });
//	$("input").jqBootstrapValidation();

   if(device.mobile()  === false){
        $('.inp-phone').mask('+7(999)999-99-99');
         $('input[type="tel"]').mask('+7(999)999-99-99');
    $('input#modal_phone').mask('+7(999)999-99-99');
    }


	$(function() {
		$( "#slider-stat" ).slider({
			range: "min",
			min: 1,
			max: 9,
			value: 6,
			slide: function( event, ui ) {

				

				if (ui.value==1) {$( "#img_stat" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/stat_-100.png");
				$("#hidden_stat").val("-100%");
				$( "#stat_input_hidden").val('-100%');}
				else  if (ui.value==2) {$( "#img_stat" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/stat_-75.png");
				$("#hidden_stat").val("-75%");
				$( "#stat_input_hidden").val('-75%');}
				else  if (ui.value==3) {$( "#img_stat" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/stat_-50.png");
				$("#hidden_stat").val("-50%");
				$( "#stat_input_hidden").val('-50%');}
				else  if (ui.value==4) {$( "#img_stat" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/stat_-25.png");
				$("#hidden_stat").val("-25%");
				$( "#stat_input_hidden").val('-25%');}
				else  if (ui.value==5) {$( "#img_stat" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/stat_0.png");
				$("#hidden_stat").val("0%");
				$( "#stat_input_hidden").val('0%');}
				else  if (ui.value==6) {$( "#img_stat" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/stat_25.png");
				$("#hidden_stat").val("25%");
				$( "#stat_input_hidden").val('25%');}
				else  if (ui.value==7) {$( "#img_stat" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/stat_50.png");
				$("#hidden_stat").val("50%");
				$( "#stat_input_hidden").val('50%');}
				else  if (ui.value==8) {$( "#img_stat" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/stat_75.png");
				$("#hidden_stat").val("75%");
				$( "#stat_input_hidden").val('75%');}
				else  if (ui.value==9) {$( "#img_stat" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/stat_100.png");
				$("#hidden_stat").val("100%");
				$( "#stat_input_hidden").val('100%');}
			}
		});
	});

	function number_formatted(value) {
      	return value.toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
    }
    function del_spaces(str){
      	str = str.replace(/\s/g, '');
      	return parseInt(str);
    }
    function changeDot(str) {
      	str = str.replace('.', ',');
      	return str;
    }
	function viruchka () {
		
        var month_count = del_spaces($('#month_count').html());
        $('#month_count_number').html(month_count);

        var fond_oplaty_truda = 52000;
        var new_fond_oplaty_truda = fond_oplaty_truda * month_count;
        var new_new_fond_oplaty_truda = number_formatted(new_fond_oplaty_truda);
        $('#fond_oplaty_truda').html(new_new_fond_oplaty_truda);
		$("#franchise_fond_spent").val(new_new_fond_oplaty_truda);

        var org_zatrati = 87400;
        var new_org_zatrati = org_zatrati;
        var new_new_org_zatrati = number_formatted(new_org_zatrati);
        $('#org_zatrati').html(new_new_org_zatrati);
		$("#franchise_org_spent").val(new_new_org_zatrati);
        
        var upakovano_franchise = del_spaces($('#col_upakov_franch').html());
        var sale_franchise = del_spaces($('#col_sale_franch').html());
        var middle_check_upakovka = 213000;
        var middle_check_sale = 200000;

        var virychka = (upakovano_franchise * (middle_check_upakovka * 0.5)) + (sale_franchise * (middle_check_sale * 0.4)) * month_count;
        var norm_virychka = number_formatted(virychka);
        $('#viruchka').html(norm_virychka);
        $("#franchise_virychka").val(norm_virychka);

        var nalog_usn = virychka*0.06;
        var new_nalog_usn = number_formatted(nalog_usn);
        $('#nalog_usn').html(new_nalog_usn);
		$("#franchise_nalog").val(new_nalog_usn);
        
		var your_profit = (virychka - nalog_usn - new_fond_oplaty_truda - new_org_zatrati);
        var normal_your_profit = number_formatted(your_profit);
        $('#your_profit_month').html(normal_your_profit);
		$("#franchise_profit").val(normal_your_profit);
        

		
        if (month_count == 1) {
        	$('#month_standart').html('месяц');
        }
        else if (month_count == 2 || month_count == 3 || month_count == 4){
        	$('#month_standart').html('месяца');
        }
        else {
        	$('#month_standart').html('месяцев');
        }
        

     }
     //viruchka();
    $(function() {
		$( "#slider-franchise-month" ).slider({
			range: "min",
			min: 1,
			max: 3,
			value: 2,
			slide: function( event, ui ) {
				$("#col_upakov_franch").html(ui.value);
				$("#franchise_count").val(ui.value);
        		viruchka ();
			}
		});
	});

	$(function() {
		$( "#slider-franchise-sale-month" ).slider({
			range: "min",
			min: 1,
			max: 5,
			value: 3,
			slide: function( event, ui ) {
				$("#col_sale_franch").html(ui.value);
				$("#franchise_sale").val(ui.value);
				viruchka ();
			}
		});
	});

	$(function() {
		$( "#slider-work-period" ).slider({
			range: "min",
			min: 1,
			max: 12,
			value: 1,
			slide: function( event, ui ) {
				$("#month_count").html(ui.value);
				$("#franchise_work_period").val(ui.value);
				viruchka ();
			}
		});
	});

	$(function() {
		$( "#slider-year" ).slider({
			range: "min",
			min: 1,
			max: 10,
			value: 6,
			slide: function( event, ui ) {
				$( "#amount" ).val( 2017-ui.value );
				$( "#hidden_year").val(ui.value);
				$( "#year_input_hidden").val(ui.value);
			}
		});
	});

	

	$(function() {
		$( "#slider-time" ).slider({
			range: "min",
			min: 0,
			max: 6,
			value: 3,
			slide: function( event, ui ) {
				if (ui.value == 0) {
					$( "#img_time" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/time_0.png");
					$("#hidden_time").val(3*ui.value);
				$( "#time_input_hidden").val('0');}

				else  if (ui.value==1) {$( "#img_time" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/time_3.png");
				$("#hidden_time").val(3*ui.value);
				$( "#time_input_hidden").val('3');}
				else  if (ui.value==2) {$( "#img_time" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/time_6.png");
				$("#hidden_time").val(3*ui.value);
				$( "#time_input_hidden").val('6');}
				else  if (ui.value==3) {$( "#img_time" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/time_9.png");
				$("#hidden_time").val(3*ui.value);
				$( "#time_input_hidden").val('9');}
				else  if (ui.value==4) {$( "#img_time" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/time_12.png");
				$("#hidden_time").val(3*ui.value);
				$( "#time_input_hidden").val('12');}
				else  if (ui.value==5) {$( "#img_time" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/time_15.png");
				$("#hidden_time").val(3*ui.value);
				$( "#time_input_hidden").val('15');}
				else  if (ui.value==6) {$( "#img_time" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/time_18.png");
				$("#hidden_time").val(3*ui.value);
				$( "#time_input_hidden").val('18');}
		}
		});

	});
	$(function() {
		$( "#slider-time-mobile" ).slider({
			range: "min",
			min: 0,
			max: 6,
			value: 3,
			slide: function( event, ui ) {
				if (ui.value==0) $( "#img_time-mobile" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/time_tel_1.png");
				else  if (ui.value==1) $( "#img_time-mobile" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/time_tel_3.png");
				else  if (ui.value==2) $( "#img_time-mobile" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/time_tel_6.png");
				else  if (ui.value==3) $( "#img_time-mobile" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/time_tel_9.png");
				else  if (ui.value==4) $( "#img_time-mobile" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/time_tel_12.png");
				else  if (ui.value==5) $( "#img_time-mobile" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/time_tel_15.png");
				else  if (ui.value==6) $( "#img_time-mobile" ).attr("src","../wp-content/themes/franchising5/assets/img/calc_franchise/time_tel_18.png");
		}
		});

	});
	$(function() {
		$( "#slider-price" ).slider({
			range: "min",
			min: 1,
			max: 10,
			value: 0,
			slide: function( event, ui ) {
				if (ui.value==2) {$("#amount_price").val("150 000");
					$("#hidden_price, #price_input_hidden").val("150 000");}
				else  if (ui.value==3) {$("#amount_price").val("250 000");
							$("#hidden_price, #price_input_hidden").val("250 000");}
				else  if (ui.value==4) {$("#amount_price").val("350 000");
						$("#hidden_price, #price_input_hidden").val("350 000");}
				else  if (ui.value==5) {$("#amount_price").val("500 000");
						$("#hidden_price, #price_input_hidden").val("500 000");}
				else  if (ui.value==6) {$("#amount_price").val("750 000");
						$("#hidden_price, #price_input_hidden").val("750 000");}
				else  if (ui.value==7) {$("#amount_price").val("1 000 000");
						$("#hidden_price, #price_input_hidden").val("1 000 000");}
				else  if (ui.value==8) {$("#amount_price").val("1 500 000");
						$("#hidden_price, #price_input_hidden").val("1 500 000");}
				else  if (ui.value==9) {$("#amount_price").val("2 000 000");
						$("#hidden_price, #price_input_hidden").val("2 000 000");}
				else  if (ui.value==10) {$("#amount_price").val("> 3 000 000");
						$("#hidden_price, #price_input_hidden").val("> 3 000 000");}
				else  if (ui.value==1){ $("#amount_price").val("< 100 000");
					$("#hidden_price, #price_input_hidden").val("< 100 000");}
		}
		});
	});

});
