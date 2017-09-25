<?
 /*
 Template Name: Contact Page
 Description: Является шаблоном для страницы Контактов. 
 */

get_header(); ?>
<main class="main content" data-slidecontent="">
  <div class="contact_page animations__fadebottom">
    <div class="contact_page__inner page-wrapper content__inner">
      <div class="contact_page__content flex_co__between_fstart">
        <div class="contact_page__item contact_page__info">
          <h2 class="content__title contact_page__title">Контакты</h2>
          <img class="contact_page__logo" src="<? bloginfo('template_url'); ?>/assets/img/logo/dark_logo.png">
          <h6 class="contact_page__logo_title"></h6>
          <address class="contact_page__contact">НИЖНИЙ НОВГОРОД, УЛ. РОЖДЕСТВЕНСКАЯ, Д. 18.</address>
          <span class="contact_page__contact">ГРАФИК РАБОТЫ: ПН-ВС С 10:00 ДО 19:00</span>
          <span class="contact_page__contact">ТЕЛ. <a href="tel:+79107928460" class="contact_page__link">+7 (910) 792-84-60</a>, <a href="tel:+78312351090" class="contact_page__link">+7 (831) 235-10-90</a></span>
          <span class="contact_page__contact">E-MAIL: <a href="mailto:domnevestnn@yandex.ru" class="contact_page__link">domnevestnn@yandex.ru</a></span>
          <a href="tel:+78312351090" class="button button__post contact_page__button">Позвоните нам прямо сейчас!</a>
        </div>
        <div id="map" class="contact_page__item contact_page__map">
          
        </div>
      </div>
    </div>
    <!-- <div class="contact_page__inner page-wrapper content__inner content">
      <h6 class="contact_page__promise"> <i class="material-icons">error_outline</i> Мы заботимся о Вас, поэтому по предварительному согласованию готовы Вас подождать <button data-popup="BUTTON_INVITE" class="button button__promise_invite waves-effect waves-light">Записаться на примерку</button></h6>
    </div> -->
  </div>
</main>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHsVkKlhoN6A6o3iluU-Spp9fdtbBB0nM&callback=initMap"></script>
<script type="text/javascript">
  var map;
  //var myLatLng = {lat: 56.3288868, lng: 43.9885218};
  function initMap() {
    var styleArray = [
    {
      featureType: "all",
      stylers: [
        { saturation: -80 }
      ]
    },{
      featureType: "road.arterial",
      elementType: "geometry",
      stylers: [
        { hue: "#00ffee" },
        { saturation: 50 }
      ]
    },{
      featureType: "poi.business",
      elementType: "labels",
      stylers: [
        { visibility: "off" }
      ]
    }
  ];

   map = new google.maps.Map(document.getElementById('map'), {
    name: "mymap",
      center: {lat: 56.3288868, lng: 43.9885218},
      zoom: 16,
      scrollwheel: false,
    });


  //var image = '<?php bloginfo('template_url'); ?>/assets/img/location.png';
  var marker = new google.maps.Marker({
      position: {lat: 56.3288838, lng: 43.9907158},
      map: map,
      title: ''
      //icon: image
  }); 


  var contentString = '';

  map.setOptions({styles: styleArray});
  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

    //infowindow.open(map, marker);
  }
</script>
<? get_footer(); ?>
