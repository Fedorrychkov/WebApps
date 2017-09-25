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
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/mediastyle.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/popup.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/jquery-ui.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/fonts/font.css" />
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.ico" type="image/x-icon">
	<!--[if IE]>
		<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
    
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src='<?php bloginfo('template_url'); ?>/assets/js/jquery.cookie.js'></script>

</head>
<body>
<noscript class="no_script_message">
У вас отключен JavaScript. Сайт может отображаться некорректно. Рекомендуем включить JavaScript.
</noscript>
	<!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="mainhtml"><!-- mainhtmlmakes -->
    <!-- Header.php-->
        <header class="header">
    		<div class="page-wrapper">
    			<div class="inner">
    				<? if ( is_home() ){ ?> 
                        <div class="logo"><img class="img_all" src="<?php bloginfo('template_url'); ?>/assets/img/franchlogo-desktop.png"><img class="img_mob" src="<?php bloginfo('template_url'); ?>/assets/img/franchlogo-mob.png"></div>
                    <?} else {?>
                        <a href="<?echo bloginfo('url');?>"><div class="logo"><img class="img_all" src="<?php bloginfo('template_url'); ?>/assets/img/franchlogo-desktop.png"><img class="img_mob" src="<?php bloginfo('template_url'); ?>/assets/img/franchlogo-mob.png"></div></a>
                    <?} ?>
    				<div class="contact">
    					<p class="phone"><a href="tel:88003331963">8-800-333-19-63</a></p>
    					<p class="text">Бесплатно по России</p>
    				</div>
    				<div id="nav-toggle"><span></span></div>
    			</div>
    		</div>
    		<div class="menu">
    			<nav class="page-wrapper">
    				<ul>
                         <!--<?php //wp_nav_menu("main_menu"); ?>-->
    					<li><a href="<?php bloginfo('url'); ?>/franchising">Упаковка франшиз</a></li>
    					<li><a href="<?php bloginfo('url'); ?>/case">Кейсы</a></li>
    					<li><a href="<?php bloginfo('url'); ?>/news_post">Новости</a></li>
    					<li><a href="<?php bloginfo('url'); ?>/franshiza">Франшиза</a></li>
    					<li><a href="<?php bloginfo('url'); ?>/work">Карьера у нас</a></li>
    					<li><a href="<?php bloginfo('url'); ?>/contacts">Контакты</a></li>
    				</ul>
    			</nav>
    		</div>
    		<div class="menu-overlay"></div>

<!— Google Tag Manager —>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-N2WFR54');</script>
	<!— End Google Tag Manager —>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0 user-scalable=0">
	<!— Google Tag Manager —>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-N2WFR54');</script>
	<!— End Google Tag Manager —>

    	</header>
    <!--End Header.php-->