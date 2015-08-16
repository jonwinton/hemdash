<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hemdash
 */

?>
        </main>
    	<footer role="contentinfo" class="footer">
            <div class="footer-left">
                <ul class="hList">
                    <li>
                        <a href="https://twitter.com/hemdash" target="_blank">
                            <span class="dashicons-before dashicons-twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="http://fivethirtyeight.com/contributors/hayley-munguia/feed/" target="_blank">
                            <span class="dashicons-before dashicons-rss"></span>
                        </a>
                    </li>
                    <li>
                        <a href="/contact">
                            <span class="dashicons-before dashicons-email-alt"></span>
                        </a>
                    </li>
                </ul>
            </div>
    		<div class="footer-right">&copy; <?php echo date("Y") ?> Hayley Munguia</div>
    	</footer>
    </div><!-- wrapper -->

<?php wp_footer(); ?>

</body>
</html>
