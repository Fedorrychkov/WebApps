<?
	$contacts_email = get_post_meta($post->ID, 'contacts_email', true);
//<h4 class="office_title"></h4>
	 
?>
<a class="office_link" href="<? the_permalink();?>" data-contact-email="<? echo $company_blog_subtitle ?>"><? the_title();?></a>
    