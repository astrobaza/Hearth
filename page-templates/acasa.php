<?php
/**
 * Template Name: Home
 *
 * Template for displaying a home page.
 *
 * @package hearth
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<?php get_header(); ?>
        <div class="fullpage">
            <div class="main-hero"> <img src="<?php echo get_field('banner');?>" alt="">
                <div class="main-hero-text">
                    <h1 class="main-hero-title"><?php echo get_field('banner_text');?></h1>
                    <h2 class="main-hero-subtitle"><?php echo get_field('banner_');?></h2><a class="button-general" href="<?php echo get_field('banner_link');?>"><?php echo get_field('banner_button');?></a></div>
            </div>
            <div class="firstpage-banner"><img src="<?php echo get_field('second_banner_image');?>" alt="">
                <div class="firstpage-banner-wrapper">
                    <div class="firstpage-banner-text"><?php echo get_field('second_banner_');?></div><img class="firstpage-banner-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-symbol.png" alt="symbol"></div>
            </div>
            <div class="collection-wrapper">
                <div class="collection-left">
                    <div class="collection-texts">
                        <h3 class="collection-title"><?php echo get_field('collections_title');?></h3>
                        <?php echo get_field('collections_description');?>
                        <a class="button-general-inverse" href="<?php echo get_field('collections_url');?>"><?php echo get_field('collections_button');?></a></div>
                </div>
                <div class="collection-right">
                    <div class="collection-images">
                        <ul>
                    	<?php $collectiions  = get_field('collections_repeter');
                    		foreach ($collectiions as $colectie) {
                    			echo '<li> <img class="collection-image" src="'.$colectie["image"].'" alt="collections">
                    			                                <div class="collection-text">'.$colectie["text"].'</div>
                    			                                <div class="collection-dash"></div>
                    			                            </li>';
                    		}

                    	?>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="firstpage-banner-darkened"><img src="<?php echo get_field('banner_3');?>" alt="">
                <div class="firstpage-banner-wrapper">
                    <h3 class="firstpage-banner-header underline"><?php echo get_field('banner_3_title');?></h3>
                    <h4 class="firstpage-banner-description"><?php echo get_field('banner_3_text');?></h4></div>
            </div>
            <div class="gift-wrapper">
                <div class="gift-left">
                    <div class="gift-image"><img src="<?php echo get_field('gift_image');?>" alt="gift"></div>
                </div>
                <div class="gift-right">
                    <div class="gift-texts">
                        <h3 class="gift-title"><?php echo get_field('gift_title');?></h3>
                        <h4 class="gift-subtitle"><?php echo get_field('gift_subtitle');?></h4>
                        <div class="gift-description"><?php echo get_field('gift_text');?></div>
                        <a href="<?php echo get_field('gift_link');?>" class="button-general-inverse"><?php echo get_field('gift_button');?></a>
                    </div>
                </div>
            </div>
            <div class="art-wrapper"><img src="<?php echo get_field('banner_4_image');?>" alt="">
                <div class="art-texts">
                    <h3 class="art-title"><?php echo get_field('banner_4_title');?></h3>
                    <h4 class="art-subtitle"><?php echo get_field('banner_4_subtitle');?></h4><img class="art-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-symbol.png" alt="symbol"><a href="<?php echo get_field('banner_4_link');?>" class="button-general"><?php echo get_field('banner_4_button');?></a></div>
            </div>
            <div class="story-wrapper"><img src="<?php echo get_field('story_image');?>" alt="story">
                <div class="story-texts">
                    <h3 class="story-title"><?php echo get_field('story_title');?></h3>
                    <h4 class="story-subtitle"><?php echo get_field('story_text');?></h4><a href="<?php echo get_field('story_link');?>" class="button-general-inverse"><?php echo get_field('story_button');?></a></div>
            </div>
            <div class="magazine-wrapper">
                <div class="magazine-left"><img class="magazine-image-first" src="<?php echo get_template_directory_uri(); ?>/img/magazine.png" alt="magazines">
                    <div class="magazine-title">THE MAGAZINE</div>
                </div>
                <div class="magazine-right">
                    <div class="magazine-images">
                        <ul>
                        	<?php $stories  = get_field('story_content');
                    		foreach ($stories as $story) {
                    			echo '<li> <img class="collection-image" src="'.$story['image'].'" alt="magazine">
		                                <div class="magazine-text-wrap">
		                                    <div class="magazine-text">'.$story['title'].'</div>
		                                    <div class="magazine-description">'.$story['text'].'</div>
		                                </div>
		                            </li>';
                    		}

                    	?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="firstpage-banner join-wrapper"><img src="<?php echo get_field('member_image');?>" alt="">
                <div class="firstpage-banner-wrapper">
                    <div class="firstpage-banner-text"><?php echo get_field('member_text');?></div><img class="firstpage-banner-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-symbol.png" alt="symbol"><a href="<?php echo get_field('member_link');?>" class="button-general-inverse"><?php echo get_field('member_button');?></a></div>
            </div>
        </div>
<?php get_footer(); ?>

