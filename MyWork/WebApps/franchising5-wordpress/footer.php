<footer class="footer">
  <div class="page-wrapper">
    <div class="inner">
      <div class="anotherbg">
          <div class="links">
            <div class="leftlinks">
              <ul>
                <li><a href="<?php bloginfo('url'); ?>/franchising"">Упаковка франшиз</a></li>
                <li><a href="<?php bloginfo('url'); ?>/case">Кейсы</a></li>
                <li><a href="<?php bloginfo('url'); ?>/news_post">Новости</a></li>
                <li><a href="<?php bloginfo('url'); ?>/franshiza">Франшиза</a></li>
                <li><a href="<?php bloginfo('url'); ?>/work">Карьера у нас</a></li>
                <li><a href="<?php bloginfo('url'); ?>/contacts">Контакты</a></li>
              </ul>
            </div>
            <div class="rightlinks">
              <ul>
                <li><a href="<?php bloginfo('url'); ?>/about_company">О компании</a></li>
                <li><a href="<?php bloginfo('url'); ?>/company_blog">Блог</a></li>
                <li><a href="<?php bloginfo('url'); ?>/smi_about">СМИ о нас</a></li>
                <li><a href="<?php bloginfo('url'); ?>/confidential">Политика конфиденциальности</a></li>
                <li><a href="<?php bloginfo('url'); ?>/map_page">Карта сайта</a></li>
              </ul>
            </div>
          </div>
      </div>
      <div class="subscribe">
        <h6>E-mail рассылка:</h6>
        <p>Поделимся нашим опытом бесплатно</p>
        <form class="subform" id="form_10" method="POST" action="<?php bloginfo('template_url'); ?>/message_process.php">
          <input type="hidden" name="FormFor" value="Подписка на e-mail рассылку">
          <input type="hidden" name="WhereThisForm" value="Подписка на e-mail рассылку">
          <input type="email" name="mail" onchange="checkChanges(this);" id="subscribe-input" placeholder="Введите свой e-mail" required="">
          <div><button type="submit" data-form-submit="thanks_mail" id="subscribe-submit">Подписаться</button></div>
        </form>
      </div>
      <div class="f-contacts">
        <p class="phone"><a href="tel:88003331963">8-800-333-19-63</a></p>
        <p>Бесплатно по России</p>
        <ul>
          <p>Давайте дружить:</p>
          <li><a target="_blank" href="https://vk.com/franch5?from=quick_search" class="vk"></a></li>
          <li><a target="_blank" href="https://twitter.com/franch5_ru" class="twitter"></a></li>
          <li><a target="_blank" href="https://ru-ru.facebook.com/franch5.ru/" class="fb"></a></li>
          <li><a target="_blank" href="https://www.instagram.com/franch5_ru/" class="instagram"></a></li>
          <li><a target="_blank" href="https://t.me/franch5" class="telegram"></a></li>
          <li><a target="_blank" href="https://www.youtube.com/channel/UCfxhcVNxbjUmzzVhf_KhuJg" class="youtube"></a></li>
        </ul>
        <p class="copyright">© 2010-<? echo get_the_date('Y');?> 
ООО “Франчайзинг5”</p>
      </div>
    </div>
  </div>
</footer>
<!-- End footer.php-->

</div><!-- End mainhtmlmakes -->
<div id="btn_scl_top" class="btn_scl_top"></div>

<? include 'common/popup.php' ?>

<div id="original_review" class="original_review">
    <div class="review_body">
        <div id="review_close" class="close">+</div>
        <img src="">
    </div>
</div>

<div class="scripts">
  <script  src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script  type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/jquery-ui.min.js"></script>
  <script  type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>
  <script  type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/common.js"></script>
  <!--<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>-->
  <script type="text/javascript" src='<?php bloginfo('template_url'); ?>/assets/js/nprogress.js'></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/phonemask.js"></script>
  <script type="text/javascript" src='<?php bloginfo('template_url'); ?>/assets/js/message_process.js'></script>
  <script type="text/javascript" src='<?php bloginfo('template_url'); ?>/assets/js/jquery.cookie.js'></script>
  <script  type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/mainscripts.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/popup.js"></script>
  <?if ( is_home() || is_post_type_archive( 'contacts' )  ){ ?>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHsVkKlhoN6A6o3iluU-Spp9fdtbBB0nM&callback=initMap"></script>
      <script  type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/contacts.js"></script>
      <script type="text/javascript">
        var map;
        //var myLatLng = {lat: 55.7849606, lng: 49.1369373};
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
            center: {lat: 55.7723061, lng: 49.1168681},
            zoom: 15,
            scrollwheel: false,
          });


        var image = '<?php bloginfo('template_url'); ?>/assets/img/location.png';
        var marker = new google.maps.Marker({
            position: {lat: 55.7723061, lng: 49.1168681},
            map: map,
          title: '',
            icon: image
        }); 


        var contentString = 'г. Казань, ул. Салиха Сайдашева, д. 12';

        map.setOptions({styles: styleArray});
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

          //infowindow.open(map, marker);


        }
      </script>

  <?}?>
  <? if ( is_singular( 'case' ) ) {?>
    <script  type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/single_case.js"></script>
  <?}?>
  <? if (is_post_type_archive( 'case' ) || is_singular( 'case' ) || is_home() || is_page('franchising') ){ ?>
    <script  type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/archive_case.js"></script>
  <?}?>
  
  <? if ( is_page( 'franchising' ) ) {?>
      <script  type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/franchising.js"></script>
      <script  type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/interactive_calculator.js"></script>
  <?}?>
  
  <? if ( is_page( 'franshiza' ) ) {?>
    <script  type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/franshiza.js"></script>
  <?}?>
  <? if ( is_page( 'about_company' ) ) {?>
    <script type="text/javascript">
       function company_logos() {
        if ($(window).width() > 1080) {
          var i;
          for (i = 1; i < 89; i++){
            $('.logos_items').append('<div class="logo_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/clients/client_'+ i + '.png"></div>');
          }
        } else if($(window).width() < 1080) {
          var i;
          for (i = 1; i < 13; i++){
            $('.logos_items').append('<div class="logo_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/clients/client_'+ i + '.png"></div>');
          }
          $('.logos_items').append('<div id="company_logo_hidden" class="company_logo_hidden"></div>');
          for (i = 13; i < 89; i++){
            $('#company_logo_hidden').append('<div class="logo_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/clients/client_'+ i + '.png"></div>');
          }
            $('.logos_items').append('<div data-more-btn="company_logo_hidden" class="more_button">Показать ещё</div>');
        }
      }
      company_logos();
    </script>
    <script  type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/about_company.js"></script>
  <?}?>
  
  <? if ( is_page( 'work' ) ) {?>
    <script  type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/work.js"></script>
  <?}?>
</div>
<? wp_footer(); ?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter36383690 = new Ya.Metrika({
                    id:36383690,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/36383690" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>