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
      background-color: #fff;

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
      background-color: #fff;
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
  <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter45633183 = new Ya.Metrika({ id:45633183, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/45633183" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</head>
<body>
  <noscript class="no_script_message">
    У вас отключен JavaScript. Сайт может отображаться некорректно. Рекомендуем включить JavaScript.
  </noscript>
  <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <div id="preloader"></div>
  <header class="header">
    <div class="page-wrapper header__inner">
      <div class="flex_co__betweeen header__items">
        <a href="<? bloginfo('url'); ?>" class="logo header__item"><logo class="logo__main">SVR</logo>
          <span class="logo__sub">Sound Laboratory</span>
        </a>
        <div class="header_contact header__item">
          <button class="button__header header__button">Задать вопрос</button>
        </div>
      </div>
      <!-- <nav class="nav">
        <ul class="nav__ul">
          <li class="nav__item"><a href="#" class="nav__link"></a></li>
        </ul>
      </nav> -->
    </div>
  </header>
  <main class="main" data-slidecontent="">
