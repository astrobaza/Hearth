<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package hearth
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'hearth_container_type' );
?>

<?php //get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>


<?php //hearth_site_info(); ?>

        <footer>
            <div class="footer-container">
                <div class="footer-upper">
                    <ul class="quarter-wrapper">
                        <li class="footer-list-head">THE COMPANY</li>
                        <li><a class="footer-list-elem" href="#">Our Story</a></li>
                        <li><a class="footer-list-elem" href="#">Bio</a></li>
                        <li><a class="footer-list-elem" href="#">Charter</a></li>
                        <li><a class="footer-list-elem" href="#">Philantrophy</a></li>
                    </ul>
                    <ul class="quarter-wrapper">
                        <li class="footer-list-head">CUSTOMER CARE</li>
                        <li><a class="footer-list-elem" href="#">Contact us</a></li>
                        <li><a class="footer-list-elem" href="#">Sales Policy</a></li>
                    </ul>
                    <ul class="quarter-wrapper">
                        <li class="footer-list-head">Design services</li>
                        <li><a class="footer-list-elem" href="#">Ask for advice</a></li>
                        <li><a class="footer-list-elem" href="#">You are a professional</a></li>
                        <li><a class="footer-list-elem" href="#">You need contract services </a></li>
                    </ul>
                    <ul class="quarter-wrapper">
                        <li class="footer-list-head">Gifts & Sales</li>
                        <li><a class="footer-list-elem" href="#">Gift Concierge</a></li>
                        <li><a class="footer-list-elem" href="#">Gift Registry</a></li>
                        <li><a class="footer-list-elem" href="#">Gift Cards</a></li>
                        <li><a class="footer-list-elem" href="#">Trade & Contract</a></li>
                    </ul>
                </div>
                <div class="footer-lower">
                    <ul class="quarter-wrapper">
                        <li class="footer-list-head">Join US</li>
                        <li><a class="footer-list-elem" href="#">Careers</a></li>
                        <li><a class="footer-list-elem" href="#">Become a supplier</a></li>
                        <li><a class="footer-list-elem" href="#">Become a curator</a></li>
                        <li><a class="footer-list-elem" href="#">Contribute to THE MAGAZINE</a></li>
                        <li><a class="footer-list-elem" href="#">DONATE</a></li>
                    </ul>
                    <ul class="half-wrapper">
                        <li><a class="footer-list-head">STAY IN TOUCH</a></li>
                        <li><a class="footer-list-elem" href="#">Get notified of special offers, latest collections, gift guides and NOMADESSENCE events.</a></li>
                        <li>
                            <a class="footer-list-elem" href="#"></a>
                            <div class="newsletter-wrapper"></div>
                        </li>
                    </ul>
                    <ul class="quarter-wrapper follow-links">
                        <li class="footer-list-head">FOLLOW US</li>
                        <li class="footer-list-elem">
                            <a href="facebook.com"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="facebook"></a>
                        </li>
                        <li class="footer-list-elem">
                            <a href="twitter.com"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="twitter"></a>
                        </li>
                        <li class="footer-list-elem">
                            <a href="instagram.com"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="instagram"></a>
                        </li>
                        <li class="footer-list-elem">
                            <a href="linkedin.com"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" alt="linkedin"></a>
                        </li>
                        <li class="footer-list-elem">
                            <a href="pinterest.com"><img src="<?php echo get_template_directory_uri(); ?>/img/pinterest.png" alt="pinterest"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function() {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = '//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X');
        ga('send', 'pageview');
    </script>

    <script>
    	jQuery('.myaccountnomad').html(
    		'<span class="logo-nav"><a>My<img style="max-height:19px; position:relative; top:-4px;" src="<?php echo get_template_directory_uri(); ?>/img/logo-symbol.png" alt="symbol"></a></span>'
    	);

    </script>
</body>

</html>

