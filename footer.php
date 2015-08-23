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
                <ul class="hList hList_md">
                    <li>
                        <a href="//twitter.com/hemdash" target="_blank">
                            <span class="icon icon-twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="//instagram.com/hemunguia/" target="_blank">
                            <span class="icon icon-instagram"></span>
                        </a>
                    </li>
                    <li>
                        <a href="http://fivethirtyeight.com/contributors/hayley-munguia/feed/" target="_blank">
                            <span class="icon icon-feed"></span>
                        </a>
                    </li>
                    <li>
                        <a href="/contact">
                            <span class="icon icon-envelope"></span>
                        </a>
                    </li>
                </ul>
            </div>
    		<div class="footer-right">&copy; <?php echo date("Y") ?> Hayley Munguia</div>
    	</footer>
    </div><!-- wrapper -->

    <?php wp_footer(); ?>
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-66647377-1', 'auto');
      ga('send', 'pageview');

    </script>
</body>
</html>
