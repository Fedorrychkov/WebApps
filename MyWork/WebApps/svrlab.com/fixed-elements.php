
<div class="popup_form" data-popupForm="BUTTON_ORDER">
  <div class="popup_form__header">
    <i class="material-icons" data-event="closePopup">close</i>
    <h6 class="popup_form__title">Связаться </h6>
  </div>
  <form id="popup_form" class="popup_form__form" method="POST" action="<?php bloginfo('template_url'); ?>/message_process.php">
    <input type="hidden" name="whatform">
     <div class="popup_form__inpbox input-field col s6">
        <input id="popup_fio" required="" name="name" type="text" class="validate popup_form__input">
        <label for="popup_fio">Представьтесь, пожалуйста*</label>
      </div>
     <div class="popup_form__inpbox input-field col s6">
        <input id="popup_phone" required="" name="phone" required type="tel" class="validate popup_form__input">
        <label for="popup_phone">Ваш телефон*</label>
      </div>
     <div class="popup_form__inpbox input-field col s6">
        <input id="marry_date" type="email" name="mail" required class="validate popup_form__input">
        <label for="marry_date">Ваша почта*</label>
      </div>
      <div class="popup_form__submitbox">
        <button type="submit" data-send="" class="popup_form__button button button__welcome waves-effect waves-light button__invite">Записаться</button>
      </div>
  </form>
  <div class="popup_form__inpbox popup_form__form popup_form__success">
    Спасибо за заявку! В ближайшее время с вами свяжутся.
  </div>
</div>

<div class="popup_overlay" data-overlay=""></div>

<i id="arrowto__top" class="arrowto__top material-icons">keyboard_arrow_up</i>
