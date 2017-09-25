<div id="form_calculator" class="form_calculator"> <!-- interactive_calc -->
  <div class="page-wrapper">
    <div class="inner">
      <h2 class="pageTitle">Проверьте, можно ли увеличить вашу прибыль с помощью франчайзинга</h2>
      <h3 class="subTitle">И получите бесплатно рекомендации от экспертов по франчайзингу</h3>
      
      <div id="btn_0_section" class="first_quest calc_field">
        <form data-goal="order" method="POST"> 
          <div class="calc_names">
            <!--<h3 class="calc_title">1. Сфера деятельности</h3>-->
            <h4 class="calc_sub_title">1. Выберите сферу своего бизнеса</h4>
          </div>
          <div class="calc_checkbox">
            <div class="calc_check_item">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/calc_franchise/img_q_1.jpg" id="img_1" alt="Производство">
              <div class="calc_check_descr">
                <label>
                  <input value="Производство " name="BUSINESS_AREA" type="radio" id="input_1" aria-required="true" onchange="Selected(this)"></label>
                <p>Производство</p>
              </div>
            </div>

            <div class="calc_check_item">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/calc_franchise/img_q_2.jpg" id="img_2" alt="Торговля">
              <div class="calc_check_descr">
              <label>
                <input value="Торговля " name="BUSINESS_AREA" type="radio" id="input_2" aria-required="true" onchange="Selected(this)"></label>
                <p>Торговля</p>
              </div>
            </div>

            <div class="calc_check_item">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/calc_franchise/img_q_3.jpg" id="img_3" alt="Общепит">
              <div class="calc_check_descr">
              <label>
                <input value="Общепит " name="BUSINESS_AREA" type="radio" id="input_3" aria-required="true" onchange="Selected(this)"></label>
                <p>Общепит</p>
              </div>
            </div>

            <div class="calc_check_item">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/calc_franchise/img_q_4.jpg" id="img_4" alt="Услуги">
              <div class="calc_check_descr">
              <label>
                <input value="Услуги " name="BUSINESS_AREA" type="radio" id="input_4" aria-required="true" onchange="Selected(this)"></label>
                <p>Услуги</p>
              </div>
            </div>

            <div class="calc_check_item">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/calc_franchise/img_q_5.jpg" id="img_5" alt="IT-сфера">
              <div class="calc_check_descr">
              <label>
                <input value="IT-сфера " name="BUSINESS_AREA" type="radio" id="input_5" aria-required="true" onchange="Selected(this)"></label>
                <p>IT-сфера</p>
              </div>
            </div>

            <div class="calc_check_item">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/calc_franchise/img_q_6.jpg" id="img_6" alt="Другое">
              <div class="calc_check_descr">
                <label>
                  <input value="other" name="BUSINESS_AREA" type="radio" id="input_6" aria-required="true" onchange="Selected(this)">
                </label>
                <p>Другое</p>
              </div>
            </div>

          </div>
          <div id="check_hidden" class="calc_hidden">
            <div class="calc_hidden_left">
              <span>Введите описание своей сферы здесь:</span>
            </div>
            <div class="calc_hidden_right">
              <input type="text" name="other" id="hidden_other" onchange="getElementById('other_input_hidden').value = value;" placeholder="Например: Автомойка или Доставка Суши">
            </div>
          </div>
        </form>
        <button id="btn_1" data-btn-next="btn_1" class="button buttom_desktop">Далее</button>
        <button id="btn_1" data-btn-next="btn_1" class="button">Далее</button>
      </div>

      <div id="btn_1_section" class="second_quest calc_field">
            <div class="calc_range">
              <div class="calc_range_line">
                <div class="calc_body">
                  <div class="calc_names">
                    <!--<h3 class="calc_title">2. Возраст бизнеса</h3>-->
                    <h4 class="calc_sub_title">2. Сколько лет Ваша <br>компания на рынке?</h4>
                  </div>
                  <div class="calc_range_check">

                    <h6>(лет)</h6>
                    <div value="1" id="slider-year" class="calculate_slider_field"></div>
                  </div>
                  <div class="calc_range_descr calculate_range_descr_more_wrap">
                    <h4> <em>|</em> <span>1</span></h4>
                    <h4> <em>|</em> <span>2</span></h4>
                    <h4> <em>|</em> <span>3</span></h4>
                    <h4> <em>|</em> <span>4</span></h4>
                    <h4> <em>|</em> <span>5</span></h4>
                    <h4> <em>|</em> <span>6</span></h4>
                    <h4> <em>|</em> <span>7</span></h4>
                    <h4> <em>|</em> <span>8</span></h4>
                    <h4> <em>|</em> <span>9</span></h4>
                    <h4> <em>|</em> <span>>10</span></h4>
                  </div>
                </div>
                  <button id="btn_2" data-btn-next2="btn_2" class="button buttom_desktop">Далее</button>
              </div>

              <input type="text" name="YEAR" id="hidden_year" class="hidden" style="display: none;" value="1">
              <div class="question_descr">
                <div class="block_descr">
                  <output type="text" name="UF_CRM_YEAR" id="amount" onchange="calc(this.value);">2011</output>
                  <p>since</p>
                </div>
              </div>
            </div>
        <button id="btn_2" data-btn-next="btn_2" class="button">Далее</button>
      </div>

      <div id="btn_2_section" class="third_quest calc_field">
          
            <div class="calc_range">
              <div class="calc_range_line">
                <div class="calc_names">
                  <!--<h3 class="calc_title">3. Автономность бизнеса</h3>-->
                  <h4 class="calc_sub_title">3. Сколько часов ежедневно <br>Вы уделяете бизнесу?</h4>
                </div>
                <div class="calc_range_check">
                  <h6>(часов)</h6>
                  <div id="slider-time"></div>
                  <div id="slider-time-mobile"></div>
                </div>
                <div class="calc_range_descr calculate_range_descr_more_wrap">
                  <h4> <em>|</em> <span>0</span></h4>
                  <h4> <em>|</em> <span>3</span></h4>
                  <h4> <em>|</em> <span>6</span></h4>
                  <h4> <em>|</em> <span>9</span></h4>
                  <h4> <em>|</em> <span>12</span></h4>
                  <h4> <em>|</em> <span>15</span></h4>
                  <h4> <em>|</em> <span>18</span></h4>
                </div>
                  <button id="btn_3" data-btn-next2="btn_3" class="button buttom_desktop">Далее</button>
              </div>
              <div class="question_descr">
                <img id="img_time" src="<?php bloginfo('template_url'); ?>/assets/img/calc_franchise/time_9.png" alt="">
                <img id="img_time-mobile" src="<?php bloginfo('template_url'); ?>/assets/img/calc_franchise/time_tel_9.png" alt="">
                <!--<img id="img_time-mobile" src="img/time_tel_6.png" alt="">-->
            </div>
              <input type="text" name="TIME" id="hidden_time" class="hidden" style="display: none;" value="6">
            </div>
            <button id="btn_3" data-btn-next="btn_3" class="button">Далее</button>
            <!--<button id="btn3_3" data-btn-next="btn3_3" class="button button_under_image">Далее</button>-->
      </div>

      <div id="btn_3_section" class="four_quest calc_field">
            <div class="calc_range">
              <div class="calc_range_line">
                <div class="calc_names">
                  <!--<h3 class="calc_title">4. Прибыльность бизнеса</h3>-->
                  <h4 class="calc_sub_title">4. Средняя чистая прибыль <br>в месяц (тыс. руб.)</h4>
                </div>
                <div class="calc_range_check">
                  <h6>(тыс.руб)</h6>
                  <div id="slider-price"></div>
                  <!--<div id="slider-time-mobile"></div>-->
                </div>
                <div class="calc_range_descr calculate_range_descr_more_wrap "> <!-- .calc_range_descr_prewrap -->
                  <h4> <em>|</em> <span><100</span></h4>
                  <h4> <em>|</em> <span>150</span></h4>
                  <h4> <em>|</em> <span>250</span></h4>
                  <h4> <em>|</em> <span>350</span></h4>
                  <h4> <em>|</em> <span>500</span></h4>
                  <h4> <em>|</em> <span>750</span></h4>
                  <h4> <em>|</em> <span>1 000</span></h4>
                  <h4> <em>|</em> <span>1 500</span></h4>
                  <h4> <em>|</em> <span>2 000</span></h4>
                  <h4> <em>|</em> <span>3 000</span></h4>
                </div>
                <button id="btn_4" data-btn-next2="btn_4" class="button buttom_desktop">Далее</button>
              </div>
              <div class="question_descr">
                <p class="amount_price"><output type="text" id="amount_price" onchange="calc(this.value);">< 100 000</output><em class="Ruble">a</em></p>
                    <img id="img_price" src="<?php bloginfo('template_url'); ?>/assets/img/calc_franchise/macbook.png" alt="">
              </div>
              <input type="text" name="INCOME" id="hidden_price" class="hidden" style="display: none;" value="<100 000">
              
            </div>
        <button id="btn_4" data-btn-next="btn_4" class="button">Далее</button>
      </div>

      <div id="btn_4_section" class="five_quest calc_field">
            <div class="calc_range">
              <div class="calc_range_line">
                <div class="calc_names">
                  <!--<h3 class="calc_title">5. Динамика компании</h3>-->
                  <h4 class="calc_sub_title">5. Примерная динамика <br> прибыли за 2 года</h4>
                </div>
                <div class="calc_range_check">
                  <h6>(%)</h6>
                  <div class="spad_rost"><span>Спад</span><span>Кратный рост</span></div>
                  <div id="slider-stat"></div>
                  <!--<div id="slider-time-mobile"></div>-->
                </div>
                <div class="calc_range_descr calculate_range_descr_more_wrap "> <!--calc_range_descr_prewrap-->
                  <h4> <em>|</em> <span>-100</span></h4>
                  <h4> <em>|</em> <span>-75</span></h4>
                  <h4> <em>|</em> <span>-50</span></h4>
                  <h4> <em>|</em> <span>-25</span></h4>
                  <h4> <em>|</em> <span>0</span></h4>
                  <h4> <em>|</em> <span>25</span></h4>
                  <h4> <em>|</em> <span>50</span></h4>
                  <h4> <em>|</em> <span>75</span></h4>
                  <h4> <em>|</em> <span>100</span></h4>
                </div>
                  <button id="btn_5" data-btn-next2="btn_5" class="button buttom_desktop">Далее</button>
              </div>
              <div class="question_descr question_absolute">
                <img id="img_stat" src="<?php bloginfo('template_url'); ?>/assets/img/calc_franchise/stat_25.png" alt="">
              </div>
              <input type="text" name="STATISTIC" id="hidden_stat" style="display: none;" class="hidden" value="25%">
        <!--<button id="btn_5" data-btn-next="btn_5" class="button button_under_image">Далее</button>-->
        
        
            </div>
            <button id="btn_5" data-btn-next="btn_5" class="button">Далее</button>
      </div>

      <!--<div id="btn_5_section" class="six_quest calc_field">
        <h5 class="calc_big_title">Получите подробный анализ своего бизнеса на пригодность к масштабированию, <span>а так же план окупаемости своей будущей франшизы</span></h5>
        <div class="calc_wrapper">
          <div class="calc_form">
            <p class="calc_subtitle">Для получения рекомендации заполните форму</p>
            <form class="calc_form_body" method="POST">
              <div class="calc_form_inputBox">
                <label for="name">Введите Ваше имя</label>
                <input type="text" placeholder="Иванов Иван" name="name">
              </div>
              <div class="calc_form_inputBox">
                <label for="phone">Введите Ваш телефон</label>
                <input type="tel" placeholder="8 (800) 000-00-00" name="phone">
              </div>
              <div class="calc_form_inputBox">
                <label for="mail">Введите Ваш e-mail</label>
                <input type="email" placeholder="mail@mail.ru" name="mail">
              </div>
              <div class="calc_form_buttonBox">
                <button type="submit" class="calc_form_submit button">Отправить</button>
              </div>
            </form>
          </div>
          <div class="calc_image" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/img/upakovka/foot_img.png');">
          </div>
        </div>
      </div>-->

    </div>
  </div>
</div>
