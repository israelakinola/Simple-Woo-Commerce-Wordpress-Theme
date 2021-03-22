<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package one-toronto
 */

get_header();
?>

    
<section id="home">

<div class="products products-grid">
          <?php
                // Set custom query
                $args = array( 'post_type' => 'product', 'posts_per_page'=> -1 );
                $products = new WP_Query( $args );
                  $product = wc_get_product($products->post);
                  //WP Loop
                 if($products->have_posts()){
                  while ( $products->have_posts() ){ 
                    $products->the_post();  
                    set_query_var( 'price',$product->get_price_html());
                    get_template_part( 'template-parts/content', 'product');     
                    
                    }
                 }
            ?>

 
  </div>

<div class="products cc-subscribe-form">
    <div class="container cc-subscription-form">
      <div class="heading-jumbo-small">Monthly Newsletter</div>
      <div class="paragraph-light cc-subscribe-paragraph">Sign up to receive updates from our shop, including new tea selections and upcoming events.</div>
      <div class="form-block w-form">
        <form id="wf-form-Monthly-Newsletter-Form" name="wf-form-Monthly-Newsletter-Form" data-name="Monthly Newsletter Form" class="subscribe-form"><input type="email" class="text-field cc-subscribe-text-field w-input" maxlength="256" name="Newsletter-Email" data-name="Newsletter Email" placeholder="Enter your email" id="Newsletter-Email" required=""><input type="submit" value="Submit" data-wait="Please wait..." class="button w-button"></form>
        <div class="status-message w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="status-message w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
  </div>

<?php

get_footer();
