<?php
/**
 * The template for displaying the contact page.
 *
 * This is the template that displays the contact page by default.
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

        <div class="section">
            <?php echo do_shortcode( '[contact-form-7 id="67" title="Contact Form"]' ); ?>
        </div>

    <?php endwhile; // End of the loop. ?>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>
