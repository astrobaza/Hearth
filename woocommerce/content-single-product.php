<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'product-page', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		//do_action( 'woocommerce_single_product_summary' );
		?>
	<div class="product-details-wrapper">
                <div class="quarter-wrapper product-options">
                    <div class="stupid">
                        <div class="dimension-wrapper">
                            <div class="dropdown-title-dimension">Dimensions</div>
                            <div class="arrow-right"></div>
                            <ul class="dropdown-dimension">
                                <li class="dropdown-item">dimension 1</li>
                                <li class="dropdown-item">dimension 2</li>
                                <li class="dropdown-item">dimension 3</li>
                                <li class="dropdown-item">dimension 4</li>
                            </ul>
                        </div>
                        <div class="material-wrapper">
                            <div class="dropdown-title-material">Material</div>
                            <div class="arrow-right"></div>
                            <ul class="dropdown-material">
                                <li class="dropdown-item">material 1</li>
                                <li class="dropdown-item">material 2</li>
                                <li class="dropdown-item">material 3</li>
                                <li class="dropdown-item">material 4</li>
                            </ul>
                        </div>
                        <div class="color-wrapper">
                            <div class="dropdown-title-color">Color</div>
                            <div class="arrow-right"></div>
                            <ul class="dropdown-color">
                                <li class="dropdown-item colored-circle c1"></li>
                                <li class="dropdown-item colored-circle c2"></li>
                                <li class="dropdown-item colored-circle c3"></li>
                                <li class="dropdown-item colored-circle c4"></li>
                                <li class="dropdown-item colored-circle c5"></li>
                                <li class="dropdown-item colored-circle c6"></li>
                                <li class="dropdown-item colored-circle c7"></li>
                            </ul>
                        </div>
                        <div class="delivery-wrapper">
                            <div class="dropdown-title-delivery">Delivery</div>
                            <div class="arrow-right"></div>
                            <ul class="dropdown-delivery">
                                <li class="dropdown-item">delivery 1</li>
                                <li class="dropdown-item">delivery 2</li>
                                <li class="dropdown-item">delivery 3</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="three-quarters-wrapper product-options">
                    <div class="product-name">PRODUCT NAME</div>
                    <div class="product-price">888€</div>
                    <div class="product-buttons"><a class="button-general-inverse" href="">ADD TO CART</a><a class="button-general" href="">ADD TO IDEABOOK</a><a class="button-general" href="">GIFT</a></div>
                    <div class="product-texts-wrapper">
                        <div class="product-description-headline">DESCRIPTION | </div>
                        <div class="product-about-headline">ABOUT THE BRAND</div>
                    </div>
                    <div class="product-description">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</div>
                    <ul class="follow-links">
                        <li class="follow-link-elem">SHARE</li>
                        <li class="follow-link-elem">
                            <a href="facebook.com"><img src="img/facebook.png" alt="facebook"></a>
                        </li>
                        <li class="follow-link-elem">
                            <a href="twitter.com"><img src="img/twitter.png" alt="twitter"></a>
                        </li>
                        <li class="follow-link-elem">
                            <a href="instagram.com"><img src="img/instagram.png" alt="instagram"></a>
                        </li>
                        <li class="follow-link-elem">
                            <a href="linkedin.com"><img src="img/linkedin.png" alt="linkedin"></a>
                        </li>
                        <li class="follow-link-elem">
                            <a href="pinterest.com"><img src="img/pinterest.png" alt="pinterest"></a>
                        </li>
                    </ul>
                </div>
            </div>
	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	//do_action( 'woocommerce_after_single_product_summary' );
	?>
	<div class="recommendations-wrapper">
            <div class="recommended-wrapper">
                <div class="recommended-text-wrap">
                    <div class="recommended-text">YOU MAY ALSO LIKE</div>
                </div>
                <div class="recommended-images"><img src="<?php echo get_template_directory_uri(); ?>/img/recommended_1.png" alt="recommended_1"><img src="<?php echo get_template_directory_uri(); ?>/img/recommended_2.png" alt="recommended_2"><img src="<?php echo get_template_directory_uri(); ?>/img/recommended_3.png" alt="recommended_3"><img src="<?php echo get_template_directory_uri(); ?>/img/recommended_4.png" alt="recommended_4"></div>
            </div>
            <div class="same-designer-wrapper">
                <div class="same-designer-text-wrap">
                    <div class="same-designer-text">BY THE SAME DESIGNER</div>
                </div>
                <div class="same-designer-images"><img src="<?php echo get_template_directory_uri(); ?>/img/same-artist_1.png" alt="same-artist_1"><img src="<?php echo get_template_directory_uri(); ?>/img/same-artist_2.png" alt="same-artist_2"><img src="<?php echo get_template_directory_uri(); ?>/img/same-artist_3.png" alt="same-artist_3"><img src="<?php echo get_template_directory_uri(); ?>/img/same-artist_4.png" alt="same-artist_4"></div>
            </div>
        </div>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
