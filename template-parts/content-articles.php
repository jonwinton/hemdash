<?php
/**
 * Template part for displaying an article content in page-articles.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hemdash
 */
// Arguments
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'post',
    'meta_key'  => 'pub_date', // Order on the `pub_date` value
    'orderby'   => 'meta_value_num',
    'order'     => 'DESC',
    'posts_per_page' => 10,
    'paged' => $paged
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
    echo '</ul>'; ?>


<div class="pagination">
    <?php
        $big = 999999999; // need an unlikely integer
        $pagArg =  array(
            'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format'    => '?paged=%#%',
            'current'   => max( 1, get_query_var('paged') ),
            'total'     => $the_query->max_num_pages,
            'prev_text'          => __('< Previous'),
            'next_text'          => __('Next >'),
        );
        
        print paginate_links( $pagArg );
    ?>
</div>





<?php } else {
    get_template_part( 'template-parts/content', 'none' );
}

/* Restore original Post Data */
wp_reset_postdata();
?>