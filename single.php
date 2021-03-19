<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package one-toronto
 */

get_header();
?>


<?php
			while ( have_posts() ) {
				the_post();
		?>


<section class="post">
	<div class="container-fluid">
		<div class="page-content">
    <div class="holder breadcrumbs-wrap mt-0 py-4">
      <div class="container">
        <ul class="breadcrumbs">
          <li><a href="/Lifestyle">Home</a></li>
          <li><span><?php the_title();?></span></li>
        </ul>
      </div>
    </div>
    <div class="holder">
      <div class="container">
        <div class="row">
          <div class="col-12 mx-auto p-0" style="flex:0 0 100%; width:100%; max-width:800px;">
            <div class="post-full">
              <h2 class="post-title"><?php the_title() ?></h2>
              <div class="post-links">
                <div class="post-date"><i class="icon-calendar"></i><?php the_date() ?></div>
                <a href="#" class="post-link">by <?php the_author() ?></a>
              </div>
              
              <div class="post-text">
				<?php the_content( );?>
              </div>
              
            </div>




           
          </div>
          
        </div>
      </div>
    </div>
  </div>
	</div>
</section>

		
<?php

}
?>




<?php

get_footer();
