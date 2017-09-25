<?php
/*

Description: This template Disabled

*/
?>
<?php get_header(); ?> <!-- Ваш файл header.php -->

<div class="content">


<?php if (have_posts()) : while (have_posts()) : ?>
<?php the_post();the_content(); ?>
<?php endwhile; endif; ?>


    	</div>
<?php get_footer(); ?> <!-- Ваш файл footer.php -->