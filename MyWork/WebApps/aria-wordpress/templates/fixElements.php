<div class="fix fix__invite_body animations__ui" data-sticky-element="" ><button data-popup="BUTTON_INVITE" class="button fix__invite_button waves-effect waves-light button__invite">Записаться на примерку</button></div>

<div class="popup_form" data-popupForm="BUTTON_INVITE">
  <div class="popup_form__header">
    <i class="material-icons" data-event="closePopup">close</i>
    <h6 class="popup_form__title">Записаться на примерку</h6>  
  </div>
  <form class="popup_form__form" method="POST">
     <div class="popup_form__inpbox input-field col s6">
        <input id="popup_fio" required="" type="text" class="validate popup_form__input">
        <label for="popup_fio">Представьтесь, пожалуйста</label>
      </div>
     <div class="popup_form__inpbox input-field col s6">
        <input id="popup_phone" required="" type="tel" class="validate popup_form__input">
        <label for="popup_phone">Телефон</label>
      </div>
     <div class="popup_form__inpbox input-field col s6">
        <input id="marry_date" type="text" class="validate popup_form__input">
        <label for="marry_date">Дата свадьбы</label>
      </div>
     <div class="popup_form__inpbox input-field col s6">
        <input id="primerka_date" required="" type="text" class="validate popup_form__input">
        <label for="primerka_date">Удобные даты и время для примерки</label>
      </div>
     <div class="popup_form__inpbox input-field col s6">
        <textarea id="dress_your" class="materialize-textarea popup_form__textarea"></textarea>
        <label for="dress_your">Ваши пожелания по платьям</label>
      </div>
      <div class="popup_form__submitbox">
        <button type="submit" class="popup_form__button button waves-effect waves-light button__invite">Записаться</button>
      </div>
  </form>
</div>

<div class="popup_overlay" data-overlay=""></div>

<i id="arrowto__top" class="arrowto__top material-icons">keyboard_arrow_up</i>
