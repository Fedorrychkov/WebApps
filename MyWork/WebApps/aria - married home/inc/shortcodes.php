<?
add_shortcode( 'dresses', 'rmcc_post_listing_shortcode1' );
function rmcc_post_listing_shortcode1( $atts ) {
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'dresses',
        'dresses_collection' => '',
        'dresses_category' => 'svadebnye-platya',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'title',
    ) );
    if ( $query->have_posts() ) { ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <?php get_template_part('loop/dresses'); ?>
        <?php endwhile;
        wp_reset_postdata(); ?>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}


// create shortcode with parameters so that the user can define what's queried - default is to list all blog posts
add_shortcode( 'list-posts', 'rmcc_post_listing_parameters_shortcode' );
function rmcc_post_listing_parameters_shortcode( $atts ) {
    ob_start();
  
    // define attributes and their defaults
    extract( shortcode_atts( array (
        'type' => 'dresses',
        'posts' => -1,
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'title',
        'dresses_collection' => '',
        'dresses_category' => ''
    ), $atts ) );
  
    // define query parameters based on attributes
    $options = array(
        'post_type' => $type,
        'order' => $order,
        'orderby' => $orderby,
        'posts_per_page' => $posts,
        'dresses_collection' => $dresses_collection,
        'dresses_category' => $dresses_category,
        'category_name' => $category,
    );
    $query = new WP_Query( $options );
    // run the loop based on the query
    if ( $query->have_posts() ) { ?>
        <ul class="clothes-listing ">
            <ul class="clothes-listing ">
                <li id="post-"> <?php the_title(); ?> ></li>
            </ul>
        </ul>
    <?php
        $myvariable = ob_get_clean();
        return $myvariable;
    }
}
?>
