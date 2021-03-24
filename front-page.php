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



<?php

get_footer();
