<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Franchising Theme
 * @since Franchising Theme 1.0
 */

?>
<!-- saved from url=(0014)about:internet -->

<!DOCTYPE html>

<html lang="ru-RU">
<head>
  <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta http-equiv="imagetoolbar" content="no"/>
  <meta http-equiv="msthemecompatible" content="no"/>
  <meta name="format-detection" content="telephone=no"/>
  <meta name="format-detection" content="address=no"/>
  <meta http-equiv="cleartype" content="on"/>
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title><?php wp_title(); ?></title>
  
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/reset_styles.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/fonts/aria/ariafont.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
  
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <style type="text/css">
    #preloader {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 9999;
      overflow: hidden;
      display: block;
      background-color: #fdeff4;

      animation-name: preloadBlock;
      animation-duration: 1s;
      animation-delay: 1s;
      animation-timing-function: ease-in;
      animation-play-state: running;
      animation-fill-mode: forwards;
    }
    
    #preloader::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      display: block;
      background-color: #fdeff4;
      z-index: 10;
    }

    #preloader::after {
      content: "";
      position: absolute;
      top: 50%;
      left: 50%;
      width: 30px;
      height: 30px;
      border-radius: 50%;
      border: 2px solid #222;
      z-index: -1;
      transform: translate3d(-50%, -50%, 0);
      z-index: 9999;
      animation-name: preLoader;
      animation-duration: 1s;
      animation-delay: 0.5s;
      animation-timing-function: ease-in;
      animation-play-state: running;
      animation-fill-mode: forwards;
    }

    #preloader img {
      max-width: 250px;
      margin: 0 auto;
      position: absolute;
      top: 40%;
      left: 50%;
      transform: translate3d(-50%, -50%, 0);
      z-index: 9999;

      animation-name: preImage;
      animation-duration: 1s;
      animation-delay: 0.5s;
      animation-timing-function: ease-in;
      animation-play-state: running;
      animation-fill-mode: forwards;
    }

    @keyframes preImage {
      0 { transform: translate3d(-50%, -50%, 0); opacity: 1; }
      80% { opacity: 0; }
      100% { transform: translate3d(-50%, -200px, 0); z-index: -999; }    
    }

    @keyframes preLoader {
      0 { transform: translate3d(-50%, -50%, 0); opacity: 1; }
      80% {opacity: 0; }
      100% { transform: translate3d(-50%, 200px, 0); z-index: -999;}
    }

    @keyframes preloadBlock {
      0 { display: block; }
      100% { display: none; z-index: -10; }
    }

  </style>
  <!--[if IE]>
    <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>
<body>
  <noscript class="no_script_message">
    У вас отключен JavaScript. Сайт может отображаться некорректно. Рекомендуем включить JavaScript.
  </noscript>
  <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <div id="preloader">
    <a href="<? bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo/dark_logo.png"></a>
  </div>
  <header class="header">
    <div class="header__inner page-wrapper flex_co__between animations__fadetop">
      <div class="header__item header__left">
        <p class="contact__address">г. Нижний Новгород</p>
        <p class="contact__address">ул. Рождественская, 18 (2 эт.)</p>
        <ul class="socials header__socials">
          <li class="socials__item"><a href="#" class="waves-effect waves-light socials__link"></a></li>
          <li class="socials__item"><a href="#" class="waves-effect waves-light socials__link"></a></li>
          <li class="socials__item"><a href="#" class="waves-effect waves-light socials__link"></a></li>
          <li class="socials__item"><a href="#" class="waves-effect waves-light socials__link"></a></li>
        </ul>
      </div>
      <div class="header__item header__middle">
        <? if (!is_home()) {?>
          <a href="<? bloginfo('url') ?>" class="header__logo_link">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/logo/dark_logo.png" alt="" class="header__logo">
          </a>
        <?}else{?>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/logo/dark_logo.png" alt="" class="header__logo">
        <?}?>
      </div>
      <div class="header__item header__right">
        <div class="header__contact">
          <div class="contact">
            <div class="contact__phone"><a class="contact__phone_link" href="tel:88312351090"><i class="material-icons contact__phone_icon">phone</i>8 (831) 235 10 90</a><br>
            <a class="contact__phone_link" href="tel:88312351090"><i class="material-icons contact__phone_icon">phone</i>8 (831) 235 10 90</a></div>
            <div class="contact__button">
              <button data-popup="BUTTON_INVITE" class="waves-effect waves-light call_me_button">Записаться на примерку</button>
            </div>
          </div>
        </div>
      </div>
      <nav class="nav content__shadow">
        <div class="nav__icon" data-navtoggle="">
          <span class="nav__menu"></span>
        </div>
        <ul class="nav__items flex_co__between">
          <li class="nav__item"><a href="<? bloginfo('url')?>/dresses_collection/" class="nav__link">Свадебные платья</a>
            <ul class="nav__items_sub">
              <!-- <li class="nav__item_sub"><a href="#">subitem</a></li>
               -->
               <!-- <? get_template_part('loop/menu_items/marry_collections'); ?> -->
            </ul>
          </li>
          <li class="nav__item"><a href="<? bloginfo('url')?>/evening_outfits/" class="nav__link">Вечерние наряды</a></li>
          <li class="nav__item"><a href="<? bloginfo('url')?>/brides/" class="nav__link">Наши невесты</a></li>
          <li class="nav__item"><a href="<? bloginfo('url')?>/studio/" class="nav__link">Ателье</a></li>
          <li class="nav__item"><a href="<? bloginfo('url')?>/news/" class="nav__link">Новости и акции</a></li>
          <li class="nav__item"><a href="<? bloginfo('url')?>/photo_project/" class="nav__link">Фотопроекты</a></li>
          <li class="nav__item"><a href="<? bloginfo('url')?>/about/" class="nav__link">О компании</a></li>
          <li class="nav__item"><a href="<? bloginfo('url')?>/contacts/" class="nav__link">Контакты</a></li>
        </ul>
      </nav>
    </div>
  </header>
