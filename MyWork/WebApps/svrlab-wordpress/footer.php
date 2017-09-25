</main>

<footer class="footer">
  <div class="footer__inner page-wrapper">
    <div class="footer__item"></div>
    <div class="footer__item"></div>
    <div class="footer__copyright">
      Copyright © 2017, SVR Sound Laboratory
    </div>
  </div>
</footer>

<? get_template_part('fixed-elements');?>

<div>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/materialize.min.js"></script>

  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/dist/bundle.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/phonemask.js"></script>
  <script>
    $(document).ready(function() {
        $('input[type=tel]').mask('+7(999)999-99-99');
    });
  </script>
</div>
  
<? wp_footer(); ?>
</body>
</html>
