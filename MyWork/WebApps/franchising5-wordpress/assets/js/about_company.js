function check() {
  var slides = $('.diplom_item');
  var slidesCount = slides.size();
  var slideWidth = slides.width();
  var slideHeight = $('.diplom_item').height();
  //$('#diplom_items').css('height', slideHeight);
  //$('#diplom_items').css('width', slideWidth*2+slideWidth*slidesCount+20*slidesCount + 'px');
}


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

$(document).ready(function(){
  /*$('[data-carusel-btn]').click(function(){
    check();
    var slideWidth = $('.diplom_item').width();
    var attr_value = $(this).data('carusel-btn');

    if (attr_value == 'next') {
      $('#diplom_items').css({marginLeft: "0px"});
      $('#diplom_items').animate({marginLeft: - slideWidth +'px'}, 650);
      $(".diplom_item").eq(0).clone().appendTo("#diplom_items");
      $(".diplom_item").eq(0).remove();
    } else {
      $(".diplom_item").eq(-1).clone().prependTo("#diplom_items");
      $("#diplom_items").css({marginLeft: - slideWidth +'px'}); 
      $("#diplom_items").animate({marginLeft: "0px"}, 650);
      $(".diplom_item").eq(-1).remove();
    }
  });*/



  $('[data-carusel-item]').click(function(){
    var attr_value = $(this).data('carusel-item');
    var src = $(this).attr('src');
    $('#original_review').fadeIn();
    $('#original_review img').attr('src', src);
    
    console.log(src);
  });

  $('[data-more-btn]').click(function(){
    var attr_value = $(this).data('more-btn');
    $('[data-more-btn]').toggleClass('more_button_open');
    $('#' + attr_value + '').slideToggle('', function() {
      if ($(this).is(':visible')){
        $(this).css('display','inline');
        $('[data-more-btn]').html('Свернуть');
      }else {$('[data-more-btn]').html('Показать ещё');}
    });
  });

  $('#review_close').click(function(){
    $(this).parent().parent().fadeOut();
  });
  $('#original_review').click(function(){
    $(this).fadeOut();
  });
  

 
  check();
});

$(window).resize(function(){
  check();
});

jQuery(document).ready(function(){
  function htmSlider(){
    var slideWrap = jQuery('#diplom_items');
    var nextLink = jQuery('.btn-next');
    var prevLink = jQuery('.btn-prev');
    var playLink = jQuery('.auto');
    var is_animate = false;

    var slideWidth = jQuery('.diplom_item').outerWidth();
    var newLeftPos = slideWrap.position().left - slideWidth;
    console.log(slideWidth);
    nextLink.click(function(){
      if(!slideWrap.is(':animated')) {
        slideWrap.animate({left: newLeftPos}, 500, function(){
          slideWrap
            .find('.diplom_item:first')
            .appendTo(slideWrap)
            .parent()
            .css({'left': 0});
        });
      }
    });

    prevLink.click(function(){
      if(!slideWrap.is(':animated')) {
        slideWrap
          .css({'left': newLeftPos})
          .find('.diplom_item:last')
          .prependTo(slideWrap)
          .parent()
          .animate({left: 0}, 500);

      }
    });


    function autoplay(){
      if(!is_animate){
        is_animate = true;
        slideWrap.animate({left: newLeftPos}, 500, function(){
          slideWrap
            .find('.diplom_item:first')
            .appendTo(slideWrap)
            .parent()
            .css({'left': 0});
          is_animate = false;
        });

      }
    }
    timer = setInterval(autoplay, 10000);
  }

  if (jQuery('#diplom_items').length > 0) {
    htmSlider();
  }
});
