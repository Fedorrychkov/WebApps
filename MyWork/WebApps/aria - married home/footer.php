<footer class="footer">
  <div class="footer__inner page-wrapper flex_co__between_fstart">
    <div class="footer_menu footer__item">
      <li class="footer_menu__item">
        <a href="<? bloginfo('url')?>/dresses_collection/" class="footer_menu__link">Свадебные платья</a>
      </li>
      <li class="footer_menu__item">
        <a href="<? bloginfo('url')?>/evening_outfits/" class="footer_menu__link">Вечерние наряды</a>
      </li>
      <li class="footer_menu__item">
        <a href="<? bloginfo('url')?>/brides/" class="footer_menu__link">Наши невесты</a>
      </li>
      <li class="footer_menu__item">
        <a href="<? bloginfo('url')?>/studio/" class="footer_menu__link">Ателье</a>
      </li>
      <li class="footer_menu__item">
        <a href="<? bloginfo('url')?>/photo_project/" class="footer_menu__link">Фотопроекты</a>
      </li>
      <li class="footer_menu__item">
        <a href="<? bloginfo('url')?>/about/" class="footer_menu__link">О компании</a>
      </li>
      <li class="footer_menu__item">
        <a href="<? bloginfo('url')?>/contacts/" class="footer_menu__link">Контакты</a>
      </li>    
    </div>
    <div class="footer_menu footer__item">
      <li class="footer_menu__item">
        <a href="<? bloginfo('url')?>/site_map/" class="footer_menu__link">Карта сайта</a>
      </li>
      <li class="footer_menu__item">
        <a href="<? bloginfo('url')?>/confidential/" class="footer_menu__link">Политика конфиденциальности</a>
      </li>
      <li class="footer_menu__item">
        <a href="<? bloginfo('url')?>/news/" class="footer_menu__link">Новости и акции</a>
      </li>
      <li class="footer_menu__item">
        <a href="<? bloginfo('url')?>/blog/" class="footer_menu__link">Блог</a>
      </li>    
    </div>
    <div class="footer__item"></div>
    <div class="footer__item">
      <div class="footer_contact">
        <div class="contact__phone footer_contact__phone">  
          <a class="contact__phone_link footer_contact__phone_link" href="tel:88312351090"><i class="material-icons contact__phone_icon footer_contact__phone_icon">phone</i>8 (831) 235 10 90</a><br>
          <a class="contact__phone_link footer_contact__phone_link" href="tel:88312351090"><i class="material-icons contact__phone_icon footer_contact__phone_icon">phone</i>8 (831) 235 10 90</a>
        </div>
        <div class="contact__button footer_contact__button">
          <button data-popup="BUTTON_INVITE" class="waves-effect waves-light call_me_button">Записаться на примерку</button>
        </div>
      </div>
      <div class="footer_socials">
        <ul class="socials flex_co__between">
          <li class="socials__item footer_socials__item"><a href="#" class="waves-effect waves-light socials__link footer_socials__link"></a></li>
          <li class="socials__item footer_socials__item"><a href="#" class="waves-effect waves-light socials__link footer_socials__link"></a></li>
          <li class="socials__item footer_socials__item"><a href="#" class="waves-effect waves-light socials__link footer_socials__link"></a></li>
          <li class="socials__item footer_socials__item"><a href="#" class="waves-effect waves-light socials__link footer_socials__link"></a></li>
          <li class="socials__item footer_socials__item"><a href="#" class="waves-effect waves-light socials__link footer_socials__link"></a></li>
        </ul>
      </div>
    </div>
    <div class="footer__copyright">
      © <? echo date('Y'); ?>, Aria &#8212 дом счастливых невест. Все права защищены
    </div>
  </div>
</footer>
<? get_template_part('templates/fixElements');?>
<div>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/materialize.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/dist/bundle.js"></script>
  </div>
  
<? wp_footer(); ?>

</body>
</html>
