<div class="vacancies_item">
  <div class="more_vacancies_info">
    <h4 class="vocancy_title"><?php the_title(); ?> <span class="arrow_top passive"></span></h4>
  </div>

  <div class="vacancies_hidden">
  <div class="vacancies_blocks">
    <div class="vacancies_block vacancies_block1">
      <h5>Что Вы будете делать: </h5>
      <?php
        $mass = get_post_meta($post->ID);
        foreach($mass['voc_1'] as $value) {?>
                <p class="vanacies_paragraph"><?echo $value;}?></p>
    </div>

    <div class="vacancies_block vacancies_block2">
      <h5>Что от Вас требуется: </h5>
      <?php
        $mass = get_post_meta($post->ID);
        foreach($mass['voc_2'] as $value) {?>
                <p class="vanacies_paragraph"><?echo $value;}?></p>
    </div>

    <div class="vacancies_block vacancies_block3">
      <h5>Что мы предлагаем: </h5>
      <?php
        $mass = get_post_meta($post->ID);
        foreach($mass['voc_3'] as $value) {?>
                <p class="vanacies_paragraph"><?echo $value;}?></p>

    </div>
  </div>

    <div class="vacancie_button">
      <button data-popup="resume_modal" data-send-resume="<?php the_title(); ?>" class="button_purp">Отправить отклик</button>
    </div>
  </div>
</div>