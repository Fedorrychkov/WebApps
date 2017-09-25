function SliderFranch(){
  var sliderWidth = $("#js-slider").outerWidth();
  var sliderSize = $(".js-slide_item").size();
  var sliderItemWidth = $(".js-slide_item").outerWidth();
  var heightItem = $(".js-slide_item").outerHeight();
  var sliderPrev = $('.js-slider-prev');
  var sliderNext = $('.js-slider-next');
  var slideNone = $('.js-slide_item').css('display','none');
  var slideIndex = sliderSize-sliderSize;
  
  //$("#js-slider").css('height', heightItem + 'px');
  $(slideNone).eq(slideIndex).css('display','block');


  $(sliderNext).click(function(){
    if (slideIndex<=sliderSize-2) {
      slideIndex +=1;
      $(slideNone).eq(slideIndex-1).hide();
      $(slideNone).eq(slideIndex).fadeIn('slow');
    }
    else{
      slideIndex = 0;
      $(slideNone).eq(sliderSize-1).hide();
      $(slideNone).eq(slideIndex).fadeIn('slow');             
    }
  });
  $(sliderPrev).click(function(){
    if (slideIndex>0) {
      slideIndex -=1;
      $(slideNone).eq(slideIndex+1).hide();
      $(slideNone).eq(slideIndex).fadeIn('slow');
    }
    else{
      slideIndex = sliderSize-1;
      $(slideNone).eq(sliderSize-sliderSize).hide();
      $(slideNone).eq(slideIndex).fadeIn('slow');             
    }
  });
}

function vacancies(){
  $('.more_vacancies_info').click(function(){
    $(this).parent().find('.vacancies_hidden').slideToggle();
   
    $(this).find('.arrow_top').toggleClass('active');
  });
}

function catch_height(){
  if ($(window).width() > 927) {
    var catch_height = $('.catch_item.item1').outerHeight();
    $('.catch_item.item1').css('margin-top', -catch_height/2 + 'px');

    var catch_height2 = $('.catch_item.item2').outerHeight();
    $('.catch_item.item2').css('margin-top', -catch_height2/2 + 'px');

    var catch_height3 = $('.catch_item.item3').outerHeight();
    $('.catch_item.item3').css('margin-top', -catch_height3/2 + 'px');
  }
  else{
    var catch_height_zero = 0;
    $('.catch_item.item1').css('margin-top', catch_height_zero + 'px');
    $('.catch_item.item2').css('margin-top', catch_height_zero + 'px');
    $('.catch_item.item3').css('margin-top', catch_height_zero + 'px');
  } 
}

$(document).ready(function(){
  SliderFranch();
  vacancies();
  catch_height();
});

$(window).resize(function(){
  catch_height();
});