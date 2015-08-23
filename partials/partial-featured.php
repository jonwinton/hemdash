<?php 
/**
 * Template part for displaying a featured writing.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hemdash
 */

$cat = get_the_category()[0];
$cat_link = get_category_link($cat->term_id);
$date = DateTime::createFromFormat('Ymd', get_field('pub_date'));

$pub = get_field('publication');
$pub_link = get_permalink($pub->ID);

?>

<li>
    <div class="featured mix-featured_<?php print strtolower($cat->slug); ?>">
        <?php if ( has_post_thumbnail() ) { ?> 
            <div class="featured-left">
                <a href="<?php the_field('url'); ?>" target="_blank">
                    <div class="featured-left-img">
                    <?php the_post_thumbnail(); ?>
                    </div>
                </a>
            </div>
        <?php } ?>
        <div class="featured-right">
            <div class="featured-right-title">
                <a href="<?php the_field('url'); ?>" target="_blank">
                    <h3 class="hdg hdg_3">
                        <?php print get_the_title(); ?>
                    </h3>
                </a>
            </div>
            <div class="featured-right-excerpt">
                <?php the_excerpt(); ?>
            </div>
            <div class="featured-right-meta">
                <a href="<?php print $cat_link; ?>">
                    <?php print $cat->name; ?>
                </a> / 
                <?php print $date->format('m-d-Y'); ?>
            </div>
            <div class="featured-right-source">
                <a href="<?php print $pub_link; ?>"><?php print $pub->post_title; ?></a>
            </div>
        </div>
    </div>
</li>