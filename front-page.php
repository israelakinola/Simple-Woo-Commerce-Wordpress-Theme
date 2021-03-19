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

<div class="one-toronto-section-div" style="background-image:url('<?php echo get_theme_file_uri('images/bg.png');  ?>'); background-size:cover; height:10px; margin-bottom:24px;">
	
	</div>
    
<section id="home">

<div class="page-content">
      <div class="container-fluid">
        <div class="product-grid-con row mx-auto">

                    <?php
                        // Setup your custom query
                        $args = array( 'post_type' => 'product', 'posts_per_page'=> -1 );
                        $products = new WP_Query( $args );
                         $product = wc_get_product($products->post);
                        // var_dump(get_product($products->post));
                    //    var_dump($products);
                     while ( $products->have_posts() ){ 
                        $products->the_post();  
                        set_query_var( 'price',$product->get_price_html());
                        get_template_part( 'template-parts/content', 'product');     
                       
                    }
                    ?>
       </div>
      </div>
    </div>
</section>



 <?php
get_footer();
