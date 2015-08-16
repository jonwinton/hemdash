<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hemdash
 */

get_header(); ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="section">
                <?php // Content from the articles page ?>
                <?php get_template_part( 'template-parts/content', 'intro' ); ?>
            </div>
        
            <div class="section">
                <?php // Listing of articles ?>
                <?php get_template_part( 'template-parts/content', 'publication' ); ?>
            </div>

            <?php //the_post_navigation(); ?>

        <?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
