<?
/*
*   Template Name: Product Page - Single
*   Description: Template for single product page
*/
get_header(); ?>

<div class="single_product">
  <div class="single_product__inner page-wrapper">
    <div class="single_product__content flex_co__between">
      <div class="single_product__item">
        <img src="<? bloginfo('template_url');?>/assets/img/amplifire.jpg" class="single_product__image materialboxed hoverable z-depth-2">
      </div>
      <div class="single_product__item offset__padding-left--lg">    
        <h2 class="single_product__title title__block--medium">Модель из дерева</h2>
        <div class="single_product__textbox offset__padding-top--md">
          <p>Ламповый усилитель мощности, однотактная конфигурация, лампы 2 х 5AR4 (Sovtek), 2 х Takatsuki TA-300B, 4 х 6SN7GTB (Tung-Sol), мощность 2 х 8 Вт (4, 8, 16 Ом), диапазон частот 10 Гц - 30 кГц, входы: RCA, Ethernet, габариты 460х237х340 мм, вес 29 кг.</p>

          <table class="highlight single_product__table offset__margin-top--sm">
            <thead>
              <tr>
                  <th>Именование</th>
                  <th>Значение</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Выходная мощность</td>
                <td>2 x 8 Вт</td>
              </tr>
              <tr>
                <td>Масса</td>
                <td>29 кг</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      
      <!-- <div class="row">
        <div class="col s12">
          <ul class="tabs">
            <li class="tab col s3"><a href="#test1">Test 1</a></li>
            <li class="tab col s3"><a class="active" href="#test2">Test 2</a></li>
            <li class="tab col s3"><a href="#test4">Test 4</a></li>
          </ul>
        </div>
        <div id="test1" class="col s12">Test 1</div>
        <div id="test2" class="col s12">Test 2</div>
        <div id="test3" class="col s12">Test 3</div>
        <div id="test4" class="col s12">Test 4</div>
      </div> -->

      <!-- <? get_template_part('templates/orderForm');?> -->
      
    </div>
  </div>
</div>

<!-- <script type="text/javascript">
   $(document).ready(function(){
    $('ul.tabs').tabs();
  });
</script> -->
<? get_footer(); ?>
