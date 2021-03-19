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

<div class="one-toronto-section-div" style="background-image:url('<?php echo get_theme_file_uri('images/bg.png');  ?>');">
		<div class="container">
			<h1 class="p-4 text-white">Music</h1>
		</div>
	</div>



<section id="music" class="py-4">
          <div class="container">
          <div class="row ">

                <?php
                    $musics = new WP_Query(array('post_type'=>'music'));
                    while ($musics->have_posts() ) :
                        $musics->the_post();

                        get_template_part( 'template-parts/content', 'music' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    wp_reset_postdata();
                    ?>
                
                <!-- End of Music -->
        </div>
    </div>
</section>

<?php
    get_footer();
