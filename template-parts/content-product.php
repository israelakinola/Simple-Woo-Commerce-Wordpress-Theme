
<div class="product">
      <a href="<?php echo get_permalink( ); ?>" class="product-background-image w-inline-block" style=" background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID());  ?>'); background-size:cover;  background-position:center; "></a>
      <h1 class="product-title">
        <a href="<?php echo get_permalink( ); ?>" class="link"><?php the_title();?></a>
      </h1>
      <div class="rating"><img src="<?php echo get_theme_file_uri('images/star-icon.svg' ) ?>" loading="lazy" alt=""><img src="<?php echo get_theme_file_uri('images/star-icon.svg' ) ?>" loading="lazy" alt=""><img src="<?php echo get_theme_file_uri('images/star-icon.svg' ) ?>" loading="lazy" alt=""><img src="<?php echo get_theme_file_uri('images/star-icon.svg' ) ?>" loading="lazy" alt=""><img src="<?php echo get_theme_file_uri('images/star-icon.svg' ) ?>" loading="lazy" alt=""></div>
      <h3 class="product-price"><?php echo $price;?> </h3>
      <a href="<?php echo get_permalink( ); ?>" class="view-product-btn w-button">View Product</a>
</div>

