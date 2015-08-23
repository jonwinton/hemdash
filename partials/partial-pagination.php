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