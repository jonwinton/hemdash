<?php
/**
 * Template part for displaying the top most section of a page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hemdash
 */

?>
<div class="intro">
    <div class="intro-hd">
        <h2 class="hdg hdg_2">
            <?php the_title(); ?>            
        </h2>
    </div>
    <div class="intro-bd"><?php the_content(); ?></div>
</div>