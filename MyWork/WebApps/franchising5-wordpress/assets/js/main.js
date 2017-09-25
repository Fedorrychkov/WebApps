

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

!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){var b,c=navigator.userAgent,d=/iphone/i.test(c),e=/chrome/i.test(c),f=/android/i.test(c);a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},a.fn.extend({caret:function(a,b){var c;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof a?(b="number"==typeof b?b:a,this.each(function(){this.setSelectionRange?this.setSelectionRange(a,b):this.createTextRange&&(c=this.createTextRange(),c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select())})):(this[0].setSelectionRange?(a=this[0].selectionStart,b=this[0].selectionEnd):document.selection&&document.selection.createRange&&(c=document.selection.createRange(),a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length),{begin:a,end:b})},unmask:function(){return this.trigger("unmask")},mask:function(c,g){var h,i,j,k,l,m,n,o;if(!c&&this.length>0){h=a(this[0]);var p=h.data(a.mask.dataName);return p?p():void 0}return g=a.extend({autoclear:a.mask.autoclear,placeholder:a.mask.placeholder,completed:null},g),i=a.mask.definitions,j=[],k=n=c.length,l=null,a.each(c.split(""),function(a,b){"?"==b?(n--,k=a):i[b]?(j.push(new RegExp(i[b])),null===l&&(l=j.length-1),k>a&&(m=j.length-1)):j.push(null)}),this.trigger("unmask").each(function(){function h(){if(g.completed){for(var a=l;m>=a;a++)if(j[a]&&C[a]===p(a))return;g.completed.call(B)}}function p(a){return g.placeholder.charAt(a<g.placeholder.length?a:0)}function q(a){for(;++a<n&&!j[a];);return a}function r(a){for(;--a>=0&&!j[a];);return a}function s(a,b){var c,d;if(!(0>a)){for(c=a,d=q(b);n>c;c++)if(j[c]){if(!(n>d&&j[c].test(C[d])))break;C[c]=C[d],C[d]=p(d),d=q(d)}z(),B.caret(Math.max(l,a))}}function t(a){var b,c,d,e;for(b=a,c=p(a);n>b;b++)if(j[b]){if(d=q(b),e=C[b],C[b]=c,!(n>d&&j[d].test(e)))break;c=e}}function u(){var a=B.val(),b=B.caret();if(o&&o.length&&o.length>a.length){for(A(!0);b.begin>0&&!j[b.begin-1];)b.begin--;if(0===b.begin)for(;b.begin<l&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}else{for(A(!0);b.begin<n&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}h()}function v(){A(),B.val()!=E&&B.change()}function w(a){if(!B.prop("readonly")){var b,c,e,f=a.which||a.keyCode;o=B.val(),8===f||46===f||d&&127===f?(b=B.caret(),c=b.begin,e=b.end,e-c===0&&(c=46!==f?r(c):e=q(c-1),e=46===f?q(e):e),y(c,e),s(c,e-1),a.preventDefault()):13===f?v.call(this,a):27===f&&(B.val(E),B.caret(0,A()),a.preventDefault())}}function x(b){if(!B.prop("readonly")){var c,d,e,g=b.which||b.keyCode,i=B.caret();if(!(b.ctrlKey||b.altKey||b.metaKey||32>g)&&g&&13!==g){if(i.end-i.begin!==0&&(y(i.begin,i.end),s(i.begin,i.end-1)),c=q(i.begin-1),n>c&&(d=String.fromCharCode(g),j[c].test(d))){if(t(c),C[c]=d,z(),e=q(c),f){var k=function(){a.proxy(a.fn.caret,B,e)()};setTimeout(k,0)}else B.caret(e);i.begin<=m&&h()}b.preventDefault()}}}function y(a,b){var c;for(c=a;b>c&&n>c;c++)j[c]&&(C[c]=p(c))}function z(){B.val(C.join(""))}function A(a){var b,c,d,e=B.val(),f=-1;for(b=0,d=0;n>b;b++)if(j[b]){for(C[b]=p(b);d++<e.length;)if(c=e.charAt(d-1),j[b].test(c)){C[b]=c,f=b;break}if(d>e.length){y(b+1,n);break}}else C[b]===e.charAt(d)&&d++,k>b&&(f=b);return a?z():k>f+1?g.autoclear||C.join("")===D?(B.val()&&B.val(""),y(0,n)):z():(z(),B.val(B.val().substring(0,f+1))),k?b:l}var B=a(this),C=a.map(c.split(""),function(a,b){return"?"!=a?i[a]?p(b):a:void 0}),D=C.join(""),E=B.val();B.data(a.mask.dataName,function(){return a.map(C,function(a,b){return j[b]&&a!=p(b)?a:null}).join("")}),B.one("unmask",function(){B.off(".mask").removeData(a.mask.dataName)}).on("focus.mask",function(){if(!B.prop("readonly")){clearTimeout(b);var a;E=B.val(),a=A(),b=setTimeout(function(){B.get(0)===document.activeElement&&(z(),a==c.replace("?","").length?B.caret(0,a):B.caret(a))},10)}}).on("blur.mask",v).on("keydown.mask",w).on("keypress.mask",x).on("input.mask paste.mask",function(){B.prop("readonly")||setTimeout(function(){var a=A(!0);B.caret(a),h()},0)}),e&&f&&B.off("input.mask").on("input.mask",u),A()})}})});

