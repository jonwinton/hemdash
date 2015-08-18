<?php
/**
 * The template for displaying the articles page.
 *
 * This is the template that displays the articles page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hemdash
 */

get_header(); ?>

    <?php if ( have_posts() ) : ?>
        <div class="section">
            <div>
                <h2 class="hdg hdg_1">
                    <?php single_cat_title(); ?>
                </h2>
                <?php //the_archive_description(); ?>
            </div>
        </div>
        <div class="section">
            <ul class="blocks blocks_2upMd">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'partials/partial', 'writing'); ?>
                <?php endwhile; ?>
            </ul>
        </div>
            
        <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>



<?php //get_sidebar(); ?>
<?php get_footer(); ?>
