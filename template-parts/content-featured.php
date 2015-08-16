<?php
/**
 * Template part for displaying an featured writings.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hemdash
 */
// Arguments
$args = array(
    'post_type' => 'post',
    'meta_key'  => 'pub_date', // Order on the `pub_date` value
    'orderby'   => 'meta_value_num',
    'order'     => 'DESC',
    'meta_query' => array(
        array(
            'key'     => 'featured',
            'value'   => true
        )
    )
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
    echo '<ul>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();

        // Print data using the writing partial
        get_template_part( 'partials/partial', 'featured' );

    }
    echo '</ul>'; ?>


<?php } else {
    get_template_part( 'template-parts/content', 'none' );
}

/* Restore original Post Data */
wp_reset_postdata();
?>