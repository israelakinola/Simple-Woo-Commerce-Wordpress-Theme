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
			<h1 class="p-4 text-white">Contact Us</h1>
		</div>
  </div>
  
<section id="contact" class="contact py-4">
          <div class="container">
            
            <div class="div">
            <?php echo do_shortcode('[contact-form-7 id="46" title="Contact form 1"]' ); ?>
            </div>
          </div>
        </section>

     

 <?php
 
get_footer();
