<?php get_header(); ?>
<?php
// Retrieves the stored value from the database
//$case_subtitle = get_post_meta( get_the_ID(), 'case_subtitle', true );
?>
<!--<main>
  <article>
    <?php the_post(); ?>
    <?php the_title(); ?>
    <?php the_content(); ?>
    <div class="copyright-news">
        <?php if( !empty( $case_subtitle ) ) {
            echo 'По материалам: <a href="'.$case_subtitle.'" target="_blank">'.$case_subtitle.'</a>';
        } ?>
    </div>
  </article>
</main>-->
<?php get_footer(); ?>