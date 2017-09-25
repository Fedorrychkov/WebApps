<div id="modal-overlay" class="modal-overlay"></div>    
<div id="PDF_download" class="popup_form">
  <div class="popup_close"><span>+</span></div>
  <div class="popup_body">
    <h5 class="popup_title">Скачайте <b>PDF-презентацию</b> франшизы</h5>
    <form id="form_3" method="POST" action="<?php bloginfo('template_url'); ?>/message_process.php" class="popup_form_body">
      <input type="hidden" id="franchise_count" name="franchise_count">
      <input type="hidden" id="franchise_sale" name="franchise_sale">
      <input type="hidden" id="franchise_virychka" name="franchise_virychka">
      <input type="hidden" id="franchise_org_spent" name="franchise_org_spent">
      <input type="hidden" id="franchise_fond_spent" name="franchise_fond_spent">
      <input type="hidden" id="franchise_nalog" name="franchise_nalog">
      <input type="hidden" id="franchise_profit" name="franchise_profit">
      <input type="hidden" id="franchise_work_period" name="franchise_work_period">
      <input type="hidden" name="FormFor" value="Скачать PDF-презентацию">
      <input type="hidden" name="WhereIsForm" value="Франшиза">
      <div class="popup_input_box">
        <label for="">Введите Ваше имя</label>
        <input type="text" placeholder="Иванов Иван" required="" onchange="checkChanges(this);" name="name">
      </div>
      <div class="popup_input_box">
        <label for="">Введите Ваш телефон</label>
        <input type="tel" placeholder="8 (800) 000-00-00" required="" onchange="checkChanges(this);" name="phone">
      </div>
      <div class="popup_input_box">
        <label for="">Введите Ваш e-mail</label>
        <input type="email" placeholder="mail@mail.ru" required="" onchange="checkChanges(this);" name="mail">
      </div>
      <div class="popup_button_box">
        <button data-form-submit="franchdev_form" type="submit" class="popup_submit button">Скачать</button>
      </div>
    </form>
    <div class="personal_access">
      <input data-personal="underform" type="checkbox" name="personal" id="personal" required="" checked="">
      <span>Нажимая на кнопку "Скачать", я даю согласие на обработку персональных данных и соглашаюсь с политикой конфиденциальности</span>
    </div>
    
  </div>
</div>

<div id="more_modal" class="popup_form">
  <div class="popup_close"><span>+</span></div>
  <div class="popup_body">
    <h5 class="popup_title">Отправьте заявку и узнайте подробнее</h5>
    <form class="popup_form_body" id="form_7" method="POST" action="<?php bloginfo('template_url'); ?>/message_process.php">
      <input type="hidden" name="FormFor" value="Узнать подробнее">
      <input type="hidden" name="WhereIsForm" value="Франшиза">
      <div class="popup_input_box">
        <label for="name">Введите Ваше имя</label>
        <input type="text" placeholder="Иванов Иван" required="" onchange="checkChanges(this);" name="name">
      </div>
      <div class="popup_input_box">
        <label for="phone">Введите Ваш телефон</label>
        <input type="tel" placeholder="8 (800) 000-00-00" required="" onchange="checkChanges(this);" name="phone">
      </div>
      <div class="popup_input_box">
        <label for="mail">Введите Ваш e-mail</label>
        <input type="email" placeholder="mail@mail.ru" required="" onchange="checkChanges(this);" name="mail">
      </div>
      <div class="popup_button_box">
        <button data-form-submit="franchdev_form" type="submit" class="popup_submit button">Узнать подробнее</button>
      </div>
    </form>
    <div class="personal_access">
      <input data-personal="underform" type="checkbox" name="personal" id="personal" required="" checked="">
      <span>Нажимая на кнопку "Узнать подробнее", я даю согласие на обработку персональных данных и соглашаюсь с политикой конфиденциальности</span>
    </div>
  </div>
</div>

<div id="resume_modal" class="popup_form">
  <div class="popup_close"><span>+</span></div>
  <div class="popup_body">
    <h5 class="popup_title">Отправьте отклик и мы Вам перезвоним</h5>
    <form class="popup_form_body" id="form_8" method="POST" action="<?php bloginfo('template_url'); ?>/message_process.php">
      <input type="hidden" name="FormFor" value="Отклик на вакансию">
      <input type="hidden" name="WhereIsForm" value="Карьера у нас">
      <input type="hidden" name="vocancy_title" id="vocancy_title_hidden">
      <div class="popup_input_box">
        <label for="name">Введите Ваше имя</label>
        <input type="text" placeholder="Иванов Иван" required="" onchange="checkChanges(this);" name="name">
      </div>
      <div class="popup_input_box">
        <label for="phone">Введите Ваш телефон</label>
        <input type="tel" placeholder="8 (800) 000-00-00" required="" onchange="checkChanges(this);" name="phone">
      </div>
      <div class="popup_input_box">
        <label for="mail">Введите Ваш e-mail</label>
        <input type="email" placeholder="mail@mail.ru" required="" onchange="checkChanges(this);"  name="mail">
      </div>
      <div class="popup_button_box">
        <button data-form-submit="work" type="submit" class="popup_submit button">Отправить</button>
      </div>
    </form>
    <div class="personal_access">
      <input data-personal="underform" type="checkbox" name="personal" id="personal" required="" checked="">
      <span>Нажимая на кнопку "Отправить", я даю согласие на обработку персональных данных и соглашаюсь с политикой конфиденциальности</span>
    </div>
  </div>
</div>