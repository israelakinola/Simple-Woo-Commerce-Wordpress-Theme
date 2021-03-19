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

<div class="one-toronto-section-div" style="background-image:url('<?php echo get_theme_file_uri('images/bg.png');  ?>'); background-size:cover;">
		<div class="container">
			<h1 class="text-white">Community</h1>
		</div>
	</div>


<section class="community">

          <div class="grid row no-gutters">
          
           
            <?php
            $community_posts = new WP_Query(array('post_type'=>'community', 'posts_per_page'=>-1));
            while ($community_posts->have_posts() ) :
                $community_posts->the_post();
                if (get_the_post_thumbnail_url(get_the_ID()) ) :
                  get_template_part( 'template-parts/content', 'photos' );
                endif;

            endwhile; // End of the loop.
            wp_reset_postdata();
            ?>

    
        </div>

</section>


<div class="photo-preview hide">
    <div class="overlay">
      
    </div>

    <div class="container d-flex">
        <div class="preview" onmouseleave="setPreviewToFalse()">
        
        </div>
        <button onclick="closePhoto()" data-fancybox-close="" class="fancybox-button fancybox-button--close" title="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 10.6L6.6 5.2 5.2 6.6l5.4 5.4-5.4 5.4 1.4 1.4 5.4-5.4 5.4 5.4 1.4-1.4-5.4-5.4 5.4-5.4-1.4-1.4-5.4 5.4z"></path></svg></button>
    </div>
</div>

 <?php
get_footer();
