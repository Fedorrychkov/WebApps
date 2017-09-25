<?
	$news_subtitle = get_post_meta($post->ID, 'news_subtitle', true);	
 ?>

<article class="article">
   	<a href="<? the_permalink();?>"><div class="pic" style="background-image: url(<? get_template_directory(); ?><? the_post_thumbnail_url();?>)">
    </div></a>
    <div class="text">
    	<a class="black_color" href="<? the_permalink();?>"><h4><? the_title();?></h4></a>
    	<p><? the_excerpt();?></p>
		<div class="next"><a href="<? the_permalink();?>">Читать далее</a></div>
    	</div>
</article>