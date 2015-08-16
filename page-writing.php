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
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="section">
            <?php // Content from the articles page ?>
            <?php get_template_part( 'template-parts/content', 'intro' ); ?>
        </div>
        <div class="hr"></div>
        <div class="section">
            <div class="box">
                <div class="box-hd">
                    <h2 class="hdg hdg_3">Featured Writing</h2>
                </div>
                <div class="box-bd">
                    <?php // Content from the articles page ?>
                    <?php get_template_part( 'template-parts/content', 'featured' ); ?>
                </div>
            </div>
        </div>
        <div class="hr"></div>
        <div class="section">
            <div class="box">
                <div class="box-hd">
                    <h2 class="hdg hdg_3">All Writing</h2>
                </div>
                <div class="box-bd">
                    <?php // Listing of articles ?>
                    <?php get_template_part( 'template-parts/content', 'articles' ); ?>
                </div>
            </div>
        </div>
    <?php endwhile; // End of the loop. ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
