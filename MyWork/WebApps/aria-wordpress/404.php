<?
 /*
 Template Name: 404
 */

get_header(); ?>
<main class="main content" data-slidecontent="">
  <div class="error_page animations__fadebottom">
    <div class="error_page__inner page-wrapper">
      <div class="error_page__content">
        <div class="error_page__error">404</div>
        <div class="error_page__error_text">Страница не найдена</div>
        <div class="error_page__menu">
          <p class="error_page__menu_title">Вам будет это интересно</p>
          <ul class="error_page__nav">
            <li class="error_page__nav_li">
              <a href="#" class="error_page__nav_a">Свадебные платья</a>
            </li>
            <li class="error_page__nav_li">
              <a href="#" class="error_page__nav_a">Фотопроекты</a>
            </li>
            <li class="error_page__nav_li">
              <a href="#" class="error_page__nav_a">Ателье</a>
            </li>
            <li class="error_page__nav_li">
              <a href="#" class="error_page__nav_a">Наши невесты</a>
            </li>
          </ul>
        </div>
      </div>
      <a href="<? bloginfo('url')?>" class="button button__invite error_page__button"><span class="flex_co__between">На главную <i class="material-icons">keyboard_arrow_right</i></span></a>
    </div>
  </div>
</main>
<? get_footer(); ?>
