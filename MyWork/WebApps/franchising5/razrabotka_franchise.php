<?php

 /*
 
 Template Name: Шаблон Разработки франшиз
 
 Description: 
 */


get_header(); ?>

<div class="content" id="developfranchise">
        
    <div id="top_head" class="top_head">
      <div class="page-wrapper">
        <div class="inner">
          <h1 class="pageTitle">Откройте филиал Франчайзинг5 <span>в своем регионе</span></h1>
          <p class="under_p">и зарабатывайте от <em>300 000 <span class="Ruble">a</span>/месяц</em></p>
          <button data-popup='PDF_download' class="download_button button" href="#">Скачать PDF-презентацию <span>франшизы</span></button>
        </div>
      </div>
    </div>
    <!-- Add in command -->
    <div id="add_employ" class="add_employ">
      <div class="page-wrapper">
        <div class="inner">
          <h2 class="pageTitle" style="margin-left: 0;">Присоединяйтесь к нашей команде</h2>
          <p>С Франчайзинг5 Вы откроете филиал компании по упаковке и продаже франшиз у себя в регионе и будете зарабатывать, помогая другим компаниям развиваться и масштабировать бизнес по франчайзингу. К Вам будут обращаться успешные предприниматели региона для упаковки франшизы и последующей продажи. Вам нужно только подписывать договора, а всю работу по упаковке франшизы мы возьмем на себя.</p>
        </div>
      </div>
    </div>

    <div id="simple_actions" class="simple_actions">
      <div class="page-wrapper">
        <div class="inner">
          <h3 class="pageTitle" style="margin-left: 0;">Простые действия, <span>которые приведут Вас к прибыли</span></h3>
          <div class="items">
            <div class="item">
              <div class="item_wrap">
                <div class="img"><img src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/consultation.png"></div>
                <div class="text">
                  <p>Вы получаете заявку от клиента и консультируете его</p>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="item_wrap">
                <div class="img"><img src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/documents.png"></div>
                <div class="text">
                  <p>Заключаете договор и получаете оплату</p>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="item_wrap">
                <div class="img"><img src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/box.png"></div>
                <div class="text">
                  <p>А мы берем всю работу по упаковке франшизы на себя</p>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="item_wrap">
                <div class="img"><img src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/options.png"></div>
                <div class="text">
                  <p>Вы продаете франшизу и получаете дополнительный доход от 80 000 рублей</p>
                </div>
              </div>
            </div>
          </div>
          <div class="money_check"> 
            <p>Средний чек с упаковки франшизы <span class="money_font">— <span id="average_check">213 000</span></span><span class="Ruble">a</span>.</p>
            <p>Средний чек с продажи франшизы <span class="money_font">— <span id="average_check_devFranch">200 000</span></span><span class="Ruble">a</span>.</p>
            <p>До половины этих денег <span class="money_font">— ваша прибыль</span>.</p>
          </div>

        </div>
      </div>
    </div>

    <div id="your_profit_line" class="your_profit_line">
      <div class="left"></div>
      <div class="right">
        <p>Ваша прибыль</p>
      </div>
    </div>

    <div id="calculate_your_profit" class="calculate_your_profit">
      <div class="page-wrapper">
        <div class="inner">
          <h3 class="pageTitle">Рассчитайте свой доход</h3>
          <p class="subTitle">Ваш бизнес будет приносить прибыль даже при одной сделке в месяц</p>
          
          <div class="calculate_franchdev">
            
            <div class="calculate_franchdev_box">

              <div class="calculate_box">
                <h4>Количество упакованных франшиз за месяц</h4>
                <div class="calculate_field">
                  <div class="calculate_range">
                    <div class="calculate_rage_line">
                      <div class="calculate_range_check">
                        <div value="1" id="slider-franchise-month" class="calculate_slider_field ui-slider"></div>
                      </div>
                      <div class="calculate_range_descr">
                        <h4> <em>|</em> <em>1 </em></h4>
                        <h4> <em>|</em> <em>2 </em></h4>
                        <h4> <em>|</em> <em>3 </em></h4>
                      </div>
                    </div>
                    <h6>(шт.)</h6>
                  </div>
                </div>
              </div>

              <div class="calculate_box">
                <h4>Количество проданных франшиз за месяц</h4>
                <div class="calculate_field">
                  <div class="calculate_range">
                    <div class="calculate_rage_line">
                      <div class="calculate_range_check">
                        <div value="1" id="slider-franchise-sale-month" class="calculate_slider_field ui-slider"></div>
                      </div>
                      <div class="calculate_range_descr">
                        <h4> <em>|</em> <em>1 </em></h4>
                        <h4> <em>|</em> <em>2 </em></h4>
                        <h4> <em>|</em> <em>3 </em></h4>
                        <h4> <em>|</em> <em>4 </em></h4>
                        <h4> <em>|</em> <em>5 </em></h4>
                      </div>
                    </div>
                    <h6>(шт.)</h6>
                  </div>
                </div>
              </div>

              <div class="calculate_box">
                <h4>Период работы Вашего филиала</h4>
                <div class="calculate_field">
                  <div class="calculate_range">
                    <div class="calculate_rage_line">
                      <div class="calculate_range_check">
                        <div value="1" id="slider-work-period" class="calculate_slider_field ui-slider"></div>
                      </div>
                       <div class="calculate_range_descr calculate_range_descr_more_wrap">
                        <h4> <em>|</em> <em>1 </em></h4>
                        <h4> <em>|</em> <em>2 </em></h4>
                        <h4> <em>|</em> <em>3 </em></h4>
                        <h4> <em>|</em> <em>4 </em></h4>
                        <h4> <em>|</em> <em>5 </em></h4>
                        <h4> <em>|</em> <em>6 </em></h4>
                        <h4> <em>|</em> <em>7 </em></h4>
                        <h4> <em>|</em> <em>8 </em></h4>
                        <h4> <em>|</em> <em>9 </em></h4>
                        <h4> <em>|</em> <em>10 </em></h4>
                        <h4> <em>|</em> <em>11 </em></h4>
                        <h4> <em>|</em> <em>12 </em></h4>
                      </div>
                    </div>
                    <h6>(мес.)</h6>
                  </div>
                </div>
              </div>

              <button data-popup='PDF_download' class="download_button button_purp desktop_visible" href="#">Скачать PDF-презентацию франшизы</button>
            </div>
            <div class="calculate_franchdev_text_box">
              <div class="calculate_franchdev_text_box__symbols">
                <p style="display: none;"><span class="textpole">Количество упакованных франшиз: </span><span class="wrapthisshit"><span class="symbolspole" id="col_upakov_franch">2</span></span></p>
                <p style="display: none;"><span class="textpole">Количество проданных франшиз: </span><span class="wrapthisshit"><span class="symbolspole" id="col_sale_franch">3</span></span></p>
                <p><span class="textpole">Выручка: </span><span class="wrapthisshit"><span class="symbolspole" id="viruchka">453 000</span><span class="Ruble">a</span></span></p>
                <p><span class="textpole">Средний чек с упаковки франшизы: </span><span class="wrapthisshit"><span id="middle_check_upakovka" class="symbolspole">213 000</span><span class="Ruble">a</span></span></p>
                <p><span class="textpole">Средний чек с продажи франшизы: </span><span class="wrapthisshit"><span id="middle_check_sale" class="symbolspole">200 000</span><span class="Ruble">a</span></span></p>
                <p><span class="textpole">Организационные затраты: </span><span class="wrapthisshit"><span class="symbolspole" id="org_zatrati">87 400</span><span class="Ruble">a</span></span></p>
                <p><span class="textpole">Фонд оплаты труда: </span><span class="wrapthisshit"><span class="symbolspole" id="fond_oplaty_truda">52 000</span><span class="Ruble">a</span></span></p>
                <p><span class="textpole">Налог (УСН 6%): </span><span class="wrapthisshit"><span class="symbolspole" id="nalog_usn">27 180</span><span class="Ruble">a</span></span></p>
                <p id="month_count" style="display: none;">1</p>
              </div>
              <div class="your_profit_calc_box">
                <p>Вы заработаете</p>
                <p><span><em id="your_profit_month">286 420</em><em class="Ruble">a</em></span> за <b><em id="month_count_number">1</em> <em id="month_standart">месяц</em></b></p>
              </div>
            </div>
            <button data-popup='PDF_download'  class="download_button button_purp smal_desk_visible" href="#">Скачать PDF-презентацию <span>франшизы</span></button>
          </div>
          
        </div>
      </div>
    </div>

    <div id="things" class="things">
      <div id="step1" class="page-wrapper">
        <div class="inner">
          <h3 class="pageTitle">Простая бизнес-модель</h3>
          <p class="subTitle">80% работы мы делаем за Вас</p>
          <div class="leftside" style="padding-top: 0;">
            <div class="text_side">
              <h4 class="subTitle">Подбор персонала</h4>
              <p>Наш HR-отдел подберет 20 кандидатов на позицию менеджера по продажам. Из этих 20 человек останутся только те, кто по-настоящему подходит к работе в Вашей компании. Их обучение и последующая аттестация — наша работа</p>
              <button data-popup='more_modal' class="button_purp">Узнать подробнее</button>
            </div>
            <div class="image_side">
              <img class="desktop_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/model1.png">
              <img class="smal_desk_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/model1_tab.png">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="things" class="things notoppadding">
      <div id="step2" class="page-wrapper">
        <div class="inner">
          <div class="rightside">
            <div class="image_side">
              <img class="desktop_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/model2.png">
              <img class="smal_desk_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/model2_tab.png">
            </div>
            <div class="text_side">
              <h4 class="subTitle">Техническое оснащение офиса</h4>
              <p class="subcheck" style="margin-top: 0;">Вся техническая часть Вашего запуска лежит на наших плечах:</p>
              <p class="check_mark">внедрение самого высокотехнологичного инструмента для автоматизации бизнеса — CRM-системы</p>
              <p class="check_mark">подключение к корпоративной мобильной связи</p>
              <p class="subcheck">Забудьте, что значит роуминг по самому выгодному и эксклюзивному тарифу</p>
              <p class="check_mark">предоставление уникального приложения для записи звонков</p>
              <p class="subcheck">Будьте на 100% уверены, что все детали разговора будут у Вас под рукой</p>
              <p class="check_mark">создание рекламных кампаний в Яндекс.Директ и Google Adwords</p>
              <p class="check_mark">создание landing page — Ваша визитная карточка в сети интернет</p>
              <p class="check_mark">размещение информации и контактных данных о Вашем офисе на нашем сайте и социальных сетях</p>
              <button data-popup='more_modal' class="button_purp">Узнать подробнее</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="things" class="things notoppadding">
      <div id="step3" class="page-wrapper">
        <div class="inner">
          <div class="leftside">
            <div class="text_side">
              <h4 class="subTitle">Реклама и маркетинг</h4>
              <p class="subcheck" style="margin: 0; line-height: 1.4;">Наш отдел маркетинга будет работать над привлечением клиентов в Ваш бизнес.</p>
              <p class="subcheck" style="margin: 0 0 10px; line-height: 1.4;"> В Вашем распоряжении будет 7 инструментов привлечения клиентов: </p>
              <p class="check_mark">100 заявок от ведущих предпринимателей из Вашего города, которые хотят упаковать свой бизнес во франшизу</p>
              <p class="subcheck">Найти и подготовить таких людей для Вас — наша задача</p>
              <p class="check_mark">контекстная реклама — как способ №1 по привлечению клиентов из интернета</p>
              <p class="check_mark">email-рассылки</p>
              <p class="subcheck">Кому, как и когда отправлять — Франчайзинг5 подготовит письма специально для вас</p>
              <p class="check_mark">холодные звонки</p>
              <p class="subcheck">Уникальный скрипт позволяет заинтересовать 20% людей, с которыми до этого у Вас не было контакта</p>
              <p class="check_mark">бизнес-конференции и форумы, опыт проведения которых мы Вам передадим</p>
              <p class="check_mark">социальные сети</p>
              <p class="subcheck">Используйте все мощности сарафанного радио 21 века</p>
              <p class="check_mark">печатные и электронные маркетинговые материалы, чтобы все самое важное всегда было у Ваших клиентов под рукой</p>
              <button data-popup='more_modal' class="button_purp">Узнать подробнее</button>
            </div>
            <div class="image_side">
              <img class="desktop_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/model3.png">
              <img class="smal_desk_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/model3_tab.png">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="things" class="things notoppadding">
      <div id="step4" class="page-wrapper">
        <div class="inner">
          <div class="rightside">
            <div class="image_side">
              <img class="desktop_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/model4.png">
              <img class="smal_desk_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/model4_tab.png">
            </div>
            <div class="text_side text_wrapp_margin_left">
              <h4 class="subTitle">Аналитика</h4>
              <p>Получайте данные о своем бизнесе в реальном времени, а так же планируйте результаты на будущее с помощью нашего отдела аналитики</p>
              <button data-popup='more_modal' class="button_purp">Узнать подробнее</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="things" class="things notoppadding">
      <div id="step5" class="page-wrapper">
        <div class="inner">
          <div class="leftside">
            <div class="text_side">
              <h4 class="subTitle">Реклама и маркетинг</h4>
              <p class="subcheck" style="margin: 0; line-height: 1.4;">Мы знаем все тонкости в нашем бизнесе и не дадим совершить Вам даже 1 ошибку.</p>
              <p class="subcheck" style="margin: 0 0 10px; line-height: 1.4;"> Поддержка включает в себя:</p>
              <p class="check_mark">помощь в заключении любых договоров</p>
              <p class="check_mark">консультации по ведению бухгалтерии и отчетности</p>
              <button data-popup='more_modal' class="button_purp">Узнать подробнее</button>
            </div>
            <div class="image_side image_side_wrap imagewrap">
              <img class="desktop_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/model5.png">
              <img class="smal_desk_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/model5_tab.png">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="formBlock" class="formBlock" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/main_page/brilliant.png);">
      <div class="page-wrapper">
        <div class="inner">
          <div class="styleForm styleForm1">
            <h5>В некоторых городах мы открываем только одно представительство</h5>
            <div class="form_body">
              <div class="form_title">
                <h6><span>Проверьте, не занят ли Ваш город </span> <br/></h6>
              </div>
              <form id="form_4" method="POST" action="<?php bloginfo('template_url'); ?>/message_process.php">
                <input type="hidden" name="FormFor" value="Проверка города">
              	<input type="hidden" name="WhereIsForm" value="Франшиза">
                <div class="inputBox">
                  <label for="city">Введите Ваш город</label>
                  <input type="text" name="city" id="city" required="" onchange="checkChanges(this);" placeholder="Москва">
                </div>

                <div class="inputBox">
                  <label for="phone">Введите Ваш телефон</label>
                  <input type="tel" name="phone" id="phone" required="" onchange="checkChanges(this);" placeholder="8 (800) 000-00-00">
                </div>
                <div class="submitBox">
                  <button type="submit" data-form-submit="franchdev_form" class="button">Проверить город</button>
                </div>
              </form>
            </div>
            <div class="personal_access">
              <input type="checkbox" data-personal="underform" name="personal" id="personal" required="" checked="">
              <span>Нажимая на кнопку "Проверить город", я даю согласие на обработку персональных данных и соглашаюсь с политикой конфиденциальности</span>
            </div>
            
          </div>
        </div>
      </div>
    </div>


    <div id="open_office" class="open_office">
      <div class="page-wrapper">
        <div class="inner">
          <h3 class="pageTitle">Откройте свой филиал Франчайзинг5 за 21 день</h3>

          <div class="items">

            <div class="item visible_small_desk_flex">
              <div class="text"></div>
              <div class="metrics">
                <h4><em>|</em><span>0</span></h4>
                <h4><em>|</em><span>1</span></h4>
                <h4><em>|</em><span>2</span></h4>
                <h4><em>|</em><span>3</span></h4>
                <h4><em>|</em><span>4</span></h4>
                <h4><em>|</em><span>5</span></h4>
                <h4><em>|</em><span>6</span></h4>
                <h4><em>|</em><span>7</span></h4>
                <h4><em>|</em><span>8</span></h4>
                <h4><em>|</em><span>9</span></h4>
                <h4><em>|</em><span>10</span></h4>
                <h4><em>|</em><span>11</span></h4>
                <h4><em>|</em><span>12</span></h4>
                <h4><em>|</em><span>13</span></h4>
                <h4><em>|</em><span>14</span></h4>
                <h4><em>|</em><span>15</span></h4>
                <h4><em>|</em><span>16</span></h4>
                <h4><em>|</em><span>17</span></h4>
                <h4><em>|</em><span>18</span></h4>
                <h4><em>|</em><span>19</span></h4>
                <h4><em>|</em><span>20</span></h4>
                <h4><em>|</em><span>21</span></h4>
              </div>
            </div>

            <div class="item">
              <div class="text"><p>Заключение договора франчайзинга</p></div>
              <div class="line_block">
                <div class="line">
                  <div class="progress_line" data-width="0"></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="text"><p>Обучение и аттестация</p></div>
              <div class="line_block">
                <p>Обучение и аттестация франчайзи</p>
                <div class="line">
                  <div class="progress_line" data-width="1"></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="text"><p>Регистрация</p></div>
              <div class="line_block">
                <p>Подача документов на регистрацию юрлица</p>
                <div class="line">
                  <div class="progress_line" data-width="1"></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="text"><p>Поиск помещений</p></div>
              <div class="line_block">
                <p>Поиск, согласование и подготовка помещения</p>
                <div class="line">
                  <div class="progress_line" data-width="3"></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="text"><p>Закупка оборудования</p></div>
              <div class="line_block">
                <p>Установка телефонии и интернета</p>
                <div class="line">
                  <div class="progress_line" data-width="6"></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="text"><p>Запуск маркетинговой кампании</p></div>
              <div class="line_block">
                <p>Настройка и обучение работы в системе</p>
                <div class="line">
                  <div class="progress_line" data-width="11"></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="text"><p>Интернет продвижение</p></div>
              <div class="line_block">
                <p>Запуск рекламной кампании, подготовка маркетинговых материалов</p>
                <div class="line">
                  <div class="progress_line" data-width="10"></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="text"><p>Подключение CRM системы</p></div>
              <div class="line_block">
                <p>Настройка и обучение работы в системе</p>
                <div class="line">
                  <div class="progress_line" data-width="7"></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="text"><p>Запуск интернет продвижения</p></div>
              <div class="line_block">
                <p>Обучение и аттестация у франчайзера</p>
                <div class="line">
                  <div class="progress_line" data-width="10"></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="text"><p>Перевод в сопровождение</p></div>
              <div class="line_block">
                <p>Подпись части актов, доверенности</p>
                <div class="line">
                  <div class="progress_line" data-width="20"></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="text"><p>Торжественное открытие</p></div>
              <div class="line_block">
                <p>Начало продаж</p>
                <div class="line">
                  <div class="progress_line" data-width="21"></div>
                </div>
              </div>
            </div>

            <div class="item visible_desk_flex">
              <div class="text"></div>
              <div class="metrics">
                <h4><em>|</em><span>0</span></h4>
                <h4><em>|</em><span>1</span></h4>
                <h4><em>|</em><span>2</span></h4>
                <h4><em>|</em><span>3</span></h4>
                <h4><em>|</em><span>4</span></h4>
                <h4><em>|</em><span>5</span></h4>
                <h4><em>|</em><span>6</span></h4>
                <h4><em>|</em><span>7</span></h4>
                <h4><em>|</em><span>8</span></h4>
                <h4><em>|</em><span>9</span></h4>
                <h4><em>|</em><span>10</span></h4>
                <h4><em>|</em><span>11</span></h4>
                <h4><em>|</em><span>12</span></h4>
                <h4><em>|</em><span>13</span></h4>
                <h4><em>|</em><span>14</span></h4>
                <h4><em>|</em><span>15</span></h4>
                <h4><em>|</em><span>16</span></h4>
                <h4><em>|</em><span>17</span></h4>
                <h4><em>|</em><span>18</span></h4>
                <h4><em>|</em><span>19</span></h4>
                <h4><em>|</em><span>20</span></h4>
                <h4><em>|</em><span>21</span></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="companyes_right" class="companyes_right">
      <div class="page-wrapper">
        <div class="inner">
          <div class="left_side">
            <h3 class="pageTitle">122 000 компаний готовы к упаковке франшизы</h3>
            <p class="text">Ежегодный рост франчайзинга составляет 25%. Вам нужно только занять нишу в своем регионе, а наш отдел сопровождения из 20 человек будет помогать Вам в любых вопросах</p>
          </div>
          <div class="right_side">
            <img class="desktop_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/model6.png">
            <img class="smal_desk_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/model6_tab.png">
          </div>
        </div>
      </div>
    </div>




    <div id="formBlock" class="formBlock" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/main_page/brilliant.png);">
      <div class="page-wrapper">
        <div class="inner">
          <div class="styleForm styleForm2">
            <h5 class="form_title_45">Узнайте точную стоимость франшизы для своего города</h5>
            <div class="form_body">
              <div class="form_title novisible_on_mobile">
                <h6><br></h6>
              </div>
              <form id="form_5" method="POST" action="<?php bloginfo('template_url'); ?>/message_process.php">
                <input type="hidden" name="FormFor" value="Узнать точную стоимость франшизы для своего города">
                <input type="hidden" name="WhereIsForm" value="Франшиза">
                <div class="inputBox">
                  <label for="name">Введите Ваш город</label>
                  <input type="text" name="city" required="" onchange="checkChanges(this);" id="city" placeholder="Москва">
                </div>

                <div class="inputBox">
                  <label for="phone">Введите Ваш телефон</label>
                  <input type="tel" name="phone" required="" onchange="checkChanges(this);" id="phone" placeholder="8 (800) 000-00-00">
                </div>
                <div class="submitBox">
                  <button type="submit" data-form-submit="franchdev_form" class="button">Узнать стоимость</button>
                </div>
              </form>
            </div>
            <div class="personal_access">
              <input type="checkbox" data-personal="underform" name="personal" id="personal" required="" checked="">
              <span>Нажимая на кнопку "Узнать стоимость", я даю согласие на обработку персональных данных и соглашаюсь с политикой конфиденциальности</span>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <div id="reviews_partners" class="reviews_partners">
      <div class="page-wrapper">
        <div class="inner">
          <h3 class="pageTitle">Прочитайте отзывы успешных партнеров</h3>
          <div class="items">

            <div class="item"> <!-- item -->
              <div class="image">
                <img class="desktop_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/profile1.png">
                <img class="smal_desk_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/profile1_tab.png">
              </div>
              <div class="text_box">
                <h5 class="review_title">Дополнительные <span style="white-space: nowrap;">9 000</span> евро совсем не лишние</h5>
                <p class="sub_texts"><strong>Открытие филиала: </strong><span>август 2014</span></p>
                <p class="sub_texts"><strong>Чистая прибыль в месяц: </strong><span>530 000<span class="Ruble">a</span></span></p>
                <div class="text">
                  <p> Наше сотрудничество с компанией Франчайзинг5 я начал в качестве клиента, занимаюсь развитием собственной франчайзинговой сети и «упаковал» свой бизнес. Качеством работы остался доволен. Потом узнал, что ребята тоже развиваются по франчайзингу и решил, что это именно то, чего мне не доставало. На сегодняшний день являюсь представителем сети Франчайзинг5 в г. Рига и дополнительные 9 тыс. евро совсем не лишние. Рекомендую.</p>
                </div>
                <div class="reviews_profile">
                  <p class="name">Александр Обулевич</p>
                  <p class="location">Латвия, г. Рига, Puskina iela, д. 10</p>
                </div>
              </div>
            </div> <!-- ///item -->

            <div class="item"> <!-- item -->
              <div class="image">
                <img class="desktop_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/profile3.png">
                <img class="smal_desk_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/profile3_tab.png">
              </div>
              <div class="text_box">
                <h5 class="review_title">Мы вместе делаем очень нужное дело</h5>
                <p class="sub_texts"><strong>Открытие филиала: </strong><span>июль 2015</span></p>
                <p class="sub_texts"><strong>Чистая прибыль в месяц: </strong><span>330 000<span class="Ruble">a</span></span></p>
                <div class="text">
                  <p> Очень рада сотрудничеству с компанией Франчайзинг5, мы вместе делаем очень нужное дело в нужное время, помогая себе и другим развиваться и становиться известными не только у себя в регионе, но и по России и СНГ.</p>
                </div>
                <div class="reviews_profile">
                  <p class="name">Наталья Кальмина</p>
                  <p class="location">г. Новосибирск, ул. Ядринцевская, д. 53/1, офис 603</p>
                </div>
              </div>
            </div> <!-- ///item -->
            <div class="item"> <!-- item -->
              <div class="image">
                <img class="desktop_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/profile4.png">
                <img class="smal_desk_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/profile4_tab.png">
              </div>
              <div class="text_box">
                <h5 class="review_title">До знакомства с Франчайзинг5 я ничего не знала о франчайзинге</h5>
                <p class="sub_texts"><strong>Открытие филиала: </strong><span>декабрь 2015</span></p>
                <p class="sub_texts"><strong>Чистая прибыль в месяц: </strong><span>230 000<span class="Ruble">a</span></span></p>
                <div class="text">
                  <p> Наше сотрудничество с компанией Франчайзинг5 началось в декабре 2015 года. До этого момента у меня не было опыта работы по франшизе и представления о том, что представляет собой рынок франчайзинга в России в целом. В течение года я целенаправленно выбирала франшизу, которая не только приносит прибыль, но и дарит удовольствие от работы. 
                  Мой выбор остановился на Франчайзинг5. За время нашего плодотворного сотрудничества, я стала специалистом в сфере франчайзинга, научившись эффективно проводить встречи на самом высоком уровне и заключать договоры с шестизначными числами.</p>
                  <div class="spoiler_text">
                    <p class="spoiler_p">
                     Спустя полгода от начала работы, я могу назвать себя профессионалом своего дела. Спасибо Франчайзинг5 за успешное партнерство!
                    </p>
                    <a class="open_spoiler">Читать далее</a>
                  </div>
                </div>

                <div class="reviews_profile">
                  <p class="name">Наталья Татаркина</p>
                  <p class="location">г. Ижевск, ул. Ворошилова, д. 109а</p>
                </div>
              </div>
            </div> <!-- ///item -->
            <div class="item"> <!-- item -->
              <div class="image">
                <img class="desktop_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/profile5.png">
                <img class="smal_desk_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/profile5_tab.png">
              </div>
              <div class="text_box">
                <h5 class="review_title">За время нашего сотрудничества мы стали настоящими экспертами в области франчайзинга</h5>
                <p class="sub_texts"><strong>Открытие филиала: </strong><span>август 2015</span></p>
                <p class="sub_texts"><strong>Чистая прибыль в месяц: </strong><span>320 000<span class="Ruble">a</span></span></p>
                <div class="text">
                  <p> Благодарим головной офис компании Франчайзинг5 от всего коллектива Франчайзинг5 Пермь за максимальную поддержку и регулярное сопровождение. В любой момент можно позвонить и проконсультироваться по возникшим вопросам. За работу профессионалов, команду сплоченных и целеустремленных людей. За время нашего сотрудничества, мы стали настоящими экспертами в области франчайзинга, научились наблюдать специфику рынка и видеть любой бизнес изнутри. Приятно быть частью огромной семьи. Спасибо Ф5 за возможность развиваться каждый день!</p>
                </div>
                <div class="reviews_profile">
                  <p class="name">Алексей Мертехин</p>
                  <p class="location">г. Пермь, ул. Газеты Звезда, д. 13</p>
                </div>
              </div>
            </div> <!-- ///item -->
            <div class="item"> <!-- item -->
              <div class="image">
                <img class="desktop_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/profile6.png">
                <img class="smal_desk_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/profile6_tab.png">
              </div>
              <div class="text_box">
                <h5 class="review_title">Самое важное – возможные перспективы франчайзинга в России</h5>
                <p class="sub_texts"><strong>Открытие филиала: </strong><span>декабрь 2015</span></p>
                <p class="sub_texts"><strong>Чистая прибыль в месяц: </strong><span>244 400 <span class="Ruble">a</span></span></p>
                <div class="text">
                  <p> Франчайзинг – это интереснейшее явление на просторах бизнеса в России. Я давно начал интересоваться этой темой, изучал рынок, ездил на бизнес-форумы и семинары. Сперва я раздумывал купить франшизу в сфере общепита или бизнес, завязанный на услугах населению. Но, копав все больше, я вышел на Франчайзинг5. Приехав к ним в офис, я представить не мог, каких масштабов уже достиг франчайзинг в России и какие перспективы возможны для развития. Я понял, что это мое. Сейчас я активно работаю с предпринимателями своего региона, развивая бизнес и помогая, в том числе простым людям, получить доступный бизнес.</p>
                </div>
                <div class="reviews_profile">
                  <p class="name">Антон Сенев</p>
                  <p class="location">г. Санкт-Петербург</p>
                </div>
              </div>
            </div> <!-- ///item -->
            <div class="item"> <!-- item -->
              <div class="image">
                <img class="desktop_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/profile7.png">
                <img class="smal_desk_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/profile7_tab.png">
              </div>
              <div class="text_box">
                <h5 class="review_title">Я пересмотрел свои взгляды на франчайзинг в России</h5>
                <p class="sub_texts"><strong>Открытие филиала: </strong><span>октябрь 2016</span></p>
                <p class="sub_texts"><strong>Чистая прибыль в месяц: </strong><span>101 600 <span class="Ruble">a</span></span></p>
                <div class="text">
                  <p> Мое отношение к франчайзингу всегда складывалось скептически. Я думал, что это какая-то бутафория, созданная для того, чтобы вытягивать деньги из простых людей. Но мой друг, который приобрел франшизу одной из юридических компаний, перевернул мои взгляды. Являясь по природе очень любопытным человеком, я начал изучать рынок франчайзинга. На одном из бизнес-форумов я встретил представителей компании Франчайзинг5. Так начался новый виток в моей жизни – я превратился с предпринимателя, который помогает другим предпринимателям. И я не только зарабатываю, но и несу действительно благую цель.</p>
                </div>
                <div class="reviews_profile">
                  <p class="name">Денис Васильев</p>
                  <p class="location">г. Санкт-Петербург, Набережная Обводного канала, д. 92</p>
                </div>
              </div>
            </div> <!-- ///item -->
            <div class="item"> <!-- item -->
              <div class="image">
                <img class="desktop_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/profile8.png">
                <img class="smal_desk_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/profile8_tab.png">
              </div>
              <div class="text_box">
                <h5 class="review_title">Работа в команде – лучший выбор каждого предпринимателя</h5>
                <p class="sub_texts"><strong>Открытие филиала: </strong><span>июль 2016</span></p>
                <p class="sub_texts"><strong>Чистая прибыль в месяц: </strong><span>149 200 <span class="Ruble">a</span></span></p>
                <div class="text">
                  <p> Выражаю благодарность компании Франчайзинг5 за то, что помогли пересмотреть мои взгляды на бизнес. Я всегда был предпринимателем, который работает один, партнерство или друзья – не позволительная вещь. Ведь в моем понимании, в бизнесе нет дружбы. Для себя начал рассматривать новое направление, чтобы диверсифицировать основной бизнес. Думал и про производство, уже хотел закупать оборудование. Чисто случайно вышел на Франчайзинг5. 
                  Переговорив с менеджером, у меня внутри зажегся огонек любопытства. </p>
                  <div class="spoiler_text">
                    <p class="spoiler_p">
                    А когда у меня возникает это чувство, я знаю, что почуял правильный путь. Буквально через неделю я приехал в Казань, чтобы познакомиться поближе. Мне рассказали все принципы работы и предоставили большой объем информации. Сейчас, спустя полгода работы, я понял, на сколько, которые при случае помогут и подскажут – лучший выбор разумного человека.
                    </p>
                    <a class="open_spoiler">Читать далее</a>
                  </div>
                </div>
                <div class="reviews_profile">
                  <p class="name">Денис Жданов</p>
                  <p class="location">г. Тюмень, ул. Харьковская, д. 77, каб. 311</p>
                </div>
              </div>
            </div> <!-- ///item -->
            <div class="item"> <!-- item -->
              <div class="image">
                <img class="desktop_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/profile9.png">
                <img class="smal_desk_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/profile9_tab.png">
              </div>
              <div class="text_box">
                <h5 class="review_title">Не только новые знания о франчайзинге, но и прибыльный бизнес</h5>
                <p class="sub_texts"><strong>Открытие филиала: </strong><span>июль 2016</span></p>
                <p class="sub_texts"><strong>Чистая прибыль в месяц: </strong><span>122 000 <span class="Ruble">a</span></span></p>
                <div class="text">
                  <p> Я начинал наше сотрудничество с Франчайзинг5 в качестве клиента, с целью развить собственную франчайзинговую сеть. Упаковал свой бизнес и остался очень доволен качеством работы. Во время упаковки, стал еще больше вникать в сам процесс создания франшиз. Это стало очень мне интересно. Чтобы в дальнейшем качественно развивать свою франчайзинговую сеть, я решил влиться в команду Франчайзинг5 в качестве партнера. В итоге я получил не только отличные знания, но и хороший дополнительный заработок к своему основному направлению.</p>
                </div>
                <div class="reviews_profile">
                  <p class="name">Николай Алеев</p>
                  <p class="location">г. Санкт-Петербург, ул. Кантемировская д. 37А, офис 419</p>
                </div>
              </div>
            </div> <!-- ///item -->
            <div class="item"> <!-- item -->
              <div class="image">
                <img class="desktop_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/profile10.png">
                <img class="smal_desk_visible" src="<?php bloginfo('template_url'); ?>/assets/img/franch_dev/profile10_tab.png">
              </div>
              <div class="text_box">
                <h5 class="review_title">Не бойтесь начать что-то новое</h5>
                <p class="sub_texts"><strong>Открытие филиала: </strong><span>сентябрь 2016</span></p>
                <p class="sub_texts"><strong>Чистая прибыль в месяц: </strong><span>108 400 <span class="Ruble">a</span></span></p>
                <div class="text">
                  <p> У меня был разный опыт работы. Я был и менеджером, и коммерческим директором, несколько раз открывал собственный бизнес. А теперь я – франчайзи. Наверное, это странное слово для русского языка. Особенно, когда ты франчайзи Франчайзинг5.                   
                    Несмотря на множество сложных слов и в целом не совсем понятный с первого раза бизнес, освоился я быстро. Сейчас уже активно веду работу с предпринимателями своего города по упаковке их бизнеса. Главное – не бояться начать что-то новое для себя и для рынка в России. Инновации всегда проходят тяжело, но и приносят всегда много прибыли.
                    </p>
                </div>
                <div class="reviews_profile">
                  <p class="name">Максим Мушников</p>
                  <p class="location">г. Екатеринбург, ул. Антона Валек, д. 15</p>
                </div>
              </div>
            </div> <!-- ///item -->
          </div>
        </div>
      </div>
    </div> <!-- / reviews_partners -->


     <div id="formBlock" class="formBlock" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/main_page/brilliant.png);">
      <div class="page-wrapper">
        <div class="inner">
          <div class="styleForm styleForm3">
            <h5><span>Вступайте в нашу команду</span> и вместе с Вами мы создадим совершенно новую предпринимательскую среду в России</h5>
            <div class="form_body">
              <div class="form_title">
                <h6><span>Сделайте первый шаг!</span><br> Скачайте PDF-презентацию франшизы</h6>
              </div>
              <form id="form_6" method="POST" action="<?php bloginfo('template_url'); ?>/message_process.php">
                <input type="hidden" name="FormFor" value="Скачать PDF-презентацию">
                <input type="hidden" name="WhereIsForm" value="Франшиза">
                <div class="inputBox">
                  <label for="name">Введите Ваше имя</label>
                  <input type="text" name="name" required="" onchange="checkChanges(this);" id="name" placeholder="Иванов Иван">
                </div>

                <div class="inputBox">
                  <label for="phone">Введите Ваш телефон</label>
                  <input type="tel" required="" onchange="checkChanges(this);" name="phone" id="phone" placeholder="8 (800) 000-00-00">
                </div>

                <div class="inputBox">
                  <label for="mail">Введите Ваш e-mail</label>
                  <input type="email" required="" onchange="checkChanges(this);" name="mail" id="mail" placeholder="mail@mail.ru">
                </div>

                <div class="submitBox">
                  <button type="submit" data-form-submit="franchdev_form" class="button">Скачать PDF-презентацию</button>
                </div>
              </form>
            </div>
            <div class="personal_access">
              <input type="checkbox" data-personal="underform" name="personal" id="personal" required="" checked="">
              <span>Нажимая на кнопку "Скачать PDF-презентацию", я даю согласие на обработку персональных данных и соглашаюсь с политикой конфиденциальности</span>
            </div>
            
          </div>
        </div>
      </div>
    </div>
<?php wp_reset_query(); ?>

<?php get_footer(); ?>