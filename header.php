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
  //Get WP Appreance Logo
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $logo_src = wp_get_attachment_image_src( $custom_logo_id , 'full' );

  //Get number of cart quantity
  $cart_number = 0;
  foreach( WC()->cart->get_cart() as $cart_item_key => $cart_item ) { 
      if($cart_item['quantity'] > 0 ){
        $cart_number =  $cart_item['quantity'];
        
      }
      
    }
      ?> 
<body <?php body_class(); ?>>
    <header>
        <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navigation w-nav">
        <div class="navigation-items">
            <?php wp_nav_menu( ['container' => 'nav','container_class'=> 'w-nav-menu-con', 'menu_class'=>'w-nav-menu-con','theme_location'=>'Header Menu','menu'=> get_nav_menu_locations('Header Menu')['header_menu']] ) ?>
            <div class="menu-button w-nav-button"><img src="images/menu-icon_1menu-icon.png" width="22" alt="" class="menu-icon"></div>
            <!-- Logo -->
            <a href="/" aria-current="page" class="logo-link w-nav-brand w--current"><img src=<?php echo  $logo_src[0]; ?>" width="65" alt="" class="logo-image"></a>
            <!-- Cart and Search btn -->
            <div class="cart-search">
              <img src="images/search.svg" loading="lazy" width="30" alt="">
              <a href="/cart" data-node-type="commerce-cart-wrapper" ata-node-type="commerce-cart-open-link" class="w-commerce-commercecartopenlink button cc-cart w-inline-block">
                  <div class="w-inline-block">Cart</div>
                  <div class="w-commerce-commercecartopenlinkcount cart-quantity"><?php echo $cart_number ?></div>  
                </a>
            </div>
          </div>
        </div>
      </div>
    </header>
