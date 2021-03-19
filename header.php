<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package one-toronto
 */

$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="icon" href="<?php echo $image[0]; ?>" type="image/gif" sizes="16x16">
	<?php wp_head(); ?>
</head>

<?php 
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
   $cart_number = 0;
  foreach( WC()->cart->get_cart() as $cart_item_key => $cart_item ) { 
      if($cart_item['quantity'] > 0 ){
        $cart_number =  $cart_item['quantity'];
        
      }
      
    }
      ?> 
<body onload="setPreviewToFalse()" <?php body_class(); ?>>
<header class="hdr-wrap">
      <div class="hdr-content hdr-content-sticky">
        <div class="container">
          <div class="row">
            <div class="col-auto show-mobile">
              <!-- Menu Toggle -->
              <div class="menu-toggle"> <a href="#" class="mobilemenu-toggle"><i class="icon-menu"></i></a> </div>
              <!-- /Menu Toggle -->
            </div>
            <div class="col-auto hdr-logo">
              <a href="/" class="logo"><img width="50" src='<?php echo get_theme_file_uri('images/logo.png') ?>' alt="Logo"></a>
            </div>
            <div class="hdr-phone hide-mobile">
              <i class="icon-phone"></i><span>+1 437 231 0617 </span>
            </div>
            <!--navigation-->
            <div class="hdr-nav hide-mobile nav-holder-s">
            </div>
            <!--//navigation-->
            <div class="hdr-links-wrap col-auto ml-auto">
              <div class="hdr-inline-link">
                <!-- Header Search -->
                <div class="search_container_desktop">
                  <div class="dropdn dropdn_search dropdn_fullwidth">
                    <a href="#" class="dropdn-link  js-dropdn-link only-icon"><i class="icon-search"></i><span class="dropdn-link-txt">Search</span></a>
                    <div class="dropdn-content">
                      <div class="container">
                        <form method="get" action="#" class="search search-off-popular">
                          <input name="search" type="text" class="search-input input-empty" placeholder="What are you looking for?">
                          <button type="submit" class="search-button"><i class="icon-search"></i></button>
                          <a href="#" class="search-close js-dropdn-close"><i class="icon-close-thin"></i></a>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Header Search -->
            
             
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="hdr hdr-style2">
        <div class="hdr-topline js-hdr-top">
          <div class="container">
            <div class="row">
              <div class="col hdr-topline-left">
                <!-- Header Social -->
                <div class="hdr-line-separate">
                  <ul class="social-list list-unstyled">
                    <li>
                      <a target="_blank" href="https://www.instagram.com/one.toronto/"><i class="icon-facebook"></i></a>
                    </li>
                    <li>
                      <a target="_blank" href="https://www.instagram.com/one.toronto/"><i class="icon-twitter"></i></a>
                    </li>
                    <li>
                      <a target="_blank" href="https://www.instagram.com/one.toronto/"><i class="icon-google"></i></a>
                    </li>
                    <li>
                      <a target="_blank" href="https://www.instagram.com/one.toronto/"><i class="icon-instagram"></i></a>
                    </li>
                    <li>
                      <a target="_blank" href="https://www.youtube.com/channel/UCOIHiCxrgEf0HTJadjfIMFw"><i class="icon-youtube"></i></a>
                    </li>
                    <li>
                      <a target="_blank" href="https://www.youtube.com/channel/UCOIHiCxrgEf0HTJadjfIMFw"><i class="icon-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
                <!-- /Header Social -->
              </div>
              <div class="col hdr-topline-right hide-mobile">
                <div class="hdr-inline-link">
                  <!-- Header Language -->
                  <div class="dropdn_language">
                    <div class="dropdn dropdn_language dropdn_language--noimg dropdn_caret">
                      <a href="#" class="dropdn-link js-dropdn-link"><span class="js-dropdn-select-current">English</span><i class="icon-angle-down"></i></a>
                      <div class="dropdn-content">
                        <ul>
                          <li class="active"><a href="#"><img src="images/flags/en.png" alt="">English</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- /Header Language -->
                  <!-- Header Currency -->
                  <div class="dropdn_currency">
                    <div class="dropdn dropdn_caret">
                      <a href="#" class="dropdn-link js-dropdn-link">CAD dollars<i class="icon-angle-down"></i></a>
                      <div class="dropdn-content">
                        <ul>
                          <li class="active"><a href="#"><span>CAD dollars</span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- /Header Currency -->
                
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hdr-content">
          <div class="container">
            <div class="row">
              <div class="col-auto show-mobile">
                <!-- Menu Toggle -->
                <div class="menu-toggle"> <a href="" class="mobilemenu-toggle"><i onclick="openMobileNav(event)" class="icon-menu"></i></a> </div>
                <!-- /Menu Toggle -->
              </div>
              <!--navigation-->
              <div class="col-8 hdr-nav hide-mobile nav-holder">
                <!--mmenu-->
                <ul class="mmenu mmenu-js">
                  <li class="mmenu-item--simple"><a href="/" class="<?php if (is_page('home')) echo 'active' ?>">Home</a></li>
                  <li class="mmenu-item--simple"><a class="<?php if (is_page('community')) echo 'active' ?>" href="/community">Community</a></li>
                  <li class="mmenu-item--simple"><a class="<?php if (is_page('Lifestyle') OR get_post_type() == 'post' ) echo 'active' ?>" href="/lifestyle">LifeStyle</a></li>
                  <li class="mmenu-item--simple"><a class="<?php if (is_page('about')) echo 'active' ?>" href="/about">About</a></li>
                </ul>
                <!--/mmenu-->
              </div>
              <!--//navigation-->
              <div class="hdr-logo">
                <a href="/" class="logo"><img width="50" src="<?php echo get_theme_file_uri('images/logo.png') ?>" alt="Logo"></a>
              </div>
              <div class="col col-lg-8 hdr-links-wrap">
                <div class="hdr-links">
                  <div class="hdr-phone">
                    <i class="icon-phone"></i><span>+1 437 231 0617</span>
                  </div>
                  <div class="hdr-inline-link">
                    <!-- Header Search -->
                    <div class="search_container_desktop">
                      <div class="dropdn dropdn_search dropdn_fullwidth">
                        <a href="#" class="dropdn-link  js-dropdn-link only-icon"><i class="icon-search"></i><span class="dropdn-link-txt">Search</span></a>
                        <div class="dropdn-content">
                          <div class="container">
                            <form method="get" action="#" class="search search-off-popular">
                              <input name="search" type="text" class="search-input input-empty" placeholder="What are you looking for?">
                              <button type="submit" class="search-button"><i class="icon-search"></i></button>
                              <a href="#" class="search-close js-dropdn-close"><i class="icon-close-thin"></i></a>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /Header Search -->
                  
                    <div class="dropdn dropdn_fullheight minicart">
                      <a href="/cart" class="dropdn-link minicart-link">
                        <i class="icon-basket"></i>
                        <span class="minicart-qty"><?php echo $cart_number ?></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </div>
  </header>

  <!-- Mobile Nav Setup -->
  <div class="mobile-nav-links-con d-lg-none hidden">
    <div class="overlay-mobile-nav"></div>
    <nav class="mobile-nav-con ">
          <div class="close-toggle" onclick="closeNav()">Close</div>
          <ul class="nav nav-level-1">
                <li><a href="/" class="<?php if (is_page('home')) echo 'active' ?>">Home</a></li>
                  <li><a class="<?php if (is_page('community')) echo 'active' ?>" href="/community">Community</a></li>
                  <li><a class="<?php if (is_page('Lifestyle') OR get_post_type() == 'post' ) echo 'active' ?>" href="/lifestyle">LifeStyle</a></li>
                  <li><a class="<?php if (is_page('about')) echo 'active' ?>" href="/about">About</a></li>
            </ul>
    </nav>
  </div>
  <!-- / Mobile Nav Setup -->


