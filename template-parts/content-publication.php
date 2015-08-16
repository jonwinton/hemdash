<?php
/**
 * Template part for displaying an article content in page-articles.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hemdash
 */

$id = get_the_ID();

$args = array(
    'post_type' => 'post',
    'meta_key'  => 'pub_date', // Order on the `pub_date` value
    'orderby'   => 'meta_value_num',
    'order'     => 'DESC',
    'meta_query' => array(
        array(
            'key'     => 'publication',
            'value'   => $id
        )
    )
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
    echo '<ul class="blocks blocks_2upMd">';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();

        // Print data using the writing partial
        get_template_part( 'partials/partial', 'writing' );

    }
    echo '</ul>';
} else {
    get_template_part( 'template-parts/content', 'none' );
}
/* Restore original Post Data */
wp_reset_postdata();
?>