$(document).ready(function () {

    var delay = 0;

    

    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    /* маска телефона */
        $('.inp-phone').mask('+7(999)999-99-99');
    

    /* отправка формы */

    $(document).on('click', '.js--form-submit', function () {

        var btn = $(this);
        var form = btn.closest('.main-form');
        var errors = false;

        form.find('.required').each(function () {
            var val = $(this).find('.inp').prop('value');
            if (val == '') {
                $(this).addClass('error');
                errors = true;
            }
            else {
                if ($(this).find('.inp').hasClass('inp-mail')) {
                    if (validateEmail(val) == false) {
                        $(this).addClass('error');
                        errors = true;
                    }
                }
            }
        });

        if(btn.hasClass('js--next-step')){
            delay = $('.step1 .main-form').data('delay');
            form_has_send = false;
            $('.step1').addClass('hidden-block');
            $('.step2').removeClass('hidden-block');
            $(this).closest('.calc').addClass('new-bg');
            $('.slide-calc').trigger('click');
        }
        else{
            form_has_send = true;
            delay = 0;
        }

        if (errors == false) {
            var button_value = btn.text();
            btn.text('Отправляем...');

            if ($(form).find('input[name="name"]').length != 0) {
                $.cookie('cookie_name', $(form).find('input[name="name"]').prop('value'));
            }
            else {
                $.cookie('cookie_name', null);
            }

            var method = form.attr('method');
            var action = form.attr('action');
            var data = form.serialize();

            if(btn.hasClass('js--step-two')){
                data = data + '&' + $('.step1 .main-form').serialize();
            }

            setTimeout(function(){
                $.ajax({
                    type: method,
                    url: action,
                    data: data,
                    success: function (data) {

                        if(!btn.hasClass('js--next-step')){
                            window.location.href = "thanks.html";
                        }
                    },
                    error: function (data) {
                        btn.text('Ошибка');
                        setTimeout(function () {
                            btn.text(button_value);
                        }, 2000);
                    }
                });
            },delay)
        }

        return false;
    });


    /* отправка формы с Прайслиста */

    $(document).on('click', '.js--form-submit2', function () {

        var btn = $(this);
        var form = btn.closest('.main-form');
        var errors = false;

        form.find('.required').each(function () {
            var val = $(this).find('.inp').prop('value');
            if (val == '') {
                $(this).addClass('error');
                errors = true;
            }
            else {
                if ($(this).find('.inp').hasClass('inp-mail')) {
                    if (validateEmail(val) == false) {
                        $(this).addClass('error');
                        errors = true;
                    }
                }
            }
        });

        if(btn.hasClass('js--next-step')){
            delay = $('.step1 .main-form').data('delay');
            form_has_send = false;
            $('.step1').addClass('hidden-block');
            $('.step2').removeClass('hidden-block');
            $(this).closest('.calc').addClass('new-bg');
            $('.slide-calc').trigger('click');
        }
        else{
            form_has_send = true;
            delay = 0;
        }

        if (errors == false) {
            var button_value = btn.text();
            btn.text('Отправляем...');

            if ($(form).find('input[name="name"]').length != 0) {
                $.cookie('cookie_name', $(form).find('input[name="name"]').prop('value'));
            }
            else {
                $.cookie('cookie_name', null);
            }

            var method = form.attr('method');
            var action = form.attr('action');
            var data = form.serialize();

            if(btn.hasClass('js--step-two')){
                data = data + '&' + $('.step1 .main-form').serialize();
            }

            setTimeout(function(){
                $.ajax({
                    type: method,
                    url: action,
                    data: data,
                    success: function (data) {

                        if(!btn.hasClass('js--next-step')){
                            window.location.href = "thanks-price.html";
                        }
                    },
                    error: function (data) {
                        btn.text('Ошибка');
                        setTimeout(function () {
                            btn.text(button_value);
                        }, 2000);
                    }
                });
            },delay)
        }

        return false;
    });

    $(document).on('focus', 'input', function () {
        $(this).closest('.required').removeClass('error');
    });

    $(document).on('keydown', '.inp-number', function (e) {
        input_number();
    });

    // ввод количества с клавиатуры
    $(document).on('input', '.inp-number', function () {
        if ($(this).data("lastval") != $(this).val()) {
            if ($(this).val() == '') {
                $(this).prop('value', '')
            }
            else {
                var value = $(this).prop('value');
                value = value.replace(/\s+/g, '');
                value = Number(value);
                value = value.toString();
                value = number_format(value);
                if (value == "NaN") {
                    $(this).prop('value', "")
                } else {
                    $(this).prop('value', value);
                }
            };
            $(this).data("lastval", $(this).val());

        };
    });


    $('.js--radio').change(function(){
        change_radio($(this));
    });

    var slider;
    var select;

    function create_slider(select){
        var min = select.find('option:first-child').text();
        var max = select.find('option:last-child').text();
        var length = select.find('option').length;

        $('.value-start').text('от ' + min + 'мм');
        $('.value-end').text('до ' + max + 'мм');
        $('.ui-slider-handle').text(select.val());

        slider = $("#slider").slider({
            min: 1,
            max: length,
            range: "min",
            value: select[0].selectedIndex + 1,
            create: function(){
                $('.ui-slider-handle').text(select.val());

            },
            slide: function (event, ui) {
                console.log('11')
                select[0].selectedIndex = ui.value - 1;
                $('.ui-slider-handle').text(select.val());
            }
        });

        if( device.mobile() == true ) {
            $('#slider').draggable();
        }
    }

    function change_radio(block){
        /*if($(".ui-slider-handle").length){
            $("#slider").slider( "destroy" );
        }*/
        slider_name = block.data('select');
        select = $('#' + slider_name);
        $('#reservation select').attr('disabled', 'true');
        $('#' + slider_name).removeAttr('disabled');
        setTimeout(function(){
            create_slider(select);
        },100);

        var radio = block.closest('label').data('radio');
        $('.params-check').addClass('hidden-block');
        $('.params-check input').attr('disabled','disabled');

        $('.params-check').each(function(){
            console.log()
            if($(this).data('radio') == radio){
                $(this).removeClass('hidden-block');
                $(this).find('input').removeAttr('disabled');
            }
        })
    }
});

// ввод только цифр в поле
var input_number = function(){
    var allow_meta_keys=[86, 67, 65];
    if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9  || event.keyCode == 27 ||
        // Разрешаем: Ctrl+A
        ($.inArray(event.keyCode,allow_meta_keys) > -1 && (event.ctrlKey === true ||  event.metaKey === true)) ||
        // Разрешаем: home, end, влево, вправо
        (event.keyCode >= 35 && event.keyCode <= 39)) {
        // Ничего не делаем
        return;
    }
    else {
        // Обеждаемся, что это цифра, и останавливаем событие keypress
        if ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
            event.preventDefault();
        }
    }
};

function number_format(str) {
    return str.replace(/(\s)+/g, '').replace(/(\d{1,3})(?=(?:\d{3})+$)/g, '$1 ');
}
